@extends('base')

@section('content')
    <!-- main-slider -->
    <section class="section-outer section-main-slider">
        <section class="section-inner">
            <div class="main-slider">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img class="slider-image" src="./images/slide_img-cam.png" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="slide-text__title">Детектор Транспорта</div>
                                    <div class="slide-text__produkt-name">Оптик</div>
                                    <div class="slide-text__subtitle">Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                                </div>
                                <div class="slide-button">
                                    <a class="slide-button__link" href="#">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-image" src="./images/slide_img-cam.png" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="slide-text__title">Детектор Транспорта</div>
                                    <div class="slide-text__produkt-name">Оптик</div>
                                    <div class="slide-text__subtitle">Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                                </div>
                                <div class="slide-button">
                                    <a class="slide-button__link" href="#">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-image" src="./images/slide_img-pad.png" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="slide-text__title">Управления транспортом</div>
                                    <div class="slide-text__produkt-name">Единая плаформа</div>
                                    <div class="slide-text__subtitle">Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                                </div>
                                <div class="slide-button">
                                    <a class="slide-button__link" href="#">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>

                <!-- <div class="slider-bollets">
                    <img src="./images/slider_bollet_line.png" alt="">
                </div> -->
            </div>
        </section>
    </section>
    <!-- /main-slider -->
@endsection