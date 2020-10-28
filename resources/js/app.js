"use strict";

import Slider from './components/slider';

let logoSliderEls = document.querySelectorAll('.logo-slider');

for (let i = 0; i < logoSliderEls.length; i++) {

    let sliderEl = logoSliderEls[i].querySelector('.logo-slider__slider .slider');

    let slider = new Slider(sliderEl);

    let logoEl = logoSliderEls[i].querySelector('.logo-slider__logo .logo');
    let logoPathEls = logoSliderEls[i].querySelectorAll('.logo-slider__logo .logo path');

    slider.on('change', e => {

        let factor = (e-50)/2.5;
        for (let j = 0; j < logoPathEls.length; j++) {
            logoPathEls[j].style.transform = `translateX(${factor*j}%)`;
        }
    });

    slider.build();
}

// Open / close
let openEls = document.querySelectorAll('.js-open');

for (let i = 0; i < openEls.length; i++) {
    openEls[i].addEventListener('click', e => document.body.classList.toggle('open'));
}
