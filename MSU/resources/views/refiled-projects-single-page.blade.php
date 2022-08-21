@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-refiled-projects-sigle-page">
        <section class="section-inner">
            <section class="mine-content refiled-projects-sigle-page">
                <div class="refiled-projects-sigle-page-wrapper">
                    <div class="refiled-projects-sigle-page-title">
                        <div class="refiled-projects-sigle-page-title--black">Проектирование</div>
                        <div class="refiled-projects-sigle-page-title--green">Дорожной разметки</div>
                    </div>    
                    <hr>
                    <div class="refiled-projects-sigle-page__content">
                        <div class="refiled-projects-sigle-page__content-text">
                            Единая платформа управления транспортной системой — программа, предназначенная для обнаружения транспортных средств, регистрации прохождения количества транспортных средств через зону детекции и определения параметров.
                            <br>
                            <br>
                            Изготавливается в соответствии с требованиями <span class="green">ГОСТ 34.401-90</span>  «Информационная технология (ИТ). Комплекс стандартов на автоматизированные системы. Средства технические периферийные автоматизированных систем дорожного движения. Типы и технические требования». <span class="green">ГОСТ 32965-2014</span> (прил. Б) «Дороги автомобильные общего пользования. Методы учёта интенсивности движения транспортного потока».
                        </div>
                        <div class="refiled-projects-sigle-page__content-links">
                            <a href="#" class="refiled-projects-sigle-page__link-el">
                                <div class="link__text">Промо-сайт проекта</div>
                                <div class="link__ico"><img src="./images/single-news-ico.png" alt="ico"></div>
                            </a>
                            <a href="#" class="refiled-projects-sigle-page__link-el">
                                <div class="link__text">Официальный сайт заказчика</div>
                                <div class="link__ico"><img src="./images/single-news-ico.png" alt="ico"></div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="refiled-projects__slider">
                        <div class="swiper swiper-refiled-projects">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="slider-image" src="./images/refiled-projects.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="slider-image" src="./images/refiled-projects.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="slider-image" src="./images/refiled-projects.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    
                    <div class="refiled-projects__product-documents">
                        <div class="refiled-projects-documents-wrapper">
                            <div class="refiled-projects-documents__title">
                                <img src="./images/green-mark.png" alt="">
                                <div class="refiled-projects-documents__title-text">Документация</div>
                            </div>
                            <div class="refiled-projects-documents__el-wrapper">
                                <a href="#" class="refiled-projects-documents__el">
                                    <img src="./images/doc_icon.png" alt="">
                                    <div class="refiled-projects-documents__el-title">Презентация проекта</div>
                                    <div class="refiled-projects-documents__el-format">
                                        [pdf]
                                    </div>
                                </a>
                                <a href="#" class="refiled-projects-documents__el">
                                    <img src="./images/doc_icon.png" alt="">
                                    <div class="refiled-projects-documents__el-title">Данные проектирования</div>
                                    <div class="refiled-projects-documents__el-format">
                                        [doc]
                                    </div>
                                </a>
                                <a href="#" class="refiled-projects-documents__el">
                                    <img src="./images/doc_icon.png" alt="">
                                    <div class="refiled-projects-documents__el-title">Результаты проведенных работ</div>
                                    <div class="refiled-projects-documents__el-format">
                                        [pdf]
                                    </div>
                                </a>
                                <a href="#" class="refiled-projects-documents__el">
                                    <img src="./images/doc_icon.png" alt="">
                                    <div class="refiled-projects-documents__el-title">Презентация проекта</div>
                                    <div class="refiled-projects-documents__el-format">
                                        [pdf]
                                    </div>
                                </a>
                                <a href="#" class="refiled-projects-documents__el">
                                    <img src="./images/doc_icon.png" alt="">
                                    <div class="refiled-projects-documents__el-title">Данные проектирования</div>
                                    <div class="refiled-projects-documents__el-format">
                                        [pdf]
                                    </div>
                                </a>
                                <a href="#" class="refiled-projects-documents__el">
                                    <img src="./images/doc_icon.png" alt="">
                                    <div class="refiled-projects-documents__el-title">Результаты проведенных работ</div>
                                    <div class="refiled-projects-documents__el-format">
                                        [pdf]
                                    </div>
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection