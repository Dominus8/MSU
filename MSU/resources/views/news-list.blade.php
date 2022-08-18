@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-news-list">
        <section class="section-inner">
            <section class="news-list">
                <div class="news-list-content">
                    <div class="news-list-wrapper">
                        <div class="news-list__title">Новости</div>
                        <div class="news-list-pagination">
                            &#60; 1 из 5 &#62;
                        </div>
                        <div class="news-list-el">
                            <div class="news__text-content">
                                <div class="news__title">Улучшенная версия детектора тарнспорта</div>
                                <div class="news__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                <div class="news__more-link"> <a href="{{route('single-news')}}">Подробнее</a> </div>
                            </div>
                            <div class="news__create-date">12.09.2022</div>
                            <div class="news__thumbnail">
                                <img src="./images/news-image-1.png" alt="" class="news__thumbnail-image">
                            </div>
                        </div>
                        <div class="news-list-el">
                            <div class="news__text-content">
                                <div class="news__title">Улучшенная версия детектора тарнспорта</div>
                                <div class="news__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                <div class="news__more-link"> <a href="{{route('single-news')}}">Подробнее</a> </div>
                            </div>
                            <div class="news__create-date">12.09.2022</div>
                            <div class="news__thumbnail">
                                <img src="./images/news-image-1.png" alt="" class="news__thumbnail-image">
                            </div>
                        </div>
                        <div class="news-list-el">
                            <div class="news__text-content">
                                <div class="news__title">Улучшенная версия детектора тарнспорта</div>
                                <div class="news__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                <div class="news__more-link"> <a href="{{route('single-news')}}">Подробнее</a> </div>
                            </div>
                            <div class="news__create-date">12.09.2022</div>
                            <div class="news__thumbnail">
                                <img src="./images/news-image-1.png" alt="" class="news__thumbnail-image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <h1>Новости будут сдесь скоро</h1>
                <a href="{{route('single-news')}}">
                    <h4>Одна новость</h4>
                </a> -->
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection