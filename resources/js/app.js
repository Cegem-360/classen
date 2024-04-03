import './bootstrap';
import '../css/app.css';
import '../css/classen.css';;
import 'swiper/css/bundle';

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
    initCustomJS();
    function setRedNavigation() {
        $('#quotation').addClass('font-bold text-orange-600');
    }
});
document.addEventListener('livewire:navigated', () => {
    initSwiperJS();
    function setRedNavigation() {
        $('#quotation').addClass('font-bold text-orange-600');
    }
    initFavoritesJS.initFavorites();
    initCustomJS();
});

window.initFavoritesJS = initFavoritesJS;

/* document.getElementById('szolg-1').addEventListener('click', function() {
    window.location.href = '/szolgaltatasaink/#szaktanacsadas';
});
document.getElementById('szolg-2').addEventListener('click', function() {
    window.location.href = '/szolgaltatasaink/#helyszini-felmeres';
});
document.getElementById('szolg-3').addEventListener('click', function() {
    window.location.href = '/szolgaltatasaink/#szakszeru-beepites';
}); */

