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
    // pagination: {
    //     el: ".swiper-pagination-2",
    //     type: "fraction",
    // },

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

//----- Переключение стилей активной ссылки на слайдере каталога продуктов ------

var navSlideIndex1;

$('.nav-link').on("click", function(event) {
    var z = $(event.target).attr('aria-label');
    navSlideIndex = z.split('/')[0] - 1;
    console.log();
    localStorage.setItem('navSlideIndex', navSlideIndex);
});

navSlideIndex1 = localStorage.getItem('navSlideIndex');
// $(`#nav-link-${navSlideIndex1}`).addClass('nav-link--active');

let gIco = $(`#nav-link-${navSlideIndex1}`).find('.nav-element__ico--green').attr('src');

$(`#nav-link-${navSlideIndex1}`).find('.nav-element__ico--black').attr('src', `${gIco}`);
console.log();

$(`#nav-link-mobile-${navSlideIndex1}`).addClass('nav-link--active');

$(document).ready(function($) {
    // localStorage.setItem('navSlideIndex', 0);
});

let primarySlide;

if (navSlideIndex1) {
    primarySlide = navSlideIndex1;
} else {
    primarySlide = 0;
}

let catalog_pac_nav = new Swiper('.catalog-pac__nav', {
    // Optional parameters
    initialSlide: primarySlide,
    // allowTouchMove: false,
    slidesPerView: 4,
    spaceBetween: 30,
    // centeredSlides: true,
    cssMode: false,
    freeMode: true,
    loop: false,
    mousewheel: {
        forceToAxis: true,
    },
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
    initialSlide: primarySlide,
    watchSlidesProgress: true,
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

// $('#in-mine-slider').change(function() {
//     if (this.checked) {
//         $("#in-mine-slider-approved").attr("class", "in-mine-slider-property");
//     } else {
//         $("#in-mine-slider-approved").attr("class", "in-mine-slider-property--hidden");
//     }
// });
// $(document).ready(function() {});

//----------------------- Админка добавление параметра продукта --------------------

$(document).ready(function() {
    let paramiters_str = $(".single-page-parameters-item-wrapper").html();

    function plusParameter() {
        $("#parameters-wrapper").append(paramiters_str);
        $('.single-page-parameters-item:last').find('input:first').val('');
        $('.single-page-parameters-item:last').find('input:last').val('');

    }

    function minusParameter() {
        $(".single-page-parameters-item:last").remove();
    }
    $("#plus-parameter").on("click", plusParameter);
    $("#minus-parameter").on("click", minusParameter);

    $(".add-paramiter").on("click", function() {
        let parametersArr = [];
        $('.single-page-parameters-item').each(function() {
            $(this).each(function() {
                let x = $(this).find('input:first').val();
                let y = $(this).find('input:last').val();
                parametersArr.push(`{"key":"${x}","val":"${y}"}`);
            })
        });
        let paarm = parametersArr;
        $("#parameters-to-send").val(paarm);
    });
});

//====================== Добавление ссылки проектов ================================
$(document).ready(function() {
    let link_str = $(".link-item-wrapper").html();

    function plusLink() {
        $(".link-item-wrapper").append(link_str);
        $('.elink-item:last').find('input:first').val('');
        $('.elink-item:last').find('input:last').val('');

    }

    function minusLink() {
        $(".link-item:last").remove();
    }
    $("#projectLinc-plus").on("click", plusLink);
    $("#projectLinc-minus").on("click", minusLink);

    $("#projectLinc-write").on("click", function() {
        let linksArr = {};
        $('.link-item').each(function() {
            $(this).each(function() {
                let x = $(this).find('input:first').val();
                let y = $(this).find('input:last').val();
                linksArr[x] = y;
            })
        });
        let links = JSON.stringify(linksArr);
        $("#links-to-send").val(links);
    });
});

$('input[name="product_type"]').click(function() {
    if ($('#product-type1').is(':checked')) {
        $('#parameters-description').attr("style", "display:block");
        // $('#single-page-purpose-lable').attr("style", "display:block");
        $('#parameters-wrapper_lable').attr("style", "display:block");
        $('#parameters-wrapper').attr("style", "display:block");
        $('#minus-parameter').attr("style", "display:block");
        $('#plus-parameter').attr("style", "display:block");
        $('.add-paramiter').attr("style", "display:block");
    } else {
        $('#parameters-description').attr("style", "display:none");
        // $('#single-page-purpose-lable').attr("style", "display:none");
        $('#parameters-wrapper_lable').attr("style", "display:none");
        $('#parameters-wrapper').attr("style", "display:none");
        $('#minus-parameter').attr("style", "display:none");
        $('#plus-parameter').attr("style", "display:none");
        $('.add-paramiter').attr("style", "display:none");

    }
});

// отображение блока ввода ссылок в адвинке на добавлении/обновлении проекта

$(document).ready(function() {
    $('#external-link-visable').click(function() {
        let divAttr = $('.external-link').attr("style");
        if (divAttr == 'display:none;') {
            $('.external-link').attr("style", "display:block;");
        }
        if (divAttr == 'display:block;') {
            $('.external-link').attr("style", "display:none;");
        }
    });
});