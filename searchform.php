<div class="search-form-wrap js-search-form-wrap">
    <form action="<?php echo esc_url(home_url('/'));?>" class="search-form" role="search" method="get" <span
        class="icon bi-search">
        </span>
        <input type="sarch" placeholder="<?php echo esc_attr_x('Type here', 'placeholder', 'burn')?>"
            value="<?php the_search_query();?>" name='s' class="form-control screen-reader-class">
        <button class="btn js-sea5rch-close" type="submit"><?php echo esc_attr_x('Search', 'burn');?></button>
        <button class="btn js-search-close"><span class="bi-x"></span></button>
    </form>
</div>