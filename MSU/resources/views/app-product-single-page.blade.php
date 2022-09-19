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
                        @foreach($product as $el)
                        <a class="nav-link swiper-slide" href="/app-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="/images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">{{$el->nav_title}}</div>
                                </div>
                            </a>
                            @endforeach
                            <a class="nav-link swiper-slide" >
                                <div class="pac-nav__element">

                                </div>
                            </a>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                    </div>
                    <div class="app-product-singlepage__content">
                        <div class="single-page-pagination">
                        </div>
                        <div class="singlepage-content-title">
                            {{$soloproduct->b_single_page_title}}
                        </div>
                        <div class="single-page-content__pruduct-name">
                            {{$soloproduct->g_single_page_title}}
                        </div>
                        <div class="singlep-age-content__category-name">
                            <!-- ПРОГРАММНО-АППАРАТНЫЙ ПРОДУКТ -->
                        </div>
                        <hr>
                        <div class="single-page-content__body">
                            <div class="content-body__top">
                                <div class="body-top__text">
                                    <div class="product__subtitle">
                                        <div class="product__subtitle-wrapper">
                                            <div class="product__subtitle-text">
                                            {{$soloproduct->single_page_sudtitle}}
                                            </div>
                                            <div class="swiper swiper-single-page-mobile">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="slider-image" src="/images/product_image.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="slider-image" src="/images/product_image.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="slider-image" src="/images/product_image.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-control">
                                                    <div class="swiper-button-prev"></div>
                                                    <div class="swiper-button-next"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product__purpose">
                                        <div class="product__purpose-title">
                                            <div class="green-marc">
                                                <img src="/images/green-mark.png" alt="">
                                            </div>
                                            <div class="purpose-title">Назначение</div>
                                        </div>
                                        <div class="product__purpose-text">
                                        {{$soloproduct->single_page_purpose}}
                                        </div>

                                    </div>
                                </div>
                                <div class="body-top__slider">
                                    <div class="swiper swiper-single-page">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="/images/product_image.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="/images/product_image.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="/images/product_image.png" alt="">
                                            </div>
                                        </div>
                                            <div class="swiper-control">
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination-2"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="content-body__bottom">
                                <div class="basic-parameters-body__bg"></div>
                                <div class="body-bottom__basic-parameters">
                                    <div class="basic-parameters__title">
                                        <img src="/images/green-mark.png" alt="">
                                        <div class="basic-parameters__title-text">
                                            Основные параметры
                                        </div>
                                    </div>
                                    
                                    <div class="basic-parameters-body">
                                        <div class="basic-parameters__list">
                                            @foreach($soloparamiters as $el)
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">{{ $el->key }}</div>
                                                <div class="parameters-value"> {{ $el->val}}</div>
                                            </div>
                                            @endforeach
<!-- 
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Расчет скорости транспортных средств </div>
                                                <div class="parameters-value">от 10 до 120 км/ч</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Минимальные размеры транспортного средства</div>
                                                <div class="parameters-value">от 2м длины, от 1.3м ширины</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Количество контролируемых полос движения</div>
                                                <div class="parameters-value">от 1 до 2</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Диапазон рабочей температуры</div>
                                                <div class="parameters-value">от - 40 ° С до + 50 ° С</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Протокол взаимодействия с ИТС</div>
                                                <div class="parameters-value">opt 1.0 (открытый)</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Потребляемая мощность </div>
                                                <div class="parameters-value">220 В ± 10%</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Напряжение питания</div>
                                                <div class="parameters-value">220 В ± 10%</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Масса (без кронштейна)</div>
                                                <div class="parameters-value">не более 3 кг</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-page-content__product-documents">
                            <div class="product-documents-wrapper">
                                <div class="product-documents__title">
                                    <img src="/images/green-mark.png" alt="">
                                    <div class="product-documents__title-text">Документация</div>
                                </div>
                                <div class="product-documents__el-wrapper">
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Гарантийный талон</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по эксплуатации</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по настройке и регулировке оборудования</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Гарантийный талон</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="/images/doc_icon.png" alt="">
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
                                        <img src="/images/question.png" alt="">
                                    </div>
                                    <div class="call-to-action__text">
                                        Не нашли то, что искали? <span class="green">Напишите нам</span> , мы поможем
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-pac__nav-mobile swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                        @foreach($product as $el)
                        <a class="nav-link swiper-slide" href="/app-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="/images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            @endforeach
                            <a class="nav-link swiper-slide" >
                                <div class="pac-nav__element">

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
    </script>
    <!-- /main-content -->
@endsection