@extends('admin-base')

@section('admin-content')
<h1>Управление проектами</h1>
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
                    <form action="/admin/create-project" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление проекта</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="thumbnail-project" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Превью для проекта</h6></lable>
                                        <p style="font-size:11px;"> 
                                            345х175 любой формат.
                                        </p>
                                        <input id="thumbnail-project" type="file" class="form-control" name='thumbnail_project'><br>
                                        
                                        <lable for="image-project" class="form-label"> <h6>Изображениея для слфйдов</h6></lable>
                                        <p style="font-size:11px;"> 
                                            885х450 любой формат.
                                        </p>
                                        <input id="image-project" multiple type="file" class="form-control" name='image_project[]'><br>

                                        <lable for="b-title-project" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Заголовок - чёрный текст</h6></lable>
                                        <input id="b-title-project"  class="form-control" name="b_title_project"><br>
                                        
                                        <lable for="g-title-project" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Заголовок - зелёный текст</h6></lable>
                                        <input id="g-title-project"  class="form-control" name="g_title_project"><br>

                                        <lable for="subtitle-project" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Краткое описание</h6></lable>
                                        <textarea id="subtitle-project" type="text" class="form-control" name='subtitle_project'></textarea><br>

                                        <lable for="full-text-project" class="form-label"> <h6>Полный текст проекта</h6></lable>
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
                                        <textarea id="full-text-project" type="text" class="form-control" name='full_text_project'></textarea><br>

                                        <fieldset>
                                            <h5 class="btn btn-primary" id='external-link-visable'>Добавить внешнюю ссылку</h5>
                                            <div class="external-link" style="display:none;">
                                            <input style="display:none;" id="links-to-send" name="links-to-send" >
                                            <p style="font-size:11px;"> 
                                                Добавить нужное количество полей, заполнить, и нажать "Записать"
                                            </p>
                                                <div class="link-wrapper">
                                                    <div class="link-item-wrapper">
                                                        <div class="link-item input-group mb-3">
                                                            <input id="elink-text-project" placeholder="Текст внешней ссылки" aria-label="Текст внешней ссылки" class="form-control elink-item" name="elink_text_project"><br>
                                                            <span class="input-group-text"><-></span>
                                                            <input id="elink-link-project" placeholder="Адресс внешней ссылки" aria-label="Адресс внешней ссылк" class="form-control elink-item" name="elink_link_project"><br>
                                                        </div>
                                                    </div>
                                                    <div id="projectLinc-plus" class="btn btn-success">+</div> <div id="projectLinc-minus" class="btn btn-danger">-</div> <div id="projectLinc-write" class="btn btn-primary">Записать</div>
                                                </div>
                                            </div>

                                        </fieldset>
                                        <lable for="document-project" class="form-label"> <h6>Документы проекта</h6></lable>
                                            <p style="font-size:11px;"> 
                                                Добавляются сразу "пачкой". Названия для отображения берутся из названий файлов.
                                            </p>
                                        <input id="document-project" type="file" multiple class="form-control" name='document_project[]'><br>
                                        <hr>
                                        <fieldset>
                                            <h5>Мета для проекта</h5>
                                            <lable for="description-project" class="form-label"> <h6>Description (Не обязательно)</h6></lable>
                                            <textarea id="description-project" type="text" class="form-control" name='description_project'></textarea><br>

                                            <lable for="keywords-project" class="form-label"> <h6>Keywords (Не обязательно. Отдельные слова через запятую)</h6></lable>
                                            <textarea id="keywords-project" type="text" class="form-control" name='keywords_project'></textarea><br>
                                        </fieldset>
                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Добавить проект</button>
                                    </div>
                            </fieldset>

                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">
                    <!--Список существующих карточек-->
                    @foreach($project as $el)
                        <div class="manage-element directions_card">
                            <img src="/storage/image_project/{{$el->thumbnail_project}}" alt="img">
                            <h6>{{$el->b_title_project}} {{$el->g_title_project}}</h6>
                            <a class='btn btn-warning' href="/admin/edit-project/{{$el->id}}">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-project/{{$el->id}}">x</a>
                        </div>
                    @endforeach 
                </div>


@endsection