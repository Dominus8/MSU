@extends('admin-base')


@section('admin-content')

<div class="admin-section__form">
    <form action="/admin/update-contact/{{$contact->id}}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="form-group"> 
            <lable for="ci" class="form-label"> <h6>Изображение контакта</h6>  </lable>
            <input id="ci" type="file" class="form-control" name='contact_image'> <br>

            <lable for="cb" class="form-label"> <h6>Название контакта</h6>  </lable>
            <textarea id="cb" type="text" class="form-control" name='contact_title'>{{$contact->contact_title}}</textarea> <br>

            <lable for="cb" class="form-label"> <h6>Адрес контакта</h6>  </lable>
            <textarea id="cb" type="text" class="form-control" name='contact_adress'>{{$contact->contact_adress}}</textarea> <br>

            <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
            <input id="cp"  class="form-control" name="contact_phone" value='{{$contact->contact_phone}}'> <br>

            <lable for="cm" class="form-label"> <h6>почта контакта</h6> </lable>
            <input id="cm" type="email"  class="form-control" name="contact_mail" value='{{$contact->contact_mail}}'> <br>

            <button class="btn btn-primary" type="sucsess"> Обновить карточку контакта</button>
        </div>
    </form>
</div>
@endsection


