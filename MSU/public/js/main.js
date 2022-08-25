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
        425: {

        },

    }
});

let swiper_single_page__bottom = new Swiper('.swiper-single-page__bottom', {
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

let catalog_pac_nav = new Swiper('.catalog-pac__nav', {
    // Optional parameters
    slidesPerView: 4,
    spaceBetween: 20,
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
    pagination: {
        el: '.swiper-pagination',
    },
    breakpoints: {
        // when window width is >= 320px
        425: {
            slidesPerView: 2,
            spaceBetween: 10,
        },

    }
});