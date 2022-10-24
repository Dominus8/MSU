@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-partners">
        <section class="section-inner">
            <section class="mine-content partners">
                <div class="partners-wrapper">
                    <div class="partners__title">Наши партнеры</div>
                    <div class="partners__logo">
                        @foreach($partner as $el)
                        <a href="{{$el->link_partner}}"  class="partners-logo__item"><img title="{{$el->data_title_partner}}"  src="/storage/image_partner/{{$el->image_partner}}" alt=""></a>
                        @endforeach                   
                    </div>
                    <div class="partners__callback">
                        <a href="{{route('support')}}" class="partners-call">
                            <div class="partners-call__image"><img src="./images/question.png" alt=""></div>
                            <div class="partners-call__subtitle">Хотите стать нашим партнером?
                                <br><span>Напишите нам,</span> обсудим условия сотрудничества!</div>
                        </a>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection