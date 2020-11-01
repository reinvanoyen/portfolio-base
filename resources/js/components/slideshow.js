"use strict";

import utils from "../utils";

export default class Slideshow {
    constructor(el) {
        this.el = el;
        this.slides = this.el.querySelectorAll('.slideshow__item');
        this.activeSlideIndex = 0;
        this.playTimeout = null;
        this.build();
    }

    build() {
        if (this.slides.length) {
            setTimeout(() => {
                this.play();
            }, utils.randBetween(0, 5000));
        }
    }

    play() {
        this.playTimeout = setTimeout(() => {
            if (document.body.contains(this.el)) {
                this.showNext();
                this.play();
            } else {
                this.pause();
            }
        }, utils.randBetween(1500, 5000));
    }

    pause() {
        clearTimeout(this.playTimeout);
    }

    showNext() {

        this.slides[this.activeSlideIndex].classList.remove('slideshow__item--active');

        if (this.activeSlideIndex + 1 < this.slides.length) {
            this.activeSlideIndex = this.activeSlideIndex + 1;
        } else {
            this.activeSlideIndex = 0;
        }

        this.slides[this.activeSlideIndex].classList.add('slideshow__item--active');
    }
}
