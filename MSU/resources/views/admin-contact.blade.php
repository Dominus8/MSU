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

<div class="mine-content admin-section__form">
                    <form action="/admin/create-contact" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-group"> 
                            <lable for="ci" class="form-label"> <h6>Изображение контакта</h6> </lable>
                            <p style="font-size:11px;"> 
                            </p>
                            <input id="ci" type="file" class="form-control" name='contact_image'> <br>

                            <lable for="cb" class="form-label"> <h6>Название контакта</h6>  </lable>
                            <textarea id="cb" type="text" class="form-control" name='contact_title' ></textarea> <br>

                            <lable for="cb" class="form-label"> <h6>Адрес контакта</h6>  </lable>
                            <textarea id="cb" type="text" class="form-control" name='contact_adress' ></textarea> <br>

                            <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
                            <input id="cp"  class="form-control" name="contact_phone"> <br>

                            <lable for="cm" class="form-label"> <h6>почта контакта</h6> </lable>
                            <input id="cm" type="email"  class="form-control" name="contact_mail"> <br>

                            <button class="btn btn-primary" type="sucsess"> Создать карточку контакта</button>
                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">
                    <!--Список существующих карточек-->
                    @foreach($contact as $el)
                        <div class="manage-element directions_card">
                            <img src="/storage/contacts_image/{{$el->contact_image}}" alt="img">
                            <h6>{{$el->contact_title}}</h6>
                            <a class='btn btn-warning' href="/edit-contact/{{$el->id}}">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-contact/{{$el->id}}">x</a>
                        </div>
                    @endforeach 
                </div>
@endsection