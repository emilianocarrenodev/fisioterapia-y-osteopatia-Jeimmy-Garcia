import './scss/style.scss';
import 'bootstrap';
import { WOW } from 'wowjs';
import { Swiper } from 'swiper/js/swiper.esm.js';

var wow = new WOW({
    live: false,
    scrollContainer: null
});

$('header').load("header.html");

$('footer').load("footer.html");

if ($.contains(document.body, document.getElementById('slider-main'))) {

    var mySwiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 5000,
        },
        loop: true
    });
}

wow.init();