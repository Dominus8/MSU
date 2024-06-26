<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSU</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--Мета для ссылки-->

    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="images/header_logo.png"/>
    <meta property="og:url" content="http://MSU24.ru"/>
    <meta property="og:site_name" content="MSU24"/>

    @yield('head-link')

    <link rel="stylesheet" href="/style/swiper8-bundle.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="/style/normalize.css">
    <link rel="stylesheet" href="/style/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

    <!-- Header -->
    <section class="section-outer section-header">
        <section class="section-inner">
            <div class="header">
                <a href="{{route('index')}}" class="header_logo">
                    <img src="/images/header_logo.svg" alt="">
                </a>
                <div class="header_logo--mobile">
                    <img src="/images/header_logo--mobile.svg" alt="">

                </div>
                <div class="header_info">
                    <div class="info-email">
                        <div class="info-email_top">Напишите нам</div>
                        <div class="info-email_bottom">info@msu24.ru</div>
                    </div>
                    <div class="info-phone">
                        <div class="info-phone_top">Позвоните нам</div>
                        <div class="info-phone_bottom">+7 (391) 27-24-24-0</div>
                    </div>
                </div>
                <div class="mobile-header">
                    <div class="info-wrapper">
                        <div class="mobile-header__item mail-ico">
                            <a href="#">
                                <img src="/images/mail-ico.svg" alt="">
                            </a>
                        </div>
                        <div class="mobile-header__item phone-ico">
                            <a href="#">
                                <img src="/images/phone-ico.svg" alt="">
                            </a>
                        </div>
                        <div class="mobile-header__item naw-burger">
                            <!-- <img src="/images/nav-ico.png" alt=""> -->
                            <input id="menu-toggle" type="checkbox" />
                            <label class='menu-button-container' for="menu-toggle">
                                <div class='menu-button'></div>
                            </label>
                            <ul class="menu">
                                <li><div class="mobile_nav-item"><a href="{{route('about')}}">О нас</a> </div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('app-hard-product')}}">Программные продукты</a></div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('app-product')}}">Программно-аппаратные продукты</a></div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('news-list')}}">Новости</a></div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('refiled-projects')}}">Реализованные проекты</a></div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('partners')}}">Партнеры</a></div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('support')}}">Поддержка</a></div></li>
                                <li><div class="mobile_nav-item"><a href="{{route('contacts')}}">Контакты</a></div></li>
                                <li>
                                <div class="mobile_nav-item-sourсe">
                                    <img src="/images/magnifier-icon.png" alt="">
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- /Header -->

    <!-- nav -->
    <section class="section-outer section-nav">
        <section class="section-inner">
            <div class="nav">
                <div class="nav-wrapper">
                    <div class="nav-item"><a id="about" class="nav-item-link" href="{{route('about')}}">О нас</a> </div>
                    <div class="nav-item"><a id="pc" class="nav-item-link" href="{{route('app-product')}}">Программно-аппаратные продукты</a></div>
                    <div class="nav-item"><a id="pac" class="nav-item-link" href="{{route('app-hard-product')}}">Программные продукты</a></div>
                    <div class="nav-item"><a id="news" class="nav-item-link" href="{{route('news-list')}}">Новости</a></div>
                    <div class="nav-item"><a id="rp" class="nav-item-link" href="{{route('refiled-projects')}}">Реализованные проекты</a></div>
                    <div class="nav-item"><a id="partners" class="nav-item-link" href="{{route('partners')}}">Партнеры</a></div>
                    <div class="nav-item"><a id="support" class="nav-item-link" href="{{route('support')}}">Поддержка</a></div>
                    <div class="nav-item"><a id="contact" class="nav-item-link" href="{{route('contacts')}}">Контакты</a></div>
                    <div class="nav-item-source">
                        <a href="{{route('search')}}"><img src="/images/magnifier-icon.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- /nav -->
    @yield('content')
    <!-- footer -->
    <section class="section-outer section-footer">
        <section class="section-inner">
            <div class="footer">
                <div class="footer__logo">
                    <!-- <img src="/images/footer_logo.png" alt=""> -->
                    <object class="footer__logo-img" type="image/svg+xml" data="/images/footer_logo.svg"></object>
                </div>
                <div class="footer__body">
                    <div class="footer-nav">
                        <div class="footer-nav__block">
                            <!-- <div>
                                <a class="nav-item--primary" href="#"> Каталог</a>
                            </div> -->
                            <div>
                                <a class="nav-item" href="{{route('about')}}">О нас</a>
                            </div>
                            <div>
                                <a class="nav-item" href="{{route('news-list')}}">Новости</a>  <!-- class="nav-item--primary" -->
                            </div>
                            <div>
                                <a class="nav-item" href="{{route('contacts')}}">Контакты</a>
                            </div>
                        </div>
                        <div class="footer-nav__block">
                            <div>
                                <a class="nav-item" href="{{route('app-product')}}">Программно-аппаратные продукты</a>
                            </div>
                            <div>
                                <a class="nav-item" href="{{route('app-hard-product')}}">Программные продукты</a>
                            </div>
                        </div>
                        <div class="footer-nav__block">
                            <div>
                                <a class="nav-item" href="{{route('partners')}}">Партнеры</a>
                            </div>

                            <div>
                                <a class="nav-item" href="{{route('support')}}">Поддержка</a>
                            </div>
                            <div>
                                <a class="nav-item" href="{{route('refiled-projects')}}">Реализованные проекты</a>
                            </div>
                            <!-- <div>
                                <a class="nav-item" href="#">Пилотные проекты</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="footer-contacts">
                        <div class="contacts-block">
                            <div class="contacts-item--first">
                                <div class="contacts-item__title">Позвоните нам</div>
                                <div class="contakts-item__subtitle">+7 (391) 27-24-24-0</div>
                            </div>
                        </div>
                        <div class="contacts-block">
                            <div class="contacts-item">
                                <div class="contacts-item__title">Напишите нам</div>
                                <div class="contakts-item__subtitle">info@msu24.ru</div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-social">
                        <div class="footer-social__title">
                            Мы в социальных сетях
                        </div>
                        <div class="footer-social__ico">
                            <div class="footer-social__ico-wrapper">
                                <a href="#" class="footer-social__ico-item"><img src="/images/footer_fb.svg" alt=""></a>
                                <a href="#" class="footer-social__ico-item"><img src="/images/footer_yt.svg" alt=""></a>
                                <a href="#" class="footer-social__ico-item"><img src="/images/footer_tg.svg" alt=""></a>
                                <a href="#" class="footer-social__ico-item"><img src="/images/footer_wp.svg" alt=""></a>
                                <a href="#" class="footer-social__ico-item"><img src="/images/footer_ig.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="footer__copyrites">
                    <div class="copyrites">MSU24 © 2018 - 2022. Все права защищены.</div>
                    <div class="privacy-policy">
                        <a href="#">Политика конфиденциальности</a>
                    </div>
                </div>
        </section>
    </section>
    <!-- /footer -->

    <script src="/js/swiper8-bundle.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
