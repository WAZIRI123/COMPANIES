require('./bootstrap');
const Turbolinks = require("turbolinks");
Turbolinks.start();
let nav = document.querySelector("#nav");
let options = {

}


let observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach((entry) => {
            if (entry.intersectionRatio < 0.2) {
                //  block of code to be executed if condition1 is true
                entry.target.style.display = 'none'
            }
            observer.unobserve(entry.target);
        });
    },
    options)
observer.observe(nav);