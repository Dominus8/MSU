@extends('base')
@section('head-link')
<meta property="og:title" content="Программные продукты"/>
<meta property="og:description" content="Программные продукты"/>
@endsection

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
                    <div class="catalog-pac__home-content">
                        <div class="pac-home-content__title">Программно-аппаратные продукты</div>
                        <div class="pac-home-content__subtitle">
                            Оборудование разработанно собственным штатом инженеров, проектировщиков, разработчиков, дизайнеров, сирийно <br> производиться на собственной производственной базе. Оборудование Российского производства и внесено в реестр МинПромТорга РФ.
                        </div>
                        <div class="pac-home-content__image">
                            <img src="./images/app-hard.png" alt="">
                        </div>
                    </div>
                    <div class="catalog-pac__nav-mobile swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                        @foreach($product as $el)
                        <a class="nav-link swiper-slide" href="/app-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="/storage/product_page_ico/{{$el->single_page_bico}}" alt="i"> </div>
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