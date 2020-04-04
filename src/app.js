import './scss/style.scss';
import 'bootstrap';
import { WOW } from 'wowjs';
import { Swiper } from 'swiper/js/swiper.esm.js';

if ($.contains(document.body, document.getElementById('slider-main'))) {

    var mySwiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 5000,
        },
        loop: true
    });
}

$(document).on('submit', '#form-contact', function(event) {
    event.preventDefault();

    $('#form-contact .btn-primary').prop('disabled', true);

    $.ajax({
        cache: false,
        type: $(this).attr("method"),
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(data) {

            $('.alert').hide();
            $('#form-contact .btn-primary').prop('disabled', false);

            if (data)
            {
                $('.alert-success').fadeIn();
                $("#form-contact")[0].reset();
            }
            else
            {
                $('.alert-danger').fadeIn();
            }

            setTimeout(function() { $('.alert').hide(); }, 5000);
        }
    });
});

var wow = new WOW({
    live: false,
    scrollContainer: null
}).init();