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
}
