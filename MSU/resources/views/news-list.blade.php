@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-news-list">
        <section class="section-inner">
            <section class="news-list">
                <h1>Новости будут сдесь скоро</h1>
                <a href="{{route('single-news')}}">
                    <h4>Одна новость</h4>
                </a>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection