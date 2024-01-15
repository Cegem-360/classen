import './bootstrap';
import '../css/app.css';
import '../css/classen.css';
import.meta.glob([
    '../img/**',
]);

import swiperJS from './swiperJS.js';

document.addEventListener('livewire:init', (swiperJS) => {
    swiperJS
});
document.addEventListener('livewire:navigated', (swiperJS) => {
    swiperJS
});
