@extends('admin-base')

@section('admin-content')
<h1>Управление слайдами</h1>

<div class="mine-content admin-section__form">
                    <form action="/admin/create-news" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление новости</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="thumbnail-news" class="form-label"> <h6>Превью для новости</h6></lable>
                                        <input id="thumbnail-news" type="file" class="form-control" name='thumbnail_news'><br>
                                        
                                        <lable for="image-news" class="form-label"> <h6>Изображение для новости</h6></lable>
                                        <input id="image-news" type="file" class="form-control" name='image_news'><br>

                                        <lable for="b-title-news" class="form-label"> <h6>Заголовок - чёрный текст</h6></lable>
                                        <input id="b-title-news"  class="form-control" name="b_title_news"><br>
                                        
                                        <lable for="g-title-news" class="form-label"> <h6>Заголовок - зелёный текст</h6></lable>
                                        <input id="g-title-news"  class="form-control" name="g_title_news"><br>

                                        <lable for="subtitle-news" class="form-label"> <h6>Краткое описание</h6></lable>
                                        <textarea id="subtitle-news" type="text" class="form-control" name='subtitle_news'></textarea><br>

                                        <lable for="top-text-news" class="form-label"> <h6>Верхняя часть текста (Над картинкой в мобильной версии)</h6></lable>
                                        <textarea id="top-text-news" type="text" class="form-control" name='top_text_news'></textarea><br>

                                        <lable for="bottom-text-news" class="form-label"> <h6>Нижняя часть текста (мод картинкой в модильной версии)</h6></lable>
                                        <textarea id="bottom-text-news" type="text" class="form-control" name='bottom_text_news'></textarea><br>

                                        <fieldset>
                                            <h5 class="btn btn-primary" id='external-link-visable'>Добавить внешнюю ссылку </h5>
                                            
                                            <div class="external-link" style="display:none;" >
                                                <lable for="elink-text-news" class="form-label"> <h6>Текст внешней ссылки</h6></lable>
                                                <input id="elink-text-news"  class="form-control" name="elink_text_news"><br>
    
                                                <lable for="elink-link-news" class="form-label"> <h6>Адресс внешней ссылки</h6></lable>
                                                <input id="elink-link-news"  class="form-control" name="elink_link_news"><br>
                                            </div>

                                        </fieldset>
                                        <hr>
                                        <fieldset>
                                            <h5>Мета для новости</h5>
                                            <lable for="description-news" class="form-label"> <h6>Description (Не обязательно)</h6></lable>
                                            <textarea id="description-news" type="text" class="form-control" name='description_news'></textarea><br>

                                            <lable for="keywords-news" class="form-label"> <h6>Keywords (Не обязательно. Отдельные слова через запятую)</h6></lable>
                                            <textarea id="keywords-news" type="text" class="form-control" name='keywords_news'></textarea><br>
                                        </fieldset>

                                        <lable for="date-news" class="form-label"> <h6>Дата</h6></lable>
                                        <input id="date-news" type="date"  class="form-control" name="date_news"><br>

                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Добавить новость</button>
                                    </div>
                            </fieldset>

                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">
                    <!--Список существующих карточек-->
                    @foreach($news as $el)
                        <div class="manage-element directions_card">
                            <img src="/storage/image_news/{{$el->thumbnail_news}}" alt="img">
                            <h6>{{$el->b_title_news}}</h6>
                            <a class='btn btn-warning' href="/edit-news/{{$el->id}}">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-news/{{$el->id}}">x</a>
                        </div>
                    @endforeach 
                </div>


@endsection