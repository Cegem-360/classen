/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;
import $ from "jquery";
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import Swiper from 'swiper';
import { Navigation, HashNavigation, Pagination, Thumbs, Grid, EffectFade } from 'swiper/modules';
Swiper.use([Navigation, Pagination, Thumbs, EffectFade, HashNavigation, Grid]);
window.Swiper = Swiper;

import gsap from "gsap";
window.gsap = gsap;

import './../../node_modules/qtip2/dist/jquery.qtip.min.js';
window.$ = window.jquery = $;

