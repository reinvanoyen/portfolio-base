"use strict";

export default class Slider {

    constructor(el) {

        this.el = el;
        this.knobEl = this.el.firstElementChild;

        this.eventListeners = {};

        this.isDragging = false;

        this.maxDrag = {x: 0, y: 0};
        this.startPos = {x: 0, y: 0};
        this.currPos = {x: 0, y: 0};
        this.defaultPos = {x: 0, y: 0};
        this.knobPos = {x: 0, y: 0};
        this.offset = {x: 0, y: 0};
    }

    build() {

        document.addEventListener('mousemove', this.handleMouseMove.bind(this));
        document.removeEventListener('touchmove', this.handleMouseMove.bind(this));

        document.addEventListener('mouseup', this.handleMouseUp.bind(this));
        document.addEventListener('resize', this.calc.bind(this));

        this.knobEl.addEventListener('mousedown', this.handleMouseDown.bind(this));

        this.calc();
        this.update();
    }

    calc() {
        this.maxDrag = {
            x: this.el.offsetWidth - (this.knobEl.offsetWidth / 2),
            y: this.el.offsetHeight - (this.knobEl.offsetHeight / 2)
        };

        this.defaultPos = {
            x: (this.maxDrag.x * parseInt(this.el.getAttribute('data-default-x')) / 100),
            y: (this.maxDrag.y * parseInt(this.el.getAttribute('data-default-y')) / 100)
        };

        this.knobPos = {
            x: this.defaultPos.x,
            y: this.defaultPos.y
        };

        this.offset = {
            x: this.knobPos.x,
            y: this.knobPos.y
        };
    }

    update() {
        this.knobEl.style.transform = `translateX(${this.knobPos.x}px)`;
        this.trigger('change',(this.knobPos.x / this.maxDrag.x)*100);
    }

    change() {
        this.update();
    }

    handleMouseDown(e) {

        this.isDragging = true;
        this.startPos.x = e.pageX || e.touches[0].clientX;
        this.startPos.y = e.pageY || e.touches[0].clientY;
    }

    handleMouseUp(e) {
        if (this.isDragging) {
            this.isDragging = false;

            this.offset = {
                x: this.knobPos.x,
                y: this.knobPos.y
            };
        }
    }

    handleMouseMove(e) {

        if (this.isDragging) {

            this.currPos.x = e.pageX - this.startPos.x;
            this.currPos.y = e.pageY - this.startPos.y;

            this.knobPos = {
                x: Math.max(0, Math.min(this.maxDrag.x, this.offset.x + this.currPos.x)),
                y: Math.max(0, Math.min(this.maxDrag.y, this.offset.y + this.currPos.y))
            };

            this.change();
        }
    }

    /**
     * Trigger an internal event by name.
     * @param  {String} eventName - The name of the event to trigger
     * @param  {Object} event - The event (which can contain any data you want)
     * @return {void}
     */
    trigger(eventName, event = {}) {
        if (this.eventListeners[eventName]) {
            this.eventListeners[eventName].forEach( cb => {
                cb(event);
            });
        }
    }

    /**
     * Register an event listener.
     * @param  {String} eventName - The name of the event you wish to listen to
     * @param {Function} cb - The callback function
     * @return {void}
     */
    on(eventName, cb) {
        if (!this.eventListeners[eventName]) {
            this.eventListeners[eventName] = [];
        }
        this.eventListeners[eventName].push(cb);
    }
}
