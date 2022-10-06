@extends('admin-base')

@section('admin-content')
@if ($errors->any())
    <div class="fixed-top alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Управление страницей "О нас"</h1>

<div class="mine-content admin-section__form">
<!-- Текст подзаголовка -->
    <form action="{{route('change-adout-subtitle')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
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
                <legend>Обновить подзаголовок</legend>
                    <div>
                        <lable for="about_subtitle" class="form-label"> <h6> </h6></lable>
                        <textarea id="about_subtitle" class="form-control" name='about_subtitle'>{{$abouttext->about_subtitle}}</textarea><br>

                        <button class="btn btn-primary" type="sucsess">Изменить текст</button>
                    </div>
            </fieldset>
        </div>
    </form> <br>

<!-- Карточка О нас -->

    <form action="{{route('create-adout-card')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
                <legend>Карточка о нас</legend>
                    <div>
                        <lable for="adout_card_image" class="form-label"> <h6>Изображение карточки</h6> </lable>
                        <p style="font-size:11px;"> 
                            230х60 любой формат
                        </p>
                        <input id="adout_card_image" type="file" class="form-control" name='adout_card_image'><br>

                        <lable for="adout_card_text" class="form-label"> <h6> </h6></lable>
                        <p style="font-size:11px;"> 
                            Текст. По макеты три строки, около 130 символов (с пробелами). Можно больше - карточка станеш выше.
                        </p>
                        <textarea id="adout_card_text" class="form-control" name='adout_card_text'></textarea><br>

                        <lable for="adout_card_date" class="form-label"> <h6>Дата</h6> </lable>
                        <input id="adout_card_date" type="date" class="form-control" name='adout_card_date'><br>

                        <button class="btn btn-primary" type="sucsess">Создать карточку</button>
                    </div>
            </fieldset>
        </div>
    </form>
</div>
<div class="admin-section__manage">
        @foreach($aboutcard as $el)
            <div class="manage-element directions_card">
                <img src="/storage/adout_card_image/{{$el->adout_card_image}}" alt="img">
                <h6>{{$el->contact_title}}</h6>
                <a class='btn btn-warning' href="/admin/edit-about-card/{{$el->id}}">edit</a>
                <a class='btn btn-danger' href="/admin/dell-about-card/{{$el->id}}">x</a>
            </div>
        @endforeach 
</div>

<!-- Карточка О нас -->

    <form action="{{route('create-adout-doc')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
                <legend>Добавить документ</legend>
                    <div>
                        <lable for="adout_doc_file" class="form-label"> <h6>Файл документа</h6> </lable>
                            <p style="font-size:11px;"> 
                                Любой формат. (Картинка, архив, документ, PDF...)
                            </p>
                        <input id="adout_doc_file" type="file" class="form-control" name='adout_doc_file'><br>

                        <lable for="adout_doc_title" class="form-label"> <h6>Отображаемое название документа</h6></lable>
                        <textarea id="adout_doc_title" class="form-control" name='adout_doc_title'></textarea><br>

                        <button class="btn btn-primary" type="sucsess">Добавить документ</button>
                    </div>
            </fieldset>
        </div>
    </form>
</div>
<div class="admin-section__manage">
        @foreach($aboutdoc as $el)
            <div class="manage-element directions_card">
                <h6>{{$el->adout_doc_title}}</h6>
                <a class='btn btn-warning' href="{{route('edit-about-doc',['id'=>$el->id])}}">edit</a>
                <a class='btn btn-danger' href="/admin/dell-about-doc/{{$el->id}}">x</a>
            </div>
        @endforeach 
</div>

@endsection