@extends('base')

@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- main-content -->
    <section class="section-outer section-support">
        <section class="section-inner">
            <section class="mine-content support">
                <div class="support-wrapper">
                    <div style="width:100%;" class="support-content">
                        <div class="support-title">Поиск</div>
                        <form action="{{route('search')}}" method="get">
                            <div class="input-group mb-3">
                                <input name="query" type="text" class="form-control" placeholder="Что искать..." aria-label="Что искать..." aria-describedby="button-addon2">
                                <button class="btn  btn-success" type="submit" id="button-addon2">Искать</button>
                                <br>
                                <br>
                            </div>
                        </form>
                        <h4>Результаты поиска по запросу: {{Request::input('query')}}</h4>
                        <br>
                        @if($foundNews)
                            @foreach($foundNews as $el)
                            <div class="search-news-card">
                                <a href="/single-news/{{$el->id}}">{{$el->b_title_news}} {{$el->g_title_news}}</a> <br>
                                {!!$el->subtitle_news!!}
                            </div> <br>
                            @endforeach
                            @else
                            <p>Ничего не найдено...</p>
                            @endif
                        <hr>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- /main-content -->
@endsection