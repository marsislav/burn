/**
* Template Name: burn - v1.0
* Template URL: https://burn.marsislav.net
* Author: Marsislav
* License: GNU/ GPL
*/


document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Sticky header on scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    document.addEventListener('scroll', () => {
      window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
    });
  }

  /**
   * Mobile nav toggle
   */

  const mobileNavToogleButton = document.querySelector('.mobile-nav-toggle');

  if (mobileNavToogleButton) {
    mobileNavToogleButton.addEventListener('click', function(event) {
      event.preventDefault();
      mobileNavToogle();
    });
  }

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToogleButton.classList.toggle('bi-list');
    mobileNavToogleButton.classList.toggle('bi-x');
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navbar a').forEach(navbarlink => {

    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

/**
 * Slide idebar
 * /
 /**
 ** HELPER FUNCTIONS
 */
const qSel = (obj) => document.querySelector(obj);
const qSelAll = (obj) => document.querySelectorAll(obj);

/**
 ** GLOBAL VARIABLES
 */
const nav = qSel('#nav');
const nav_container = qSel('#nav_icon');
const nav_icon = qSel('#nav_icon > i');
const nav_links = qSelAll('#nav > ul > li > a');

/**
 ** OPEN SIDEBAR
 */
nav_container.addEventListener('click', () => {
    if (nav.classList.contains('open')) {
        closeSidebar();
        return;
    }
    
    nav.classList.add('open');
    nav_icon.classList.add('rotate');
});

/**
 ** CLOSE SIDEBAR AFTER CLICK ON LINK 
 */
nav_links.forEach(link => {
    link.addEventListener('click', e => {
        e.stopPropagation();
        closeSidebar();
    });
});

/**
 ** MOUSE TRACK EVENT 
 */
if (innerWidth > 1024) {
    // Mouse move event
    window.addEventListener('mousemove', e => {
        const mouseY = Math.round((e.y * 100) / innerHeight);
        const mouseX = Math.round((e.x * 100) / innerWidth);

        // Detect mouse position
        if (!nav.classList.contains('open') && mouseX <= 20) {
            nav_container.style.top = `${mouseY}%`;
            nav_container.classList.add('mouseDistance');
        } else {
            nav_container.classList.remove('mouseDistance');
            nav_container.style.top = '50%';
        }
        
        // Check mouse distance to nav
        mouseX <= 10 ? 
            nav_container.classList.add('mouseDistanceCloser') : 
            nav_container.classList.remove('mouseDistanceCloser');
            
        if (nav.classList.contains('open') || (mouseY >= 90 || mouseY <= 10)) resetNavIcon();
    }); 
    
    // Mouse leave window
    document.addEventListener('mouseleave', () => {
        closeSidebar();
        resetNavIcon();
    });
};

/**
 ** CLOSE SIDEBAR WHILE CLICKING OUTSIDE
 */
window.addEventListener('click', e => {
    e.stopPropagation();
    if (!nav.classList.contains('open')) return;
    if (!e.target.closest('nav')) {
        closeSidebar();
        resetNavIcon();
    }
});

/**
 ** CLOSE SIDEBAR
 */
function closeSidebar() {
    nav.classList.remove('open');
    nav_icon.classList.remove('rotate');
}

/**
 ** RESET NAV ICON
 */
function resetNavIcon() {
    nav_container.classList.remove('mouseDistance');
    nav_container.classList.remove('mouseDistanceCloser');
    nav_container.style.top = '50%';
}
 

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }

  /**
   * Hero Slider
 
  var swiper = new Swiper(".sliderFeaturedPosts", {
    spaceBetween: 0,
    speed: 500,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".custom-swiper-button-next",
      prevEl: ".custom-swiper-button-prev",
    },
  });
  */
  /**
   * Open and close the search form.
   */
  const searchOpen = document.querySelector('.js-search-open');
  const searchClose = document.querySelector('.js-search-close');
  const searchWrap = document.querySelector(".js-search-form-wrap");

  searchOpen.addEventListener("click", (e) => {
    e.preventDefault();
    searchWrap.classList.add("active");
  });

  searchClose.addEventListener("click", (e) => {
    e.preventDefault();
    searchWrap.classList.remove("active");
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });

});