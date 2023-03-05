import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async() => {

    const hamburger = document.querySelector('#hamburger');
    const mobileMenu = document.querySelector('#mobile-nav');
    const closeButton = document.querySelector('#close-mobile-nav');

    hamburger.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    closeButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
