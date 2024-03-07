import './bootstrap';
import '../css/app.css';
import '../css/classen.css';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import '../../vendor/masmerise/livewire-toaster/resources/js';
import.meta.glob([
    '../img/**',
]);
import 'flowbite';
import { initSwiperJS } from './swiperJS.js';
import initFavoritesJS from './favorites.js'; // Replace 'require' with 'import'
import { initCustomJS } from './customJS.js';
//import './../../node_modules/qtip2/dist/jquery.qtip.js';
document.addEventListener('livewire:init', () => {
    initSwiperJS();
    initFavoritesJS.initFavorites();
    initCustomJS();
});
document.addEventListener('livewire:navigated', () => {
    initSwiperJS();
    initFavoritesJS.initFavorites();
    initCustomJS();
});

window.initFavoritesJS = initFavoritesJS;
