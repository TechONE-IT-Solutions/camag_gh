// script.js

function initializeCounterRANDOMID() {
    const options = {};

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            console.log(entry);
            VanillaCounter();
        });
    }, options);

    observer.observe(document.querySelector('.counter-RANDOMID'));
}
