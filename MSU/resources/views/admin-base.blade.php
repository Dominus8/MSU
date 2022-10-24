@extends('base')

@section('head-link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
@endsection

@section('content')
    <!-- main-content -->
    <section class="section-outer section-admin">
        <section class="section-inner">
            <section class="mine-content admin">
                <div style="display:flex; justify-content: space-between;" class="manage-admin-button">
                    <a href="{{route('admin')}}"><h1>Админка</h1></a>
                    <a style="color:red;" href="{{route('logout')}}"><h1>Разлогиниться</h1></a>
                </div>

            <div class="admin-nav">
                <a href="{{route('admin-home-page')}}" class="admin-nav__el">Главная</a>
                <a href="{{route('admin-about')}}" class="admin-nav__el">О нас</a>
                <a href="{{route('admin-product')}}" class="admin-nav__el">Продукты</a>
                <a href="{{route('admin-news')}}" class="admin-nav__el">Новости</a>
                <a href="{{route('admin-projects')}}" class="admin-nav__el">Проекты</a>
                <a href="{{route('admin-partner')}}" class="admin-nav__el">Партнёры</a>
                <a href="{{route('admin-support')}}" class="admin-nav__el">Поддержка</a>
                <a href="{{route('admin-contact')}}" class="admin-nav__el">Контакты</a>

            </div>
            @yield('admin-content')
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection