"use strict";

import Slideshow from "./components/slideshow";

export default function init(toggleNavFunction) {

    // Slideshows
    let slideshowEls = document.querySelectorAll('.slideshow');

    for (let i = 0; i < slideshowEls.length; i++) {
        let slideshow = new Slideshow(slideshowEls[i]);
    }

    // Open / close
    let openEls = document.querySelectorAll('.js-open');

    for (let i = 0; i < openEls.length; i++) {
        openEls[i].removeEventListener('click', toggleNavFunction);
        openEls[i].addEventListener('click', toggleNavFunction);
    }

    // Close nav on anchor click
    let anchorEls = document.querySelectorAll('.nav-item');

    for (let i = 0; i < anchorEls.length; i++) {
        anchorEls[i].removeEventListener('click', toggleNavFunction);
        anchorEls[i].addEventListener('click', toggleNavFunction);
    }

    // Automatically open overlay
    let overlayEls = document.querySelectorAll('.overlay');
    let toggleOverlayEls = document.body.querySelectorAll('.js-toggle-overlay');

    if (overlayEls.length) {
        setTimeout(() => document.body.classList.add('open-overlay'), 2500);
    }

    for (let i = 0; i < toggleOverlayEls.length; i++) {
        toggleOverlayEls[i].addEventListener('click', e => {
            document.body.classList.toggle('open-overlay');
        });
    }
}
