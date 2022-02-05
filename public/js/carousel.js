$(".center").slick({
    dots: false,
    infinite: true,
    centerMode: false,
    lazyLoad: 'progressive',
    slidesToShow: 6,
    slidesToScroll: 1,
    variableWidth: false,
    responsive: [{
        breakpoint: 1368,
        settings: {
            slidesToShow: 5,
        }
    }, {
        breakpoint: 1200,
        settings: {
            slidesToShow: 4,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
        }
    }, {
        breakpoint: 540,
        settings: {
            slidesToShow: 2,
        }
    }, {
        breakpoint: 360,
        settings: {
            slidesToShow: 1,
        }
    }],
    prevArrow: '<button type="button" data-role="none" class="slick-prev"><i class="fal fa-chevron-left"></i></button>',
    nextArrow: '<button type="button" data-role="none" class="slick-next"><i class="fal fa-chevron-right"></i></button>'
});

$(".stores").slick({
    dots: false,
    infinite: true,
    centerMode: false,
    lazyLoad: 'progressive',
    slidesToShow: 6,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000, //Transision speed
    cssEase: 'linear',
    responsive: [{
        breakpoint: 1368,
        settings: {
            slidesToShow: 5,
        }
    }, {
        breakpoint: 1200,
        settings: {
            slidesToShow: 4,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 3,
        }
    }, {
        breakpoint: 540,
        settings: {
            slidesToShow: 3,
        }
    }, {
        breakpoint: 360,
        settings: {
            slidesToShow: 2,
        }
    }],
    prevArrow: '',
    nextArrow: ''
});

$(".brands").slick({
    dots: false,
    infinite: true,
    centerMode: false,
    lazyLoad: 'progressive',
    fade: false,
    slidesToShow: 8,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000, //Transision speed
    cssEase: 'linear',
    responsive: [{
        breakpoint: 1368,
        settings: {
            slidesToShow: 7,
        }
    }, {
        breakpoint: 1200,
        settings: {
            slidesToShow: 5,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 4,
        }
    }, {
        breakpoint: 540,
        settings: {
            slidesToShow: 3,
        }
    }, {
        breakpoint: 360,
        settings: {
            slidesToShow: 2,
        }
    }],
    prevArrow: '',
    nextArrow: ''
});

$(".multi-grid").slick({
    dots: true,
    draggable: true,
    infinite: false,
    centerMode: false,
    lazyLoad: 'progressive',
    fade: false,
    slidesToScroll: 2,
    variableWidth: false,
    autoplay: false,
    rows: 2,
    slidesToShow: 2,
    responsive: [{
        breakpoint: 640,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
    }],
    prevArrow: '',
    nextArrow: ''
});
$(".multi-grid-big").slick({
    dots: false,
    draggable: true,
    infinite: true,
    centerMode: false,
    autoplaySpeed: 5000,
    lazyLoad: 'progressive',
    fade: false,
    slidesToScroll: 1,
    variableWidth: false,
    autoplay: true,
    rows: 1,
    slidesToShow: 1,
    prevArrow: '',
    nextArrow: ''
});