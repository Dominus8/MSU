@extends('base')

@section('head-link')
<meta property="og:title" content="{{$news->b_title_news}} {{$news->g_title_news}}"/>
<meta property="og:description" content="{{$news->description_news}}"/>
<meta property="og:keywords" content="{{$news->keywords_news}}"/>
@endsection

@section('content')
    <!-- main-content -->
    <section class="section-outer section-single-news">
        <section class="section-inner">
            <section class="mine-content single-news">
                <div class="single-news-wrapper">
                    <div class="single-news__title">
                        <div class="single-news__title--black">{{$news->b_title_news}}</div>
                        <div class="single-news__title--green">{{$news->g_title_news}}</div>
                    </div>
                    <div class="single-news__publishing-date">{{date('d-m-Y', strtotime($news->date_news))}}</div>
                    <div class="single-news-content">
                        <div class="single-news__content-wrapper">
                            <div class="single-news__top-section-wrapper">
                                <div class="single-news__text-top">{!!$news->top_text_news!!}<br><br></div>
                                <div class="single-news__image-area-wrapper">
                                    <div class="single-news__image-area">
                                        <div class="single-news__image-wrapper">
                                            <img class="single-news__image" src="/storage/image_news/{{$news->image_news}}" alt="">
                                        </div>
                                        @if($news->elink_text_news)
                                            <a href="{{$news->elink_link_news}}">
                                                <div class="single-news__link">
                                                    <div class="single-news__link-text">{{$news->elink_text_news}}</div>
                                                    <div class="single-news__ico">
                                                        <img src="/images/single-news-ico.png" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="single-news__text-bottom">
                            {!!$news->bottom_text_news!!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection