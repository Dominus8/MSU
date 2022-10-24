@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-news-list">
        <section class="section-inner">
            <section class="mine-content news-list">
                <div class="news-list-content">
                    <div class="news-list-wrapper">
                        <div class="news-list__title">Новости</div>
                        <div class="news-list-pagination">
                            &#60; 1 из 5 &#62;
                        </div>
                        @foreach($news as $el)
                        <div class="news-list-el">
                            <div class="news__text-content">
                                <div class="news__title">{{$el->b_title_news}} {{$el->g_title_news}}</div>
                                <div class="news__subtitle">{!!$el->subtitle_news!!}</div>
                                <div class="news__more-link"> <a href="/single-news/{{$el->id}}">Подробнее</a> </div>
                            </div>
                            <div class="news__create-date">{{date('d-m-Y', strtotime($el->date_news))}}</div>
                            <div class="news__thumbnail">
                                <img src="/storage/image_news/{{$el->thumbnail_news}}" alt="" class="news__thumbnail-image">
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection