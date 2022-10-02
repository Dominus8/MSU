@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-contacts">
        <section class="section-inner">
            <section class="mine-content contacts">
                <div class="contacts-wrapper">
                    <div class="contacts-title">Контакты</div>
                    <div class="contacts-main">
                        <div class="contacts-main__title">
                            <div class="contacts-main__title-werapper">
                                <div class="contacts-main__title-mark">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="contacts-main__title-text">Главный офис</div>
                            </div>
                        </div>
                        <div class="contacts-main__address">Адрес: <span>г. Красноярск, ул. Ленина, д. 53, строение 1</span> </div>
                        <div class="contacts-main_email">Напишите нам: <span>info@msu24.ru</span> </div>
                        <div class="contacts-main__phone">Позвоните нам: <span>+7 (391) 27-24-24-0</span> </div>
                    </div>
                    <div class="contacts-map">
                        <!-- <img src="./images/contacts_map.png" alt=""> -->
                        <object class="contacts-map-svg" type="image/svg+xml" data="./images/contacts_map.svg"></object>

                    </div>
                    <div class="contacts-regional-offices">
                        @if(count($contact)>=1)
                        <div class="contacts-regional-offices__title">
                            <div class="contacts-regional-offices__title-wrapper">
                                <div class="contacts-regional-offices__title-mark">
                                    <img src="/images/green-mark.png" alt="">
                                </div>
                                <div class="contacts-regional-offices__title-text">Региональные представительства</div>
                            </div>
                        </div>
                        <div class="contacts-regional-offices__cards-wrapper">
                            @foreach($contact as $el)
                            <div class="contacts-regional-offices__card">
                                    <div class="offices-card-wrapper">
                                        <div class="offices-card__image">
                                            <img src="/storage/contacts_image/{{$el->contact_image}}" alt="Региональное представительство">
                                        </div>
                                        <div class="offices-card__text">
                                            <div class="offices-card__title">{{$el->contact_title}}</div>
                                            <div class="offices-card__address">{{$el->contact_adress}}</div>
                                            <div class="offices-card__phone">{{$el->contact_phone}}</div>
                                            <div class="offices-card__email">{{$el->contact_mail}}</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection