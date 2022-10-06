@extends('base')
@section('head-link')
<meta property="og:title" content="{{$soloproduct->g_single_page_title}}"/>
<meta property="og:description" content="{{$soloproduct->single_page_metadescription}}"/>
<meta property="og:keywords" content="{{$soloproduct->single_page_metakeywords}}"/>
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
                        <div style="display:none">{{$i=0}}</div>
                        @foreach($product as $el)
                        <div style="display:none">{{$i=$i+1}}</div>
                            <a id="nav-link-{{$i-1}}" class="nav-link swiper-slide" href="/app-hard-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"><img class="nav-element__ico--green"  src="/storage/product_page_ico/{{$el->single_page_gico}}" alt="i"></div>
                                    <div class="nav-element__ico"><img class="nav-element__ico--black" src="/storage/product_page_ico/{{$el->single_page_bico}}" alt="i"></div>
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
                                    {!!$soloproduct->single_page_sudtitle!!}
                                    </div>
                                    <div class="product__purpose">
                                        <div class="product__purpose-title">
                                            <div class="green-marc">
                                                <img src="/images/green-mark.png" alt="">
                                            </div>
                                            <div class="purpose-title">Назначение</div>
                                        </div>
                                        <div class="product__purpose-text">
                                        {!!$soloproduct->single_page_purpose!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="body-top__slider">
                                </div>
                            </div>

                            <div class="content-body__bottom">
                            <div class="basic-parameters-body__bg-slider"></div>
                                <div class="body-bottom__slider">
                                @if(count($soloproduct->single_page_slides)>=1)
                                    <div class="swiper swiper-single-page__bottom">
                                        <div class="swiper-wrapper">
                                            @foreach($soloproduct->single_page_slides as $el)
                                                <div class="swiper-slide">
                                                    <img class="slider-image" src="/storage/product_slides_image/{{$el}}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-control">
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination-3"></div>
                                            <div class="swiper-button-next"></div>
                                        </div>
                                    </div>
                                @endif
                                </div>
                            </div>

                        </div>
                        <div class="single-page-content__product-documents">
                            <div class="product-documents-wrapper">
                                <div class="product-documents__title">
                                    <img src="/images/green-mark.png" alt="">
                                    <div class="product-documents__title-text">Документация</div>
                                </div>
                                @if(count($soloproduct->single_page_documents) >=1)
                                <div class="product-documents__el-wrapper">
                                    @foreach($soloproduct->single_page_documents as $key=>$val)
                                        <a href="/storage/product_document/{{$val}}" class="product-documents__el">
                                            <img src="/images/doc_icon.png" alt="">
                                            <div class="product-documents__el-title">{{pathinfo($key)['filename']}}</div>
                                            <div class="product-documents__el-format">
                                                [{{pathinfo($val)['extension']}}]
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <div class="product-call-to-action">
                                <a href="{{route('support')}}" class="call-to-action-wrapper">
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
                    <div class="catalog-pac__nav--bg-mobile"></div>
                    <div class="catalog-pac__nav-mobile swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                        <div style="display:none">{{$y=0}}</div>
                        @foreach($product as $el)
                        <div style="display:none">{{$y=$y+1}}</div>
                        <a id="nav-link-mobile-{{$y-1}}" class="nav-link swiper-slide" href="/app-hard-product-single-page/{{$el->id}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"><img class="nav-element__ico--green"  src="/storage/product_page_ico/{{$el->single_page_gico}}" alt="i"></div>
                                    <div class="nav-element__ico"><img class="nav-element__ico--black" src="/storage/product_page_ico/{{$el->single_page_bico}}" alt="i"></div>
                                    <div class="nav-element__title">{!!$el->nav_title!!}</div>
                                </div>
                            </a>
                            @endforeach
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
        // console.log(x);
    </script>
    <!-- /main-content -->
@endsection