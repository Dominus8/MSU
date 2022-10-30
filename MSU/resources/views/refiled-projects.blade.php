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
                                @if($project->hasPages())
                                    <a href="{{$project->previousPageUrl()}}">&#60;</a> {{$project->currentPage()}} из {{$project->lastPage()}} <a href="{{$project->nextPageUrl()}}">&#62;</a> 
                                @endif
                            </div>
                        </div>
                        @foreach($project as $el)
                            <div class="projects-body__cards">
                                <div class="projects-body__card">
                                <div class="card__dot">
                                    <img src="/images/green-mark.png" alt="">
                                </div>
                                <div class="card__content-wrapper">
                                    <div class="card-content__title">
                                        <div class="card-content__title-mark">
                                                <img src="/images/green-mark.png" alt="">
                                        </div>
                                        <div class="card-content__title-text">
                                            {{$el->b_title_project}} {{$el->g_title_project}}
                                        </div>    
                                    </div>
                                    <div class="card-content__subtitle">{{$el->subtitle_project}}</div>
                                    <a href="/refiled-projects-single-page/{{$el->id}}" class="card-content__download-link">
                                        Подробнее о проекте
                                    </a>
                                </div>
                                <div class="card-image">
                                    <img src="/storage/image_project/{{$el->thumbnail_project}}" alt="img">
                                </div>
                            </div>
                        @endforeach

                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection