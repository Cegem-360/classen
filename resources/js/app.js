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
import qtip from 'qtip2';
document.addEventListener('livewire:init', () => {
    initSwiperJS();
    initFavoritesJS();
    initCustomJS();
});
document.addEventListener('livewire:navigated', () => {
    initSwiperJS();
    initFavoritesJS();
    initCustomJS();
});
