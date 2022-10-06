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

<h1>Обновление документа "О нас"</h1>

<!-- Карточка О нас -->

    <form action="{{route('update-about-doc',['id'=>$aboutdoc->id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
                <legend>Добавить документ</legend>
                    <div>
                        <lable for="adout_doc_file" class="form-label"> <h6>Файл документа</h6> </lable>
                            <p style="font-size:11px;"> 
                                Любой формат. (Картинка, архив, документ, PDF...) <br>
                                Если новый файл не выбрать, останется текущий.
                            </p>
                            <p>
                                <a href="/storage/adout_doc_file/{{$aboutdoc->adout_doc_file}}">Текущий файл, можно скачать.</a>
                            </p>
                        <input id="adout_doc_file" type="file" class="form-control" name='adout_doc_file'><br>

                        <lable for="adout_doc_title" class="form-label"> <h6>Отображаемое название документа</h6></lable>
                        <textarea id="adout_doc_title" class="form-control" name='adout_doc_title'>{{$aboutdoc->adout_doc_title}}</textarea><br>

                        <button class="btn btn-primary" type="sucsess">Обновить документ</button>
                    </div>
            </fieldset>
        </div>
    </form>

@endsection