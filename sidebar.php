<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package burn
 */

?>
<style>
.nav {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    left: 0;
    top: 0;
    bottom: 0;
    height: 100%;
    width: 250px;
    background-color: #ff5964;
    transform: translateX(-100%);
    transition: transform 0.2s ease;
    z-index: 100;
}

.nav.open {
    transform: translateX(0);
    box-shadow: 5px 0 10px rgba(0, 0, 0, 0.25);
}

.nav_icon {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 50%;
    right: -40px;
    width: 40px;
    height: 40px;
    border-radius: 0 10px 10px 0;
    border-right: 1px solid #ff8c94;
    background-color: #ff5964;
    cursor: pointer;
    box-shadow: 5px 0 5px rgba(0, 0, 0, 0.25);
    transform: translateY(-50%);
    transition: all 0.5s;
}

.nav_icon>i {
    pointer-events: none;
    color: #fff;
    font-size: 1rem;
    transition: transform 0.2s ease;
}

.nav_icon>i.rotate {
    transform: rotate(180deg);
}

.nav_icon>span {
    pointer-events: none;
    font-size: 0;
    color: #fff;
    transform: rotate(90deg);
    transition: all 0.2s;
}

.nav_icon>.shape_container {
    position: absolute;
    left: 0;
    height: 20px;
    width: 20px;
    z-index: 1;
}

.nav_icon>.shape_container.bottom {
    bottom: -20px;
}

.nav_icon>.shape_container.top {
    top: -20px;
    transform: rotateX(180deg);
}

.nav_icon>.shape_container>.icon_shape {
    fill: #ff5964;
}

.nav_icon.mouseDistance {
    transition: all 0.2s, top 0s;
}

.nav_icon.mouseDistanceCloser {
    height: 60px;
    width: 60px;
    right: -60px;
    border-radius: 0 30px 30px 0;
}

.nav_icon.mouseDistanceCloser>.shape_container {
    height: 40px;
    width: 40px;
}

.nav_icon.mouseDistanceCloser>.shape_container.top {
    top: -40px;
}

.nav_icon.mouseDistanceCloser>.shape_container.bottom {
    bottom: -40px;
}

.nav_icon.mouseDistanceCloser>span {
    font-size: 10px;
}

.nav_icon.mouseDistanceCloser>i {
    font-size: 1.5rem;
}

.nav_icon:hover {
    box-shadow: none;
}

.nav>ul {
    display: flex;
    flex-direction: column;
    width: 100%;
    padding: 1rem 0;
    overflow: auto;
}

.nav>ul>li {
    width: 100%;
    min-height: 3rem;
}

.nav>ul>li:not(:last-child) {
    margin-bottom: 1.5rem;
}

.nav>ul>li>a {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    height: 100%;
    color: #8c0009;
    text-shadow: 0 1px 1px #ff737c;
    text-transform: uppercase;
}

.nav>ul>li>a:hover {
    color: #fff;
}

.nav>ul>li>a>i {
    display: block;
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: currentColor;
}
</style>
<!-- NAVIGATION -->
<nav id="nav" class="nav">
    <div id="nav_icon" class="nav_icon">
        <svg class="shape_container top">
            <path class="icon_shape" d="M 0 0 L 20 0 Q 0 0 0 20 Z" />
        </svg>
        <span>MENU</span><i class="fas fa-angle-right"></i>
        <svg class="shape_container bottom">
            <path class="icon_shape" d="M 0 0 L 20 0 Q 0 0 0 20 Z" />
        </svg>
    </div>

    <aside id="secondary" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->