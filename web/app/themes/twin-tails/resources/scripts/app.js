import domReady from '@roots/sage/client/dom-ready';

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

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
