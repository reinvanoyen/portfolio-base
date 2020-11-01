"use strict";

export default function init(toggleNavFunction) {

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
    let closeOverlayEls = document.body.querySelectorAll('.modal__close-button');

    if (overlayEls.length) {
        setTimeout(() => {
            document.body.classList.add('open-overlay');
        }, 5000);
    }

    for (let i = 0; i < closeOverlayEls.length; i++) {
        closeOverlayEls[i].addEventListener('click', e => document.body.classList.remove('open-overlay'));
    }
}
