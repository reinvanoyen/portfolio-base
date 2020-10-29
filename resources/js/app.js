"use strict";

import { Transito, PreloadImagesPlugin, BodyClassesPlugin } from 'transito';
import utils from "./utils";
import init from "./init";


let toggleNav = () => document.body.classList.toggle('open');

let contentEl = document.getElementsByClassName('layout__content');

if (contentEl.length) {

    let base = document.getElementsByTagName('base');
    let hostname = base[0].getAttribute('href');

    let transitions = new Transito(hostname, '.layout__content', 'a:not([target=_blank]):not(.no-transito)', {
        minDuration: 800
    });

    // Install plugin to preload images
    transitions.installPlugin(PreloadImagesPlugin);
    transitions.installPlugin(BodyClassesPlugin);

    transitions.on('postload', e => {
        utils.scrollTop();
        init(toggleNav);
    });
}

init(toggleNav);

/*
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
*/
