@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-admin">
        <section class="section-inner">
            <section class="admin">
            <h1>Админка</h1>
            <div class="admin-nav">
                <a href="#" class="admin-nav__el">О нас</a>
                <a href="#" class="admin-nav__el">Продукты</a>
                <a href="#" class="admin-nav__el">Новости</a>
                <a href="#" class="admin-nav__el">Проекты</a>
                <a href="#" class="admin-nav__el">Партнёры</a>
                <a href="#" class="admin-nav__el">Поддержка</a>
                <a href="{{route('admin-contact')}}" class="admin-nav__el">Контакты</a>

            </div>
            @yield('admin-content')
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection