
import { ScrollTrigger } from "gsap/ScrollTrigger";

import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe-lightbox.esm.js';
import PhotoSwipe from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.esm.js';

gsap.registerPlugin(ScrollTrigger);

// import Swiper and modules styles


export function initSwiperJS() {
    /**
     * Swiper (carousels, gallerys)
     *
     *
     *
    */
    const swiper = new Swiper('.hero-swiper', {
        // configure Swiper to use modules
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
        on: {
            slideNextTransitionStart(swiper) {
                let index_currentSlide = swiper.realIndex,
                    currentSlide = swiper.slides[index_currentSlide];

                animationSlide(currentSlide);
            },
            slidePrevTransitionStart(swiper) {
                let index_currentSlide = swiper.realIndex,
                    currentSlide = swiper.slides[index_currentSlide];

                animationSlide(currentSlide);
            },
            afterInit(swiper) {
                let index_currentSlide = swiper.realIndex,
                    currentSlide = swiper.slides[index_currentSlide];

                animationSlide(currentSlide);
            }
        }
    });

    // fooldal carousel
    const prdSwiper = new Swiper('.prd-swiper', {
        // configure Swiper to use modules
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

        slidesPerView: 1,
        grid: {
            fill: 'row',
            rows: 8,
        },
        spaceBetween: 10,
        //direction: 'vertical'
        //freeMode: true,
        //watchSlidesProgress: true,
    });

    const detailPageSwiper = new Swiper('.detail-page-swiper', {

        direction: 'horizontal',
        loop: true,
        thumbs: {
            swiper: detailPageSwiperThumbs,
        },
    });

    //     const doorModelSwiperThumbs = new Swiper(".door-model-swiper-thumbs", {
    //
    //         slidesPerView: 4,
    //         grid: {
    //             fill: 'row',
    //             rows: 8,
    //         },
    //         spaceBetween: 10,
    //         loop: false,
    //     });
    //
    //     const doorModelSwiper = new Swiper('.door-model-swiper', {
    //
    //         effect: 'fade',
    //         fadeEffect: {
    //             crossFade: true,
    //         },
    //         loop: false,
    //         thumbs: {
    //             swiper: doorModelSwiperThumbs,
    //         },
    //     });

    const doorColorVariantSwiper = new Swiper('.door-color-variant-swiper', {

        // effect: 'fade',
        // fadeEffect: {
        //     crossFade: true,
        // },
        hashNavigation: {
            watchState: true,
        },
        loop: false,
    });

    const doorFrontsSwiperThumbs = new Swiper(".door-fronts-swiper-thumbs", {
        slidesPerView: 4,
        grid: {
            fill: 'row',
            rows: 8,
        },
    });

    const doorFrontsSwiper = new Swiper('.door-fronts-swiper', {
        direction: 'horizontal',
        effect: 'slide',
        fadeEffect: {
            crossFade: false,
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
    const photo_swipe_options = {
        gallery: '.lightbox',
        pswpModule: PhotoSwipe,
        // set background opacity
        bgOpacity: 1,
        showHideOpacity: true,
        children: 'a',
        loop: true,
        showHideAnimationType: 'none', /* options: fade, zoom, none */

        /* Click on image moves to the next slide */
        imageClickAction: 'close',
        tapAction: 'close',

        /* ## Hiding a specific UI element ## */
        initialZoomLevel: 0.5,
        zoom: false,
        close: true,
        counter: true,
        arrowKeys: true,
        /* ## Options ## */
        bgOpacity: "1",/* deafult: 0.8 */
        wheelToZoom: false, /* deafult: undefined */
    };

    // *** detailPageSwiper ***
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

    // *** doorModelSwiper ***
    const photo_swipe_options2 = {
        gallery: '.lightbox2',
        pswpModule: PhotoSwipe,
        // set background opacity
        bgOpacity: 1,
        showHideOpacity: true,
        children: 'a',
        loop: true,
        showHideAnimationType: 'none', /* options: fade, zoom, none */

        /* Click on image moves to the next slide */
        imageClickAction: 'close',
        tapAction: 'close',

        /* ## Hiding a specific UI element ## */
        initialZoomLevel: 0.5,
        zoom: false,
        close: true,
        counter: true,
        arrowKeys: true,
        /* ## Options ## */
        bgOpacity: "1",/* deafult: 0.8 */
        wheelToZoom: false, /* deafult: undefined */
    };
    const lightbox2 = new PhotoSwipeLightbox(photo_swipe_options2);
    lightbox2.init();
    lightbox2.on('change', () => {
        const { pswp } = lightbox2;
        doorModelSwiper.slideTo(pswp.currIndex, 0, false);
        console.log('Slide index', pswp.currIndex);
        //console.log('Slide object', pswp.currSlide);
        //console.log('Slide object data', pswp.currSlide.data);
    });

    // *** doorColorVariantSwiper ***
    const photo_swipe_options3 = {
        gallery: '.lightbox3',
        pswpModule: PhotoSwipe,
        // set background opacity
        bgOpacity: 1,
        showHideOpacity: true,
        children: 'a',
        loop: true,
        showHideAnimationType: 'none', /* options: fade, zoom, none */

        /* Click on image moves to the next slide */
        imageClickAction: 'close',
        tapAction: 'close',

        /* ## Hiding a specific UI element ## */
        initialZoomLevel: 0.5,
        zoom: false,
        close: true,
        counter: true,
        arrowKeys: true,
        /* ## Options ## */
        bgOpacity: "1",/* deafult: 0.8 */
        wheelToZoom: false, /* deafult: undefined */
    };
    const lightbox3 = new PhotoSwipeLightbox(photo_swipe_options3);
    lightbox3.init();
    lightbox3.on('change', () => {
        const { pswp } = lightbox3;
        doorColorVariantSwiper.slideTo(pswp.currIndex, 0, false);
        console.log('Slide index', pswp.currIndex);
        //console.log('Slide object', pswp.currSlide);
        //console.log('Slide object data', pswp.currSlide.data);
    });

    // *** Door Frames Lightbox ***
    const photo_swipe_options_doorframes = {
        gallery: '.lightbox-doorframes',
        pswpModule: PhotoSwipe,
        // set background opacity
        bgOpacity: 0.5,
        mainClass: 'pswp--custom-bg',
        showHideOpacity: true,
        children: 'a',
        loop: true,
        showHideAnimationType: 'none', /* options: fade, zoom, none */

        /* Click on image moves to the next slide */
        imageClickAction: 'close',
        tapAction: 'close',

        /* ## Hiding a specific UI element ## */
        initialZoomLevel: 0.5,
        zoom: false,
        close: true,
        counter: true,
        arrowKeys: true,
        /* ## Options ## */
        bgOpacity: "1",/* deafult: 0.8 */
        wheelToZoom: false, /* deafult: undefined */
    };
    const lightboxDoorFrames = new PhotoSwipeLightbox(photo_swipe_options_doorframes);
    lightboxDoorFrames.init();

    /* ###############################
            tippy.js
       ##################################  */
    tippy('.jsTooltipBig', {
        trigger: 'click',
        hideOnClick: true,
        allowHTML: true,
        theme: 'arcadia',
    });



    function animationSlide(slideItem) {
        //if (!slideItem.classList.contains("-runned")) {
        const tl = gsap.timeline({
            id: "time",
            // delay: .6,
            onStart: function () {
                //slideItem.classList.add("-runned");
            }
        });

        //const image = slideItem.querySelector(".image");
        //const bg = slideItem.querySelector(".image .bg");
        //const overlay = slideItem.querySelector(".image .overlay");
        const contentWrapper = document.querySelector(".hero-content");
        const heroLine = document.querySelector(".hero-line");
        const heroTitle = document.querySelector(".hero-content .hero-title");
        const heroContent = document.querySelector(".hero-content .hero-text");
        const heroCTA = document.querySelector(".hero-content .hero-cta");

        tl.set([heroTitle, heroContent, heroCTA], {
            autoAlpha: 0,
            //y: 0
        })
            .fromTo(contentWrapper, {
                x: 10,
                autoAlpha: 0
                //xPercent: "-=20"
            },
                {
                    x: 0,
                    autoAlpha: 1,
                    duration: 2,
                    ease: "power2.inOut"
                })
            /* .fromTo(
                    bg,
                    {
                            xPercent: -20,
                            scale: 1.4
                    },
                    {
                            xPercent: 0,
                            scale: 1,
                            duration: 1.5,
                            ease: "power2.out"
                    },
                    "start-=1"
            )
            .set(
                    bg,
                    {
                            autoAlpha: 1
                    },
                    "-=1.5"
            )
            .set(overlay, {
                    autoAlpha: 0
            }) */
            .fromTo(
                [heroTitle, heroContent, heroCTA],
                {
                    autoAlpha: 0,
                    y: 100
                    //y: "+=10"
                },
                {
                    autoAlpha: 1,
                    y: 0,
                    //y: "-=40",
                    duration: 1.2,
                    ease: "power1.out",
                    stagger: 0.25
                },
                "-=1.2"
            )
            .fromTo(heroLine, { scaleX: 0 }, { scaleX: "100%", duration: 1.5, ease: "power1.inOut", transformOrigin: "right" }, "-=1.2")

        return tl;
        //}
    }

    //animationSlide();

    gsap.fromTo(".banner-container", {
        y: 100,
        autoAlpha: 0
    },
        {
            y: 0,
            autoAlpha: 1,
            duration: 1.5,
            ease: "power3.inOut",
            scrollTrigger: { trigger: ".ad-banner", start: "top 70%", end: "bottom top", markers: false }
        });

    gsap.fromTo(".banner-container2", {
        y: 100,
        autoAlpha: 0
    },
        {
            y: 0,
            autoAlpha: 1,
            duration: 1.5,
            ease: "power3.inOut",
            scrollTrigger: { trigger: ".ad-banner2", start: "top 70%", end: "bottom top", markers: false }
        });

    gsap.fromTo(["#img1", "#img2", "#img3"], {
        y: 100,
        autoAlpha: 0
    },
        {
            y: 0,
            autoAlpha: 1,
            duration: 1.5,
            ease: "power3.inOut",
            stagger: 0.25,
            scrollTrigger: { trigger: ".kollekcio-grid", start: "top 70%", end: "bottom top", markers: false }
        });



    /* ###############################
           MOBILE NAV
      ##################################

    document.getElementById('hamburger-btn').addEventListener('click', function() {
        document.getElementById('mobile-nav').classList.toggle('active');
        console.log('***HAMBURGER-CLICKED');
    });

    const menuBtn = document.getElementById('hamburger-btn');
    const menu = document.getElementById('mobile-nav');

    // Function to toggle menu
    function toggleMenu() {
        console.log('clicked');
        menu.classList.toggle('active');
    }

    // Ensuring that the event listener is not added more than once
    if (menuBtn) {
        // Remove existing event listeners to avoid duplicates
        menuBtn.removeEventListener('click', toggleMenu);

        // Add the event listener
        menuBtn.addEventListener('click', toggleMenu);
    }
    */
}
