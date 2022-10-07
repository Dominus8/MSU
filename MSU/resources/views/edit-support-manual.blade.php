@extends('admin-base')

@section('admin-content')
<h1>Управление поддержкой</h1>
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
    <form action="/admin/update-manual/{{$manual->id}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
                <legend>Добавление инструкции</legend>
                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                        <lable for="file-manual" class="form-label"> <h6>Файл инструкции</h6></lable>
                        <p>
                            Текущий файл, можно скачать. <br>
                            <a href="/storage/document_support/{{$manual->file_manual}}">{{$manual->title_manual}}</a>
                        </p>
                        <input id="file-manual" type="file" class="form-control" name='file_manual'><br>

                        <lable for="title-manual" class="form-label"> <h6>Отображаемое название инструкции</h6></lable>
                        <input id="title-manual"  class="form-control" name="title_manual" value="{{$manual->title_manual}}"><br>

                        <hr>
                        <button class="btn btn-primary" type="sucsess">Обновить инструкцию</button>
                    </div>
            </fieldset>
        </div>
    </form>
</div>

@endsection