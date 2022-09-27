@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-refiled-projects-sigle-page">
        <section class="section-inner">
            <section class="mine-content refiled-projects-sigle-page">
                <div class="refiled-projects-sigle-page-wrapper">
                    <div class="refiled-projects-sigle-page-title">
                        <div class="refiled-projects-sigle-page-title--black">{{$project->b_title_project}}</div>
                        <div class="refiled-projects-sigle-page-title--green">{{$project->g_title_project}}</div>
                    </div>    
                    <hr>
                    <div class="refiled-projects-sigle-page__content">
                        <div class="refiled-projects-sigle-page__content-text">
                            {!!$project->full_text_project!!}
                        </div>

                        <div class="refiled-projects-sigle-page__content-links">
                            @if($project->links_to_send)
                                @foreach(json_decode($project->links_to_send) as $key=>$val)
                                    <a href="{{$val}}" class="refiled-projects-sigle-page__link-el">
                                        <div class="link__text">{{$key}}</div>
                                        <div class="link__ico"><img src="/images/single-news-ico.png" alt="ico"></div>
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    
                    <div class="refiled-projects__slider">
                        <div class="swiper swiper-refiled-projects">
                            <div class="swiper-wrapper">
                                @foreach($project->image_project as $el)
                                    <div class="swiper-slide">
                                        <img class="slider-image" src="/storage/image_project/{{$el}}" alt="">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    
                    @if($project->document_project)
                        <div class="refiled-projects__product-documents">
                            <div class="refiled-projects-documents-wrapper">
                                <div class="refiled-projects-documents__title">
                                    <img src="/images/green-mark.png" alt="">
                                    <div class="refiled-projects-documents__title-text">Документация</div>
                                </div>
                                <div class="refiled-projects-documents__el-wrapper">
                                    @foreach($project->document_project as $key=>$val)
                                        <a href="/storage/product_document/{{$val}}" class="refiled-projects-documents__el">
                                            <img src="/images/doc_icon.png" alt="">
                                            <div class="refiled-projects-documents__el-title">{{pathinfo($key)['filename']}}</div>
                                            <div class="refiled-projects-documents__el-format">
                                                [{{pathinfo($val)['extension']}}]
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div> 
                        </div>
                    @endif
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection