import './bootstrap';
import '../css/app.css';
import '../css/classen.css';
import.meta.glob([
    '../img/**',
]);

/* ####################################
        Swiper (carousels, gallerys)
   #####################################  */
// core version + navigation, pagination modules:



//Livewire.start();
/* ###############################
         PhotoSwipe v5 (Lightbox)
    ##################################  */
/* https://photoswipe.com/getting-started/ */


import swiperJS from './swiperJS.js';

document.addEventListener('livewire:init', (swiperJS) => {

});
document.addEventListener('livewire:navigated', (swiperJS) => {

});
