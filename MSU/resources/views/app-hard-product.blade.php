@extends('base')

@section('content')

    <!-- main-content -->
    <section class="section-outer section-catalog-pac">
        <section class="section-inner">
            <section class="catalog-pac">
                <div class="catalog-pac-wrapper">
                    <div class="catalog-pac__nav">
                        <div class="pac-nav-wrapper">
                            <a class="nav-link" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Координированное управление транспортными потоками</div>
                                </div>
                            </a>
                            <a class="nav-link" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/config_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Конфигурация сценарных планов управления движением</div>
                                </div>
                            </a>
                            <a class="nav-link" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Выдача транспортных разрешений</div>
                                </div>
                            </a>
                            <a class="nav-link" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/admin_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link" href="{{route('app-hard-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="catalog-pac__home-content">
                        <div class="pac-home-content__title">Программно-аппаратные продукты</div>
                        <div class="pac-home-content__subtitle">Аппараты для фиксации прохождения транспортных средств по каждой полосе в реальном масштабе времени</div>
                        <div class="pac-home-content__image">
                            <img src="./images/programm-cat.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection