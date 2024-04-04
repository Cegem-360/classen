
import { ScrollTrigger } from "gsap/ScrollTrigger";

import PhotoSwipeLightbox from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe-lightbox.esm.js';
import PhotoSwipe from 'https://unpkg.com/photoswipe@5.4.2/dist/photoswipe.esm.js';

gsap.registerPlugin(ScrollTrigger);

// import Swiper and modules styles


export function initSwiperJS() {

    const detailPageSwiperThumbs = new Swiper(".detail-page-swiper-thumbs", {

        slidesPerView: 1,
        grid: {
            fill: 'row',
            rows: 8,
        },
        spaceBetween: 10,
    });

    const detailPageSwiper = new Swiper('.detail-page-swiper', {

        direction: 'horizontal',
        loop: true,
        thumbs: {
            swiper: detailPageSwiperThumbs,
        },
    });

    const doorColorVariantSwiper = new Swiper('.door-color-variant-swiper', {
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
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });

    const doorFrontsSwiper = new Swiper('.door-fronts-swiper', {
        direction: 'horizontal',
        effect: 'slide',
        loop: true,
        thumbs: {
            swiper: doorFrontsSwiperThumbs,
        },
    });

    doorFrontsSwiperThumbs.on('click', function () {
        let targetIndex = this.clickedIndex;
        doorFrontsSwiper.params.speed = 0; // disable transition
        doorFrontsSwiper.slideTo(targetIndex); // move to target slide
        setTimeout(() => {
            doorFrontsSwiper.params.speed = 300; // re-enable transition
        }, 0);
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




    const tl = gsap.timeline({
        id: "time",
    });

    const swiper = new Swiper('.hero-swiper', {
        // configure Swiper to use modules
        // Optional parameters
        allowTouchMove: false,
        touchStartPreventDefault: false,
        direction: 'horizontal',
        loop: true,
        //slidesPerView: 3,
        //spaceBetween: 30,
        autoplay: {
            delay: 4000,
        },
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
                console.log("slideNextTransitionStart");
                //tl.clear();
                //tl.restart();
                animationSlide(swiper);
            },
            slidePrevTransitionStart(swiper) {
                console.log("slidePrevTransitionStart");
                //tl.clear();
                //tl.restart();
                animationSlide(swiper);
            },
            afterInit(swiper) {
                console.log("afterInit");
                animationSlide(swiper);
            }
        }

    });

    swiper.on('slideChange', function () {
        //console.log("slideChange");
        //animationSlide(swiper);
    });

    function animationSlide(swiper) {
        let current_index = swiper.realIndex;
        const contentWrapper = document.querySelector(`#slide-${current_index} .hero-content`);
        const heroLine = document.querySelector(`#slide-${current_index} .hero-line`);
        const heroTitle = document.querySelector(`#slide-${current_index} .hero-content .hero-title`);
        const heroContent = document.querySelector(`#slide-${current_index} .hero-content .hero-text`);
        const heroCTA = document.querySelector(`#slide-${current_index} .hero-content .hero-cta`);

        // Clear the timeline before starting a new animation
        tl.clear();
        tl.timeScale(1.75);
        tl.set([heroTitle, heroContent, heroCTA], {
            autoAlpha: 0,
        })
            .fromTo(contentWrapper, {
                x: 10,
                autoAlpha: 0
            },
                {
                    x: 0,
                    autoAlpha: 1,
                    duration: 2,
                    ease: "power2.inOut"
                })
            .fromTo(
                [heroTitle, heroContent, heroCTA],
                {
                    autoAlpha: 0,
                    y: 100
                },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 1.2,
                    ease: "power1.out",
                    stagger: 0.25
                },
                "-=1.2"
            )
            .fromTo(heroLine, { scaleX: 0 }, { scaleX: "100%", duration: 1.5, ease: "power1.inOut", transformOrigin: "right" }, "-=1.2")

        //console.log("current_index", current_index);
        //console.log(tl);
        return tl;
    }

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
}

