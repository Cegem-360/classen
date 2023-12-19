import './bootstrap';
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';
import '../css/app.css';
import '../css/classen.css';
import jQuery from 'jquery';
window.$ = jQuery;
import.meta.glob([
    '../img/**',
]);

Livewire.start();

// core version + navigation, pagination modules:
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
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
    modules: [Navigation, Pagination],
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 4,
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
});
