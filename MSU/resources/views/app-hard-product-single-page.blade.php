@extends('base')

@section('content')
 <!-- main-content -->
 <section class="section-outer section-catalog-pac">
        <section class="section-inner">
            <section class="mine-content catalog-pac">
                <div class="catalog-pac-wrapper">
                    <div class="catalog-pac__nav--bg">
                    <div class="catalog-pac__nav swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element ">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Координированное управление транспортными потоками</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/config_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Конфигурация сценарных планов управления движением</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Выдача транспортных разрешений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/admin_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                    </div>
                    <div class="app-product-singlepage__content">
                        <div class="single-page-pagination">
                            <!-- <a href="{{route('index')}}">Главная</a><a href="{{route('app-hard-product')}}">— Программные продукты</a><a href="{{route('app-hard-product-single-page')}}">— Единая платформа управления</a> -->
                        </div>
                        <div class="singlepage-content-title">
                            Единая платформа управления
                        </div>
                        <div class="single-page-content__pruduct-name">
                            Транспортной системой
                        </div>
                        <div class="singlep-age-content__category-name">
                            <!-- ПРОГРАММНО-АППАРАТНЫЙ ПРОДУКТ -->
                        </div>
                        <hr>
                        <div class="single-page-content__body">
                            <div class="content-body__top">
                                <div class="body-top__text">
                                    <div class="product__subtitle">Единая платформа управления транспортной системой — программа, предназначенная для обнаружения транспортных средств, регистрации прохождения количества транспортных средств через зону детекции и определения параметров.
                                        <br>
                                        <br>Изготавливается в соответствии с требованиями <span class="green">ГОСТ 34.401-90</span> «Информационная технология (ИТ). Комплекс стандартов на автоматизированные системы. Средства технические периферийные автоматизированных
                                        систем дорожного движения. Типы и технические требования». <span class="green">ГОСТ 32965-2014</span> (прил. Б) «Дороги автомобильные общего пользования. Методы учёта интенсивности движения транспортного потока».
                                    </div>
                                    <div class="product__purpose">
                                        <div class="product__purpose-title">
                                            <div class="green-marc">
                                                <img src="./images/green-mark.png" alt="">
                                            </div>
                                            <div class="purpose-title">Назначение</div>
                                        </div>
                                        <div class="product__purpose-text">
                                            Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени; получение в реальном времени параметров наличия транспортных средств и скорости каждой единицы транспорта. Погрешность не более 10% при благоприятных* погодных условиях.
                                            <br><br> Благоприятные погодные условия — состояние погоды, при котором метеорологические факторы не оказывают отрицательного влияния на состояние поверхности дороги, скорость и безопасность движения автомобилей
                                            (сухо, ясно, отсутствие ветра или ветер со скоростью до 10 м/с, отсутствие тумана, относительная влажность воздуха до 90 %, температура воздуха в пределах от -40 °С до +40 °С в тени).
                                        </div>
                                    </div>
                                </div>
                                <div class="body-top__slider">
                                </div>
                            </div>


                            <div class="content-body__bottom">
                            <div class="basic-parameters-body__bg-slider"></div>
                                <div class="body-bottom__slider">
                                    <div class="swiper swiper-single-page__bottom">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="./images/sp-slide.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="./images/sp-slide.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="./images/sp-slide.png" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-control">
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination-3"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="single-page-content__product-documents">
                            <div class="product-documents-wrapper">
                                <div class="product-documents__title">
                                    <img src="./images/green-mark.png" alt="">
                                    <div class="product-documents__title-text">Документация</div>
                                </div>
                                <div class="product-documents__el-wrapper">
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Гарантийный талон</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по эксплуатации</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по настройке и регулировке оборудования</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Гарантийный талон</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-call-to-action">
                                <a href="#" class="call-to-action-wrapper">
                                    <div class="call-to-action__image">
                                        <img src="./images/question.png" alt="">
                                    </div>
                                    <div class="call-to-action__text">
                                        Не нашли то, что искали? <span class="green">Напишите нам</span> , мы поможем
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-pac__nav--bg-mobile"></div>
                    <div class="catalog-pac__nav-mobile swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element ">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Координированное управление транспортными потоками</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/config_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Конфигурация сценарных планов управления движением</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Выдача транспортных разрешений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/admin_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-scrollbar swiper-scrollbar-mobile"></div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script>
        let x = $('.content-body__bottom').height();
        let y = $('.basic-parameters-body__bg').height(x+128);
        // let z = $('.basic-parameters-body__bg-slider').height(x+128);
        console.log(x);
    </script>
    <!-- /main-content -->
@endsection