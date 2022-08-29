@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-refiled-projects">
        <section class="section-inner">
            <section class="mine-content refiled-projects">
                <div class="refiled-projects-wrapper">
                    <div class="refiled-projects__title">Реализованные проекты</div>
                    <div class="refiled-projects__body">
                        <div class="projects-body__pagination">
                            <!-- <div class="projects-pagination__count">Более 300 проектов</div> -->
                            <div class="projects-pagination_switch">
                                &#60; 1 из 5 &#62;
                            </div>
                        </div>
                        <div class="projects-body__cards">
                            <div class="projects-body__card">
                                <div class="card__dot">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="card__content-wrapper">
                                    <div class="card-content__title">
                                        <div class="card-content__title-mark">
                                                <img src="./images/green-mark.png" alt="">
                                        </div>
                                        <div class="card-content__title-text">
                                            Проектирование дороги
                                        </div>    
                                    </div>
                                    <div class="card-content__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                    <a href="{{route('refiled-projects-single-page')}}" class="card-content__download-link">
                                        Подробнее о проекте
                                    </a>
                                </div>
                                <div class="card-image">
                                    <img src="./images/project_road.png" alt="">
                                </div>
                            </div>
                            <div class="projects-body__card">
                                <div class="card__dot">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="card__content-wrapper">
                                    <div class="card-content__title">
                                        <div class="card-content__title-mark">
                                            <img src="./images/green-mark.png" alt="">
                                        </div>
                                        <div class="card-content__title-text">
                                            Анализ дорожной разметки
                                        </div>
                                    </div>
                                    <div class="card-content__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                    <a href="{{route('refiled-projects-single-page')}}" class="card-content__download-link">
                                        Подробнее о проекте
                                    </a>
                                </div>
                                <div class="card-image">
                                    <img src="./images/road_mark.png" alt="">
                                </div>
                            </div>
                            <div class="projects-body__card">
                                <div class="card__dot">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="card__content-wrapper">
                                    <div class="card-content__title">
                                        <div class="card-content__title-mark">
                                            <img src="./images/green-mark.png" alt="">
                                        </div>
                                        <div class="card-content__title-text">

                                            <div class="card-content__title-text">
                                                Установка детекторов транспорта
                                             </div>    
                                        </div> 
                                    </div>
                                    <div class="card-content__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                    <a href="{{route('refiled-projects-single-page')}}" class="card-content__download-link">
                                        Подробнее о проекте
                                    </a>
                                </div>
                                <div class="card-image">
                                    <img src="./images/Detect.png" alt="">
                                </div>
                            </div>
                            <div class="projects-body__card">
                                <div class="card__dot">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="card__content-wrapper">
                                    <div class="card-content__title">
                                        <div class="card-content__title-mark">
                                            <img src="./images/green-mark.png" alt="">
                                        </div>
                                        <div class="card-content__title-text">

                                            <div class="card-content__title-text">
                                                Установка детекторов транспорта
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="card-content__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                    <a href="{{route('refiled-projects-single-page')}}" class="card-content__download-link">
                                        Подробнее о проекте
                                    </a>
                                </div>
                                <div class="card-image">
                                    <img src="./images/road_mark.png" alt="">
                                </div>
                            </div>
                            <div class="projects-body__card">
                                <div class="card__dot">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="card__content-wrapper">
                                    <div class="card-content__title">
                                        Установка детекторов транспорта
                                    </div>
                                    <div class="card-content__subtitle">Отработка инженерно-технических решений, имитация реальных ситуаций, интеграция с АСУДД, отработаны и внедрены решения по оптимизации дорожного движения без дополнительных затрат</div>
                                    <a href="{{route('refiled-projects-single-page')}}" class="card-content__download-link">
                                        Подробнее о проекте
                                    </a>
                                </div>
                                <div class="card-image">
                                    <img src="./images/Detect.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection