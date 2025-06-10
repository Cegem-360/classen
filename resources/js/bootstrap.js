/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from "axios";
window.axios = axios;
import $ from "jquery";
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import tippy from "tippy.js";
import "tippy.js/dist/tippy.css";
//import { Navigation, HashNavigation, Pagination, Thumbs, Grid, EffectFade } from 'swiper/modules';
import Swiper from "swiper/bundle";
window.Swiper = Swiper;
window.tippy = tippy;
import gsap from "gsap";
window.gsap = gsap;
window.$ = window.jquery = $;
