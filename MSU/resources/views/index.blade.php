@extends('base')

@section('content')
    <!-- main-slider -->
    <section class="section-outer section-main-slider">
        <section class="section-inner">
            <div class="mine-content main-slider">
                <div class="swiper main-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach($mainslide as $el)
                        <div class="swiper-slide">
                            <img class="slider-image" src="/storage/image_mine_slide/{{$el->image_mine_slide}}" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="title-wrapper">
                                        @if($el->b_title_mine_slide)
                                        <div class="slide-text__title">{{$el->b_title_mine_slide}}</div>
                                        @endif
                                        @if($el->g_title_mine_slide)
                                        <div class="slide-text__produkt-name">{{$el->g_title_mine_slide}}</div>
                                        @endif
                                    </div>
                                    @if($el->subtitle_mine_slide)
                                    <div class="slide-text__subtitle">{{$el->subtitle_mine_slide}}</div>
                                    @endif
                                </div>
                                @if($el->link_mine_slide)
                                <div class="slide-button">
                                    <a class="slide-button__link" href="{{$el->link_mine_slide}}">Узнать подробнее</a>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        <!-- <div class="swiper-slide">
                            <img class="slider-image" src="./images/slide_img-cam.png" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="title-wrapper">

                                        <div class="slide-text__title">Детектор Транспорта</div>
                                        <div class="slide-text__produkt-name">Оптик</div>
                                    </div>
                                    <div class="slide-text__subtitle">Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                                </div>
                                <div class="slide-button">
                                    <a class="slide-button__link" href="/app-product-single-page/12">Узнать подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-image" src="./images/slide_img-pad.png" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="title-wrapper">

                                        <div class="slide-text__title">Управления транспортом</div>
                                        <div class="slide-text__produkt-name">Единая плаформа</div>
                                    </div>
                                    <div class="slide-text__subtitle">Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                                </div>
                                <a href="/app-product-single-page/12" class="slide-button">
                                    <div class="slide-button__link" >Узнать подробнее</div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img class="slider-image" src="./images/slide_img-pad.png" alt="">
                            <div class="slide-wrapper">
                                <div class="slide-text">
                                    <hr class="slide-text__line">
                                    <div class="title-wrapper">

                                        <div class="slide-text__title">Управления транспортом</div>
                                        <div class="slide-text__produkt-name">Единая плаформа</div>
                                    </div>
                                    <div class="slide-text__subtitle">Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                                </div>
                                <a href="/app-product-single-page/12" class="slide-button">
                                    <div class="slide-button__link" >Узнать подробнее</div>
                                </a>
                            </div>
                        </div> -->
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