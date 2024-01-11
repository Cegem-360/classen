import './bootstrap';
//import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';
import '../css/app.css';
import '../css/classen.css';
import.meta.glob([
    '../img/**',
]);

//Livewire.start();

/* ####################################
       Swiper (carousels, gallerys)
  #####################################  */
// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination, Thumbs, Grid, EffectFade } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


const swiper = new Swiper('.hero-swiper', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination],
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    //slidesPerView: 3,
    //spaceBetween: 30,

    // If we need pagination
    pagination: {
        el: '.hero-swiper-pagination',
        type: 'fraction',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.hero-swiper-button-next',
        prevEl: '.hero-swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

const prdSwiper = new Swiper('.prd-swiper', {
    // configure Swiper to use modules
    modules: [Navigation, Pagination, Thumbs],
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,

    // If we need pagination
    pagination: {
        el: '.prd-swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.prd-swiper-button-next',
        prevEl: '.prd-swiper-button-prev',
    },
    breakpoints: {
        976: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        560: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        380: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
    },
});

const detailPageSwiperThumbs = new Swiper(".detail-page-swiper-thumbs", {
    slidesPerView: 2,
    grid: {
        rows: 3,
    },
    spaceBetween: 10,
    //direction: 'vertical'
    //freeMode: true,
    //watchSlidesProgress: true,
});

const detailPageSwiper = new Swiper('.detail-page-swiper', {
    modules: [Thumbs],
    direction: 'horizontal',
    loop: true,
    thumbs: {
        swiper: detailPageSwiperThumbs,
    },
});

const doorFrontsSwiperThumbs = new Swiper(".door-fronts-swiper-thumbs", {
    modules: [Grid],
    slidesPerView: 4,
    grid: {
        fill: 'row',
        rows: 8,
    },
});

const doorFrontsSwiper = new Swiper('.door-fronts-swiper', {
    modules: [Thumbs, EffectFade],
    direction: 'horizontal',
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    loop: true,
    thumbs: {
        swiper: doorFrontsSwiperThumbs,
    },
});


/* ###############################
       PhotoSwipe v5 (Lightbox)
  ##################################  */
/* https://photoswipe.com/getting-started/ */

import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe-lightbox.esm.js';
import PhotoSwipe from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.esm.js';

const photo_swipe_options = {
    gallery: '.lightbox',
    pswpModule: PhotoSwipe,
    // set background opacity
    bgOpacity: 1,
    showHideOpacity: true,
    children: 'a',
    loop: true,
    showHideAnimationType: 'zoom', /* options: fade, zoom, none */

    /* Click on image moves to the next slide */
    imageClickAction: 'close',
    tapAction: 'close',

    /* ## Hiding a specific UI element ## */
    zoom: false,
    close: true,
    counter: true,
    arrowKeys: true,
    /* ## Options ## */
    bgOpacity: "1",/* deafult: 0.8 */
    wheelToZoom: false, /* deafult: undefined */
};

const lightbox = new PhotoSwipeLightbox(photo_swipe_options);

lightbox.init();

lightbox.on('change', () => {
    const { pswp } = lightbox;
    detailPageSwiper.slideTo(pswp.currIndex, 0, false);
    console.log('Slide index', pswp.currIndex);
    //console.log('Slide object', pswp.currSlide);
    //console.log('Slide object data', pswp.currSlide.data);
});

/* ### PhotoSwipe events ### */

lightbox.on('afterInit', () => {
    const { pswp } = lightbox;
    //if(detailPageSwiper.params.autoplay.enabled){
    //  detailPageSwiper.autoplay.stop();
    //};
});

lightbox.on('closingAnimationStart', () => {
    //console.log('closingAnimationStart');
    const { pswp } = lightbox;
    detailPageSwiper.slideTo(pswp.currIndex, 0, false);
    /* if autoplay enabled == true -> autoplay.start() when close lightbox */
    //if(detailPageSwiper.params.autoplay.enabled){
    //  detailPageSwiper.autoplay.start();
    //}
});



/* ###############################
       qTip2 jQuery plugin
  ##################################  */
/* https://qtip2.com/guides */
$(document).ready(function () {
    $('.jsTooltipBig').each(function () {
        var _self = $(this);
        var windowWidth = $(window).width();
        var positionMy = 'top center';
        var positionAt = 'bottom center';

        // Adjust position for small screens
        if (windowWidth <= 560) { // Adjust 560px as per your breakpoint for 'small screens'
            positionMy = 'center';
            positionAt = 'center';
        }

        _self.qtip({
            content: {
                text: function () {
                    return $(this).attr('data-qtip-text');
                },
                title: function () {
                    return $(this).attr('data-qtip-title');
                }
            },
            show: {
                event: 'click'
            },
            hide: {
                event: 'click unfocus'
            },
            position: {
                my: positionMy,
                at: positionAt,
                viewport: $(window), // Ensure tooltip stays within the bounds of the viewport
                adjust: {
                    method: 'flipinvert shift', // Automatically adjust and shift the tooltip position
                    scroll: true, // Reposition on scroll
                    resize: true // Reposition on window resize
                }
            },
            style: {
                classes: 'qtip-light',
                tip: {
                    corner: true
                }
            },
            events: {
                render: function (event, api) {
                    // Adding a close button to the title bar
                    var closeButton = $('<div class="qtip-close-button">&#10005;</div>');
                    $(api.elements.titlebar).append(closeButton);

                    // Click event handler for the close button
                    closeButton.on('click', function () {
                        api.hide();
                    });
                }
            }
        });
    });
});

