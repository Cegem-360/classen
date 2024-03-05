import './bootstrap';
import '../css/app.css';
import '../css/classen.css';
import.meta.glob([
    '../img/**',
]);
import 'flowbite';
import { initSwiperJS } from './swiperJS.js';
import { initFavorites } from './favorites.js';
import { initCustomJS } from './customJS.js';
import 'qtip2';
document.addEventListener('livewire:init', () => {
    initSwiperJS();
    initFavorites();
    initCustomJS();
});
document.addEventListener('livewire:navigated', () => {
    initSwiperJS();
    initFavorites();
    initCustomJS();
});
