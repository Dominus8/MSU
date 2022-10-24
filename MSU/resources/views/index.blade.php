@extends('base')

@section('content')
    <!-- main-slider -->
    <section class="section-outer section-main-slider">
        <section class="section-inner">
            <div class="mine-content main-slider">
                <div class="swiper main-swiper">
                    <div class="swiper-wrapper">
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

                    </div>
                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </section>
    </section>
    <!-- /main-slider -->
@endsection