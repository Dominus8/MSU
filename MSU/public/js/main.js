let swiper = new Swiper('.main-swiper', {
    // Optional parameters
    spaceBetween: 35,
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },

    breakpoints: {
        // when window width is >= 320px
        320: {

        },

    }
});


let swiper_single_page = new Swiper('.swiper-single-page', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination-2",
        type: "fraction",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    breakpoints: {
        // when window width is >= 320px
        425: {

        },

    }
});

let swiper_single_page_mobile = new Swiper('.swiper-single-page-mobile', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination-2",
        type: "fraction",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    // scrollbar: {
    //     el: '.swiper-scrollbar',
    // },
    breakpoints: {
        // when window width is >= 320px
        425: {},
    }
});

let swiper_single_page__bottom = new Swiper('.swiper-single-page__bottom', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    pagination: {
        el: ".swiper-pagination-3",
        type: "fraction",
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    breakpoints: {
        // when window width is >= 320px
        425: {

            spaceBetween: 10,
        },

    }
});
let refiled_projects = new Swiper('.swiper-refiled-projects', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,


    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },


    breakpoints: {
        // when window width is >= 320px
        425: {

            spaceBetween: 10,
        },

    }
});


var navSlideIndex1;
// localStorage.setItem('navSlideIndex', 0);

// $(document).ready(function($) {
$('.nav-link').on("click", function(event) {
    var z = $(event.target).attr('aria-label');
    navSlideIndex = z[0] - 1;
    // alert(navSlideIndex);
    localStorage.setItem('navSlideIndex', navSlideIndex);

});

navSlideIndex1 = localStorage.getItem('navSlideIndex');
let c = $(`#nav-link-${navSlideIndex1}`).addClass('nav-link--active');


$(document).ready(function($) {
    localStorage.setItem('navSlideIndex', 0);
});

let catalog_pac_nav = new Swiper('.catalog-pac__nav', {
    // Optional parameters
    initialSlide: navSlideIndex1,
    slidesPerView: 4,
    spaceBetween: 30,
    // centeredSlides: true,
    freeMode: true,
    loop: false,
    mousewheelControl: true,
    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
    },
    breakpoints: {
        // when window width is >= 320px
        425: {

        },

    }
});



let catalog_pac_nav_mobile = new Swiper('.catalog-pac__nav-mobile', {
    // Optional parameters

    slidesPerView: 2,
    spaceBetween: 10,
    freeMode: true,
    loop: false,
    scrollbar: {
        el: '.swiper-scrollbar-mobile',
    },

    breakpoints: {
        // when window width is >= 320px
        425: {
            slidesPerView: 2,
            spaceBetween: 10,
        },

    }
});

// активный стить на пункты главного меню при нажатии



$('.nav-item-link').on("click", function(event) {
    var y = $(event.target).attr('class');
    var navElId;
    if (y = 'nav-item-link') {
        console.log('fuzz');
        navElId = event.target.id;
        localStorage.setItem('navId', navElId);
    }
});

$(document).ready(function($) {
    var navId = localStorage.getItem('navId');
    var x = $('#' + navId).addClass("nav-item-link--active");
});

$('.header_logo').on("click", function(event) {
    localStorage.clear();

});

//----------------------- Админка добавление продукта --------------------

$('#in-mine-slider').change(function() {
    if (this.checked) {
        $("#in-mine-slider-approved").attr("class", "in-mine-slider-property");
    } else {
        $("#in-mine-slider-approved").attr("class", "in-mine-slider-property--hidden");
    }
});
$(document).ready(function() {});