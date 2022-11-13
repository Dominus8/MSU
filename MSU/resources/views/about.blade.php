@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-about">
        <section class="section-inner">
            <section class="mine-content about">
                <div class="about-wrapper">
                    <div class="about-title">О компании</div>
                    <div class="about-body">
                        <div class="about-body__content">
                            <div class="about-subtitle">
                                <div class="about-subtitle__content">
                                    <div class="about-subtitle__content-text">
                                        @if($abouttext)
                                            {!!$abouttext->about_subtitle!!}
                                        @endif
                                    </div>
                                    <div class="about-numbers">
                                        <div class="numders__element">
                                            <div class="numders__title">100+</div>
                                            <div class="numbers__subtitle">экспертных заключений</div>
                                        </div>
                                        <div class="numders__element">
                                            <div class="numders__title">300+</div>
                                            <div class="numbers__subtitle">довольных клиентов</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="honor-aria">
                                @foreach($aboutcard as $el)
                                    <div class="honor-aria__card">
                                        <div class="honor-card__image"><img src="storage/adout_card_image/{{$el->adout_card_image}}" alt=""></div>
                                        <div class="honor-card__content">
                                            <div class="card-content__text">{!!$el->adout_card_text!!}</div>
                                            <div class="card-content__date"><span class="text-bold">Дата аккредитации:</span> {{date('d-m-Y', strtotime($el->adout_card_date))}}г.</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="documents">
                                <div class="documents__list">
                                    <div class="documents__title">
                                        <img src="/images/green-mark.png" alt="">
                                        <div class="title-text">Аккредитации и сертификаты</div>
                                    </div>
                                    @foreach($aboutdoc as $el)
                                        <a href="/storage/adout_doc_file/{{$el->adout_doc_file}}" class="documents__element">
                                            <div class="element__ico"><img src="/images/doc_icon.png" alt=""></div>
                                            <div class="elemetn__title">{{$el->adout_doc_title}}</div>
                                        </a>
                                    @endforeach
                                </div>
                                <a href="{{route('support')}}" class="about-call">
                                    <div class="about-call__image"><img src="/images/question.png" alt=""></div>
                                    <div class="about-call__subtitle">Не нашли то, что искали?
                                        <span>Напишите нам,</span> мы поможем</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection