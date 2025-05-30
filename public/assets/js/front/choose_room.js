// var WINDOW_HEIGHT = 0;
// var WINDOW_WIDTH = 0;

$(document).ready(function () {

    //Slider superior
    $('.slider_top').bxSlider({
        captions: false,
        auto: true,
        pager: true,
        controls: false,
        pause: 3000,
        randomStart: true,
        touchEnabled: false,
    });

    //Slider para cada habitacion
    $('.room .slider_room').bxSlider({
        captions: false,
        auto: false,
        pager: true,
        controls: true,
        pause: 3000,
        randomStart: false,
        touchEnabled: true,
    });

    lightbox.option({
        'albumLabel': "",
    })

});
