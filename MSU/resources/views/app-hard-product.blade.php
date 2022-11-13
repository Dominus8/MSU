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
                        <a class="nav-link swiper-slide" href="/app-hard-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="/storage/product_page_ico/{{$el->single_page_bico}}" alt="i"> </div>
                                    <div class="nav-element__title">{!!$el->nav_title!!}</div>
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
                    @if(isset($applabel->applable_image))
                    <div class="catalog-pac__home-content">
                        <div class="pac-home-content__title">{{$applabel->applable_title}}</div>
                        <div class="pac-home-content__subtitle">
                            {{$applabel->applable_subtitle}}
                        </div>
                        <div class="pac-home-content__image">
                            <img src="storage/product_page_ico/{{$applabel->applable_image}}" alt="">
                        </div>
                    </div>
                    @endif
                    <div class="catalog-pac__nav-mobile swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                        @foreach($product as $el)
                        <a  class="nav-link swiper-slide" href="/app-hard-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"><img class="nav-element__ico--black" src="/storage/product_page_ico/{{$el->single_page_bico}}" alt="i"></div>
                                    <div class="nav-element__title">{!!$el->nav_title!!}</div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <!-- <div class="swiper-pagination"></div> -->
                        <div class="swiper-scrollbar swiper-scrollbar-mobile"></div>

                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection