import './bootstrap';
import '../css/app.css';
import '../css/classen.css';
import.meta.glob([
    '../img/**',
]);

import { initSwiperJS } from './swiperJS.js';

document.addEventListener('livewire:init', () => {
    initSwiperJS();
});
document.addEventListener('livewire:navigated', () => {
    initSwiperJS();
});
