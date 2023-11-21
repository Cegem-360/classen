import './bootstrap';
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';
import '../css/app.css';
//import '../css/classen.css';
import jQuery from 'jquery';
window.$ = jQuery;
import.meta.glob([
    '../img/**',
]);

Livewire.start();


