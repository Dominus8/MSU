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
                    <form action="/admin/update-warranty/{{$warranty->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление гарантийного талона</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="file-warranty" class="form-label"> <h6>Файл талона</h6></lable>
                                        <p>
                                            Текущий файл, можно скачать. <br>
                                            <a href="/storage/document_support/{{$warranty->file_warranty}}">{{$warranty->title_warranty}}</a>
                                        </p>
                                        <input id="file-warranty" type="file" class="form-control" name='file_warranty'><br>

                                        <lable for="title-warranty" class="form-label"> <h6>Отображаемое название талона</h6></lable>
                                        <input id="title-warranty"  class="form-control" name="title_warranty" value="{{$warranty->title_warranty}}"><br>

                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Обновить гарантийного талона</button>
                                    </div>
                            </fieldset>
                        </div>
                    </form>
                </div>

@endsection