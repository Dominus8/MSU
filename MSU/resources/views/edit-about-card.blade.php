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

<h1>Обновить карточку О нас</h1>


<!-- Карточка О нас -->

    <form action="/admin/update-about-card/{{$aboutcard->id}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <fieldset>
                    <div>
                        <lable for="adout_card_image" class="form-label"> <h6>Изображение карточки</h6> </lable>
                        <p style="font-size:11px;"> 
                            230х60 любой формат. <br>
                            Если не заменить изображение, останется текущее.
                        </p>
                        <div class="current-about-card-image">
                            <p>Текущее изображение</p>
                            <img src="/storage/adout_card_image/{{$aboutcard->adout_card_image}}" alt="img">
                        </div>
                        <br>
                        <input id="adout_card_image" type="file" class="form-control" name='adout_card_image'><br>

                        <lable for="adout_card_text" class="form-label"> <h6> </h6></lable>
                        <p style="font-size:11px;"> 
                            Текст. По макеты три строки, около 130 символов (с пробелами). Можно больше - карточка станеш выше.
                        </p>
                        <textarea id="adout_card_text" class="form-control" name='adout_card_text'>{{$aboutcard->adout_card_text}}</textarea><br>

                        <lable for="adout_card_date" class="form-label"> <h6>Дата</h6> </lable>
                        <input id="adout_card_date" type="date" class="form-control" name='adout_card_date' value="{{$aboutcard->adout_card_date}}"><br>

                        <button class="btn btn-primary" type="sucsess">Обновить карточку</button>
                    </div>
            </fieldset>
        </div>
    </form>
</div>

@endsection