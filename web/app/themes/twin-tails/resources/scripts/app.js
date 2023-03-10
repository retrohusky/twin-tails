import domReady from '@roots/sage/client/dom-ready';

import Swiper, {Navigation, Pagination} from "swiper";

/**
 * Application entrypoint
 */
domReady(async() => {

    const hamburger = document.querySelector('#tt-header__hamburger');

    if (hamburger) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('tt-header__hamburger--active');
            document.querySelector('.tt-menu__nav').classList.toggle('tt-menu__nav--active');
        });
    }


    const swiper = new Swiper('.tt-swiper-container', {
      modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,

      // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

      // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
