import domReady from '@roots/sage/client/dom-ready';
import Masonry from 'masonry-layout';

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

  // Darkmode

    const toggleDarkModeButton = document.getElementById("tt-darkmode-toggle");
    const body = document.body;

  // Apply the user's preference from localStorage
    const storedTheme = localStorage.getItem("dark-mode");
    if (storedTheme === "true") {
        body.classList.add("dark-theme");
    } else {
        body.classList.remove("dark-theme");
    }

  // Toggle the theme

    toggleDarkModeButton.addEventListener("click", () => {
        body.classList.toggle("dark-theme");
        localStorage.setItem("dark-mode", body.classList.contains("dark-theme"));
    });

    // Masonry

  const grid = document.querySelector('.tt-grid');

  const masonry = new Masonry(grid, {
    itemSelector: '.tt-grid-item',
  });

});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
