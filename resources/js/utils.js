"use strict";

const utils = {
    scrollTop() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    },
    randBetween(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
};

export default utils;
