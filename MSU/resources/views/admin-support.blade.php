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
                    <form action="/admin/create-warranty" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление гарантийного талона</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="file-warranty" class="form-label"> <h6>Файл талона</h6></lable>
                                        <input id="file-warranty" type="file" class="form-control" name='file_warranty'><br>

                                        <lable for="title-warranty" class="form-label"> <h6>Отображаемое название талона</h6></lable>
                                        <input id="title-warranty"  class="form-control" name="title_warranty"><br>

                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Добавить гарантийного талона</button>
                                    </div>
                            </fieldset>
                        </div>
                    </form>
                    <br>
                    <br>
                    <form action="/admin/create-manual" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление инструкции</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="file-manual" class="form-label"> <h6>Файл инструкции</h6></lable>
                                        <input id="file-manual" type="file" class="form-control" name='file_manual'><br>

                                        <lable for="title-manual" class="form-label"> <h6>Отображаемое название инструкции</h6></lable>
                                        <input id="title-manual"  class="form-control" name="title_manual"><br>


                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Добавить инструкцию</button>
                                    </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">
                    <!--Список существующих карточек-->
                    @foreach($warranty as $el)
                        <div class="manage-element directions_card">
                            <h6>{{$el->title_warranty}}</h6>
                            <a class='btn btn-warning' href="#">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-warranty/{{$el->id}}">x</a>
                        </div>
                    @endforeach 

                </div>
                <div class="admin-section__manage">
                    <!--Список существующих карточек-->
                    @foreach($manual as $el)
                        <div class="manage-element directions_card">
                            <h6>{{$el->title_manual}}</h6>
                            <a class='btn btn-warning' href="#">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-manual/{{$el->id}}">x</a>
                        </div>
                    @endforeach 

                </div>


@endsection