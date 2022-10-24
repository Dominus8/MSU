@extends('base')

@section('content')
    <!-- main-content -->
    <section class="section-outer section-support">
        <section class="section-inner">
            <section class="mine-content support">
                <div class="support-wrapper">
                    <div class="support-content">
                        <div class="support-title">Поддержка</div>
                        <div class="warranty-cards">
                            <!---Название раздела с талонами--->
                            <div class="warranty-cards__title-wrapper">
                                <div class="warranty-cards__title-mark">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="warranty-cards__title-text">Гарантийные талоны</div>
                            </div>
                            @foreach($warranty as $el)
                            <a href="/storage/document_support/{{$el->file_warranty}}" class="warranty-cards__element">
                                <div class="warranty-cards__element-mark">
                                    <img src="./images/doc_icon.png" alt="">
                                </div>
                                <div class="warranty-cards__element-title">{{$el->title_warranty}} [{{pathinfo($el->file_warranty)['extension']}}]</div>
                            </a>
                            @endforeach
                        </div>
                        <div class="support-manuals">
                            <div class="support-manuals__title-wrapper">
                                <div class="support-manuals__title-mark">
                                    <img src="./images/green-mark.png" alt="">
                                </div>
                                <div class="support-manuals__title-text">Инструкции к ПО</div>
                            </div>
                            @foreach($manual as $el)
                            <a href="/storage/document_support/{{$el->file_manual}}" class="support-manuals__element">
                                <div class="support-manuals__element-mark">
                                    <img src="./images/doc_icon.png" alt="">
                                </div>
                                <div class="support-manuals__element-title">{{$el->title_manual}} [{{pathinfo($el->file_manual)['extension']}}]</div>
                            </a>
                            @endforeach
                            <!-- <div class="support-manuals__element">
                                <div class="support-manuals__element-mark">
                                    <img src="./images/doc_icon.png" alt="">
                                </div>
                                <div class="support-manuals__element-title">Инструкция по использованию [doc]</div>
                            </div>
                            <div class="support-manuals__element">
                                <div class="support-manuals__element-mark">
                                    <img src="./images/doc_icon.png" alt="">
                                </div>
                                <div class="support-manuals__element-title">Инструкция по использованию [doc]</div>
                            </div>
                            <div class="support-manuals__element">
                                <div class="support-manuals__element-mark">
                                    <img src="./images/doc_icon.png" alt="">
                                </div>
                                <div class="support-manuals__element-title">Инструкция по использованию [doc]</div>
                            </div>
                            <div class="support-manuals__element">
                                <div class="support-manuals__element-mark">
                                    <img src="./images/doc_icon.png" alt="">
                                </div>
                                <div class="support-manuals__element-title">Инструкция по использованию [doc]</div>
                            </div> -->
                        </div>
                    </div>
                    <div class="support-feedback">
                        <div class="feedback-message">
                            <div class="feedback-message__image"><img src="./images/question.png" alt=""></div>
                            <div class="feedback-message__text-wrapper">
                                <div class="feedback-message__title">Остались вопросы?</div>
                                <div class="feedback-message__subtitle"><span class="green">Напишите нам</span>, мы поможем!</div>
                            </div>
                        </div>
                        <div class="feedback-form">
                            <form action="/admin/feedback" method="post">
                                <input class="feedback-name" type="text" name="feedback-name" placeholder="Имя" id="">
                                <input class="feedback-phone" type="tel" name="feedback-phone" placeholder="Телефон" id="">
                                <input class="feedback-email" type="email" name="feedback-email" placeholder="e-mail" id="">
                                <textarea class="feedback-message" name="feedback-message" placeholder="Сообщение" id="" cols="30" rows="6"></textarea>
                                <input class="feedback-submit" type="submit"  value="Отправить">

                            </form>
                        </div>
                        <div class="feedback-footer">
                            Отправляя заявку, Вы соглашаетесь на обработку персональных данных и политики конфиденц-сти
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <!-- /main-content -->
@endsection
