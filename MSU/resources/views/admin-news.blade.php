@extends('admin-base')

@section('admin-content')
<h1>Управление новостями</h1>
@if ($errors->any())
    <div class="fixed-top alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="mine-content admin-section__form">
                    <form action="/admin/create-news" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление новости</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="thumbnail-news" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span>Превью для новости</h6></lable>
                                        <p style="font-size:11px;"> 
                                            345х175 любой формат
                                        </p>
                                        <input id="thumbnail-news" type="file" class="form-control" name='thumbnail_news'><br>
                                        
                                        <lable for="image-news" class="form-label"> <h6>Изображение для новости</h6></lable>
                                        <input id="image-news" type="file" class="form-control" name='image_news'><br>

                                        <lable for="b-title-news" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Заголовок - чёрный текст</h6></lable>
                                        <input id="b-title-news"  class="form-control" name="b_title_news"><br>
                                        
                                        <lable for="g-title-news" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Заголовок - зелёный текст</h6></lable>
                                        <input id="g-title-news"  class="form-control" name="g_title_news"><br>

                                        <lable for="subtitle-news" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Краткое описание</h6></lable>
                                        <p style="font-size:11px;"> 
                                            180 символов с пробелами(Если болье, будет ошибка)
                                        </p>
                                        <textarea id="subtitle-news" type="text" class="form-control" name='subtitle_news'></textarea><br>
                                        <p style="font-size:11px;">
                                            Текст. Для форматированииспользовать: <br>
                                            &lt;br&gt; - перенос строки (Ставится в текст в место переноса, можно нескоько подряд) <br>
                                            &lt;span class = "Сюда нужный класс, можно сразу несколько чрез пробел"&gt;Сюда текс&lt;/span&gt; <br>
                                                Список слассов: <br>
                                                green - Сделать текст зелёным. <br>
                                                bold - Cделать текст "жирным" <br>
                                                Пример:<br>
                                                &lt;span class = "green bold"&gt;Зелёный, жирный текст&lt;/span&gt;
                                        </p>
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