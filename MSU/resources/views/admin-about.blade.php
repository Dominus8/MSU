@extends('admin-base')

@section('admin-content')
<h1>Управление страницей "О нас"</h1>

<div class="mine-content admin-section__form">
<!-- Текст подзаголовка -->
    <form action="{{route('change-adout-subtitle')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
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
                <legend>Добавить карточку</legend>
                    <div>
                        <lable for="adout_card_image" class="form-label"> <h6>Изображение контакта</h6> </lable>
                        <input id="adout_card_image" type="file" class="form-control" name='adout_card_image'><br>

                        <lable for="adout_card_text" class="form-label"> <h6> </h6></lable>
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
                <a class='btn btn-warning' href="/edit-about-card/{{$el->id}}">edit</a>
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
                <a class='btn btn-warning' href="/edit-about-doc/{{$el->id}}">edit</a>
                <a class='btn btn-danger' href="/admin/dell-about-doc/{{$el->id}}">x</a>
            </div>
        @endforeach 
</div>

@endsection