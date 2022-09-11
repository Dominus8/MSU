@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-catalog-pac">
        <section class="section-inner">
            <section class="mine-content catalog-pac">
                <div class="catalog-pac-wrapper">
                <div class="catalog-pac__nav--bg">
                    <div class="catalog-pac__nav swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                            <a id="nav-link-0" class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element ">
                                    <div class="nav-element__ico">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_446_8597)">
                                            <path class="nav-svg-ico" d="M0 9.6C0 4.29806 4.29806 0 9.6 0H38.4C43.702 0 48 4.29806 48 9.6V38.4C48 43.702 43.702 48 38.4 48H9.6C4.29806 48 0 43.702 0 38.4V9.6Z" fill="#333333"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M23.1835 34.0327C21.1864 32.3246 14.7695 26.4815 14.7695 21.9219C14.7695 16.5219 18.3695 12.9219 23.7695 12.9219C29.1695 12.9219 32.7695 17.4219 32.7695 21.9219C32.7695 25.7399 26.2906 32.1496 24.3269 34.0046C24.0067 34.3071 23.5183 34.3191 23.1835 34.0327ZM26.7695 20.7219C26.7695 22.3787 25.4264 23.7219 23.7695 23.7219C22.1127 23.7219 20.7695 22.3787 20.7695 20.7219C20.7695 19.065 22.1127 17.7219 23.7695 17.7219C25.4264 17.7219 26.7695 19.065 26.7695 20.7219Z" fill="#FAFAFA"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_446_8597">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                        </object>
                                    </div>
                                    <div class="nav-element__title">управление транспортными потоками</div>
                                </div>
                            </a>
                            <a id="nav-link-1" class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_208_7003)">
                                            <g clip-path="url(#clip1_208_7003)">
                                                <path class="nav-svg-ico" d="M0 15.36C0 9.98352 0 7.29522 1.04634 5.24169C1.96672 3.43534 3.43534 1.96672 5.24169 1.04634C7.29522 0 9.98352 0 15.36 0H32.64C38.0165 0 40.7048 0 42.7583 1.04634C44.5646 1.96672 46.0333 3.43534 46.9537 5.24169C48 7.29522 48 9.98352 48 15.36V32.64C48 38.0165 48 40.7048 46.9537 42.7583C46.0333 44.5646 44.5646 46.0333 42.7583 46.9537C40.7048 48 38.0165 48 32.64 48H15.36C9.98352 48 7.29522 48 5.24169 46.9537C3.43534 46.0333 1.96672 44.5646 1.04634 42.7583C0 40.7048 0 38.0165 0 32.64V15.36Z" fill="#333333"/>
                                                <path opacity="0.3" d="M18.6004 14.4004H15.0004C14.669 14.4004 14.4004 14.669 14.4004 15.0004V18.6004C14.4004 18.9318 14.669 19.2004 15.0004 19.2004H18.6004C18.9318 19.2004 19.2004 18.9318 19.2004 18.6004V15.0004C19.2004 14.669 18.9318 14.4004 18.6004 14.4004Z" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.2004 14.4004C21.869 14.4004 21.6004 14.669 21.6004 15.0004V18.6004C21.6004 18.9318 21.869 19.2004 22.2004 19.2004H25.8004C26.1318 19.2004 26.4004 18.9318 26.4004 18.6004V15.0004C26.4004 14.669 26.1318 14.4004 25.8004 14.4004H22.2004ZM15.0004 21.6004C14.669 21.6004 14.4004 21.869 14.4004 22.2004V25.8004C14.4004 26.1318 14.669 26.4004 15.0004 26.4004H18.6004C18.9318 26.4004 19.2004 26.1318 19.2004 25.8004V22.2004C19.2004 21.869 18.9318 21.6004 18.6004 21.6004H15.0004ZM21.6004 22.2004C21.6004 21.869 21.869 21.6004 22.2004 21.6004H25.8004C26.1318 21.6004 26.4004 21.869 26.4004 22.2004V25.8004C26.4004 26.1318 26.1318 26.4004 25.8004 26.4004H22.2004C21.869 26.4004 21.6004 26.1318 21.6004 25.8004V22.2004ZM29.4004 14.4004C29.069 14.4004 28.8004 14.669 28.8004 15.0004V18.6004C28.8004 18.9318 29.069 19.2004 29.4004 19.2004H33.0004C33.3318 19.2004 33.6004 18.9318 33.6004 18.6004V15.0004C33.6004 14.669 33.3318 14.4004 33.0004 14.4004H29.4004ZM28.8004 22.2004C28.8004 21.869 29.069 21.6004 29.4004 21.6004H33.0004C33.3318 21.6004 33.6004 21.869 33.6004 22.2004V25.8004C33.6004 26.1318 33.3318 26.4004 33.0004 26.4004H29.4004C29.069 26.4004 28.8004 26.1318 28.8004 25.8004V22.2004ZM15.0004 28.8004C14.669 28.8004 14.4004 29.069 14.4004 29.4004V33.0004C14.4004 33.3318 14.669 33.6004 15.0004 33.6004H18.6004C18.9318 33.6004 19.2004 33.3318 19.2004 33.0004V29.4004C19.2004 29.069 18.9318 28.8004 18.6004 28.8004H15.0004ZM21.6004 29.4004C21.6004 29.069 21.869 28.8004 22.2004 28.8004H25.8004C26.1318 28.8004 26.4004 29.069 26.4004 29.4004V33.0004C26.4004 33.3318 26.1318 33.6004 25.8004 33.6004H22.2004C21.869 33.6004 21.6004 33.3318 21.6004 33.0004V29.4004ZM29.4004 28.8004C29.069 28.8004 28.8004 29.069 28.8004 29.4004V33.0004C28.8004 33.3318 29.069 33.6004 29.4004 33.6004H33.0004C33.3318 33.6004 33.6004 33.3318 33.6004 33.0004V29.4004C33.6004 29.069 33.3318 28.8004 33.0004 28.8004H29.4004Z" fill="white"/>
                                            </g>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_208_7003">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        <clipPath id="clip1_208_7003">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>

                                    </div>
                                    <div class="nav-element__title">Конфигурация сценарных планов управления движением</div>
                                </div>
                            </a>
                            <a id="nav-link-2" class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> 
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_211_7032)">
                                            <g clip-path="url(#clip1_211_7032)">
                                                <path class="nav-svg-ico" d="M0 15.36C0 9.98352 0 7.29522 1.04634 5.24169C1.96672 3.43534 3.43534 1.96672 5.24169 1.04634C7.29522 0 9.98352 0 15.36 0H32.64C38.0165 0 40.7048 0 42.7583 1.04634C44.5646 1.96672 46.0333 3.43534 46.9537 5.24169C48 7.29522 48 9.98352 48 15.36V32.64C48 38.0165 48 40.7048 46.9537 42.7583C46.0333 44.5646 44.5646 46.0333 42.7583 46.9537C40.7048 48 38.0165 48 32.64 48H15.36C9.98352 48 7.29522 48 5.24169 46.9537C3.43534 46.0333 1.96672 44.5646 1.04634 42.7583C0 40.7048 0 38.0165 0 32.64V15.36Z" fill="#333333"/>
                                                <path opacity="0.3" d="M32.1001 16.1992H15.9001C15.7344 16.1992 15.6001 16.3335 15.6001 16.4992V18.2992C15.6001 18.4649 15.7344 18.5992 15.9001 18.5992H32.1001C32.2658 18.5992 32.4001 18.4649 32.4001 18.2992V16.4992C32.4001 16.3335 32.2658 16.1992 32.1001 16.1992Z" fill="white"/>
                                                <path opacity="0.3" d="M29.7 10.8008H18.3C18.1343 10.8008 18 10.9351 18 11.1008V12.9008C18 13.0665 18.1343 13.2008 18.3 13.2008H29.7C29.8657 13.2008 30 13.0665 30 12.9008V11.1008C30 10.9351 29.8657 10.8008 29.7 10.8008Z" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2 21.5996C12.5372 21.5996 12 22.1368 12 22.7996V31.7996C12 32.4624 12.5372 32.9996 13.2 32.9996H34.8C35.4628 32.9996 36 32.4624 36 31.7996V22.7996C36 22.1368 35.4628 21.5996 34.8 21.5996H13.2ZM33.6 24.5996H14.4V26.9996H33.6V24.5996Z" fill="white"/>
                                            </g>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_211_7032">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        <clipPath id="clip1_211_7032">
                                        <rect width="48" height="48" fill="white"/>
                                        </clipPath>
                                        </defs>
                                        </svg>
     
                                    </div>
                                    <div class="nav-element__title">Выдача транспортных разрешений</div>
                                </div>
                            </a>
                            <a id="nav-link-3" class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> 
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_970_5347)">
                                            <path class="nav-svg-ico" d="M0 15.36C0 9.98352 0 7.29522 1.04634 5.24169C1.96672 3.43534 3.43534 1.96672 5.24169 1.04634C7.29522 0 9.98352 0 15.36 0H32.64C38.0165 0 40.7048 0 42.7583 1.04634C44.5646 1.96672 46.0333 3.43534 46.9537 5.24169C48 7.29522 48 9.98352 48 15.36V32.64C48 38.0165 48 40.7048 46.9537 42.7583C46.0333 44.5646 44.5646 46.0333 42.7583 46.9537C40.7048 48 38.0165 48 32.64 48H15.36C9.98352 48 7.29522 48 5.24169 46.9537C3.43534 46.0333 1.96672 44.5646 1.04634 42.7583C0 40.7048 0 38.0165 0 32.64V15.36Z" fill="#333333"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3999 18.0008C11.3999 17.338 11.9371 16.8008 12.5999 16.8008H35.3999C36.0627 16.8008 36.5999 17.338 36.5999 18.0008V32.4008C36.5999 33.0635 36.0627 33.6008 35.3999 33.6008H12.5999C11.9371 33.6008 11.3999 33.0635 11.3999 32.4008V18.0008ZM23.9999 31.8008C20.3548 31.8008 17.3999 28.8458 17.3999 25.2008C17.3999 21.5557 20.3548 18.6008 23.9999 18.6008C27.645 18.6008 30.5999 21.5557 30.5999 25.2008C30.5999 28.8458 27.645 31.8008 23.9999 31.8008ZM14.3999 21.6008H15.5999C16.2627 21.6008 16.7999 21.0635 16.7999 20.4008C16.7999 19.738 16.2627 19.2008 15.5999 19.2008H14.3999C13.7371 19.2008 13.1999 19.738 13.1999 20.4008C13.1999 21.0635 13.7371 21.6008 14.3999 21.6008Z" fill="white"/>
                                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M24.0002 30.0004C26.6512 30.0004 28.8002 27.8514 28.8002 25.2004C28.8002 22.5494 26.6512 20.4004 24.0002 20.4004C21.3492 20.4004 19.2002 22.5494 19.2002 25.2004C19.2002 27.8514 21.3492 30.0004 24.0002 30.0004Z" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5999 25.1996C27.5999 27.1878 25.9881 28.7996 23.9999 28.7996C22.0117 28.7996 20.3999 27.1878 20.3999 25.1996C20.3999 23.2114 22.0117 21.5996 23.9999 21.5996C25.9881 21.5996 27.5999 23.2114 27.5999 25.1996ZM25.7999 25.1996C25.7999 26.1938 24.994 26.9996 23.9999 26.9996C23.0058 26.9996 22.1999 26.1938 22.1999 25.1996C22.1999 24.2055 23.0058 23.3996 23.9999 23.3996C24.994 23.3996 25.7999 24.2055 25.7999 25.1996Z" fill="white"/>
                                        </g>
                                    <defs>
                                    <clipPath id="clip0_970_5347">
                                    <rect width="48" height="48" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>

                                    </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a id="nav-link-4" class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a id="nav-link-5" class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a  class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"></div>
                                    <div class="nav-element__title"></div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-scrollbar"></div>
                    </div>
                    </div>
                    <div class="app-product-singlepage__content">
                        <div class="single-page-pagination">
                            <!-- <a href="{{route('index')}}">Главная</a><a href="{{route('app-product')}}">— Программно-аппаратные продукты</a><a href="{{route('app-product-single-page')}}">— ДТ Оптик</a> -->
                        </div>
                        <div class="singlepage-content-title">
                            Детектор транспорта
                        </div>
                        <div class="single-page-content__pruduct-name">
                            ОПТИК
                        </div>
                        <div class="singlep-age-content__category-name">
                            <!-- ПРОГРАММНО-АППАРАТНЫЙ ПРОДУКТ -->
                        </div>
                        <hr>
                        <div class="single-page-content__body">
                            <div class="content-body__top">
                                <div class="body-top__text">
                                    <div class="product__subtitle">
                                        <div class="product__subtitle-wrapper">
                                            <div class="product__subtitle-text">
                                                <span class="bold">Детектор транспорта</span> — техническое средство, предназначенное для обнаружения транспортных средств, регистрации прохождения количества транспортных средств через зону детекции и определения параметров транспортных потоков.
                                                <br>
                                                <br> Изготавливается в соответствии с требованиями <span class="green">ГОСТ 34.401-90 </span> «Информационная технология (ИТ). Комплекс стандартов на автоматизированные системы. Средства технические периферийные
                                                автоматизированных систем дорожного движения. Типы и технические требования». <span class="green">ГОСТ 32965-2014</span> (прил. Б) «Дороги автомобильные общего пользования. Методы учёта интенсивности движения транспортного
                                                потока».
                                            </div>
                                            <div class="swiper swiper-single-page-mobile">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img class="slider-image" src="./images/product_image.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="slider-image" src="./images/product_image.png" alt="">
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <img class="slider-image" src="./images/product_image.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="swiper-control">
                                                    <div class="swiper-button-prev"></div>
                                                    <div class="swiper-button-next"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product__purpose">
                                        <div class="product__purpose-title">
                                            <div class="green-marc">
                                                <img src="./images/green-mark.png" alt="">
                                            </div>
                                            <div class="purpose-title">Назначение</div>
                                        </div>
                                        <div class="product__purpose-text">
                                            Фиксация прохождения транспортных средств по каждой полосе в реальном масштабе времени; получение в реальном времени параметров наличия транспортных средств и скорости каждой единицы транспорта. Погрешность не более 10% при благоприятных* погодных условиях.
                                            <br><br> Благоприятные погодные условия — состояние погоды, при котором метеорологические факторы не оказывают отрицательного влияния на состояние поверхности дороги, скорость и безопасность движения автомобилей
                                            (сухо, ясно, отсутствие ветра или ветер со скоростью до 10 м/с, отсутствие тумана, относительная влажность воздуха до 90 %, температура воздуха в пределах от -40 °С до +40 °С в тени).
                                        </div>

                                    </div>
                                </div>
                                <div class="body-top__slider">
                                    <div class="swiper swiper-single-page">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="./images/product_image.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="./images/product_image.png" alt="">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="slider-image" src="./images/product_image.png" alt="">
                                            </div>
                                        </div>
                                            <div class="swiper-control">
                                                <div class="swiper-button-prev"></div>
                                                <div class="swiper-pagination-2"></div>
                                                <div class="swiper-button-next"></div>
                                            </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="content-body__bottom">
                                <div class="basic-parameters-body__bg"></div>
                                <div class="body-bottom__basic-parameters">
                                    <div class="basic-parameters__title">
                                        <img src="./images/green-mark.png" alt="">
                                        <div class="basic-parameters__title-text">
                                            Основные параметры
                                        </div>
                                    </div>
                                    
                                    <div class="basic-parameters-body">
                                        <div class="basic-parameters__list">
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Расчет интенсивности потока</div>
                                                <div class="parameters-value">от 0 до 2000 ед/ч</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Расчет скорости транспортных средств </div>
                                                <div class="parameters-value">от 10 до 120 км/ч</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Минимальные размеры транспортного средства</div>
                                                <div class="parameters-value">от 2м длины, от 1.3м ширины</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Количество контролируемых полос движения</div>
                                                <div class="parameters-value">от 1 до 2</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Диапазон рабочей температуры</div>
                                                <div class="parameters-value">от - 40 ° С до + 50 ° С</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Протокол взаимодействия с ИТС</div>
                                                <div class="parameters-value">opt 1.0 (открытый)</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Потребляемая мощность </div>
                                                <div class="parameters-value">220 В ± 10%</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Напряжение питания</div>
                                                <div class="parameters-value">220 В ± 10%</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Масса (без кронштейна)</div>
                                                <div class="parameters-value">не более 3 кг</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                            <div class="parameters-list__el">
                                                <div class="parameters-title">Габаритные размеры (длина, ширина, высота)</div>
                                                <div class="parameters-value">470*110*100 мм</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-page-content__product-documents">
                            <div class="product-documents-wrapper">
                                <div class="product-documents__title">
                                    <img src="./images/green-mark.png" alt="">
                                    <div class="product-documents__title-text">Документация</div>
                                </div>
                                <div class="product-documents__el-wrapper">
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Гарантийный талон</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по эксплуатации</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по настройке и регулировке оборудования</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Гарантийный талон</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                    <a href="#" class="product-documents__el">
                                        <img src="./images/doc_icon.png" alt="">
                                        <div class="product-documents__el-title">Инструкция по использованию</div>
                                        <div class="product-documents__el-format">
                                            [pdf]
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="product-call-to-action">
                                <a href="#" class="call-to-action-wrapper">
                                    <div class="call-to-action__image">
                                        <img src="./images/question.png" alt="">
                                    </div>
                                    <div class="call-to-action__text">
                                        Не нашли то, что искали? <span class="green">Напишите нам</span> , мы поможем
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-pac__nav-mobile swiper swiperslider">
                        <div class="pac-nav-wrapper swiper-wrapper">
                            <a class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element ">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Координированное управление транспортными потоками</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/config_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Конфигурация сценарных планов управления движением</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Выдача транспортных разрешений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/admin_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/get_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                            <a class="nav-link swiper-slide" href="{{route('app-product-single-page')}}">
                                <div class="pac-nav__element">
                                    <div class="nav-element__ico"> <img src="./images/coord_ico.png" alt="i"> </div>
                                    <div class="nav-element__title">Администрирование транспортных нарушений</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-scrollbar swiper-scrollbar-mobile"></div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script>
        let x = $('.content-body__bottom').height();
        let y = $('.basic-parameters-body__bg').height(x+128);
    </script>
    <!-- /main-content -->
@endsection