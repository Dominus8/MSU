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
    <meta property="og:title" content="Название страницы"/>
    <meta property="og:description" content="Описание страницы"/>
    <meta property="og:image" content="images/header_logo.png"/>
    <meta property="og:url" content="http://MSU24.ru"/>
    <meta property="og:site_name" content="MSU24"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    
</head>

<body>

    <!-- Header -->
    <section class="section-outer section-header">
        <section class="section-inner">
            <div class="header">
                <a href="{{route('index')}}" class="header_logo">
                    <img src="images/header_logo.png" alt="">
                </a>
                <div class="header_logo--mobile">
                    <img src="./images/header_logo--mobile.png" alt="">
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
                <div class="momile-header">
                    <div class="info-wrapper">
                        <div class="momile-header__item mail-ico">
                            <a href="#">
                                <img src="./images/mail-ico.png" alt="">
                            </a>
                        </div>
                        <div class="momile-header__item phone-ico">
                            <img src="./images/phone-ico.png" alt="">
                        </div>
                        <div class="momile-header__item naw-burger">
                            <img src="./images/nav-ico.png" alt="">
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
                    <div class="nav-item"><a href="{{route('about')}}">О нас</a> </div>
                    <div class="nav-item"><a href="{{route('app-product')}}">Программные продукты</a></div>
                    <div class="nav-item"><a href="{{route('app-hard-product')}}">Программно-аппаратные продукты</a></div>
                    <div class="nav-item"> <a href="{{route('news-list')}}">Новости</a></div>
                    <div class="nav-item"><a href="{{route('refiled-projects')}}">Реализованные проекты</a></div>
                    <div class="nav-item"><a href="{{route('partners')}}">Партнеры</a></div>
                    <div class="nav-item"><a href="{{route('support')}}">Поддержка</a></div>
                    <div class="nav-item"><a href="{{route('contacts')}}">Контакты</a></div>
                    <div class="nav-item-sourse">
                        <img src="images/magnifier-icon.png" alt="">
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
                    <img src="./images/footer_logo.png" alt="">
                </div>
                <div class="footer__body">
                    <div class="footer-nav">
                        <div class="footer-nav__block">
                            <div> <a class="nav-item--primary" href="#"> Каталог</a></div>
                            <div>
                                <a class="nav-item" href="#">Программные продукты</a>
                            </div>
                            <div>
                                <a class="nav-item" href="#">Программно-аппаратные продукты</a>
                            </div>
                        </div>
                        <div class="footer-nav__block">
                            <div>
                                <a class="nav-item--primary" href="#">О нас</a>
                            </div>
                            <div>
                                <a class="nav-item" href="#">Партнеры</a>
                            </div>
                            <div>
                                <a class="nav-item" href="#">Сотрудничество</a>
                            </div>
                            <div>
                                <a class="nav-item" href="#">Поддержка</a>
                            </div>
                        </div>
                        <div class="footer-nav__block">
                            <div>
                                <a class="nav-item--primary" href="#">Наши проекты</a>
                            </div>
                            <div>
                                <a class="nav-item" href="#">Реализованные проекты</a>
                            </div>
                            <div>
                                <a class="nav-item" href="#">Пилотные проекты</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-contacts">
                        <div class="contacts-block">
                            <div class="contacts-item">
                                <div class="contacts-item__title">Позвоните нам</div>
                                <div class="contakts-item__subtitle">+7 (999) 236-7896</div>
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
                                <a href="" class="footer-social__ico-item"><img src="./images/footer_fb.png" alt=""></a>
                                <a href="" class="footer-social__ico-item"><img src="./images/footer_yt.png" alt=""></a>
                                <a href="" class="footer-social__ico-item"><img src="./images/footer_tg.png" alt=""></a>
                                <a href="" class="footer-social__ico-item"><img src="./images/footer_wp.png" alt=""></a>
                                <a href="" class="footer-social__ico-item"><img src="./images/footer_ig.png" alt=""></a>
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
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>