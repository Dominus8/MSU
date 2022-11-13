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

<!---------------------------------------------------------------------------------->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContactCard">
  Добавить карточку контакта
</button>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#chengePrymaryContact">
  Изменить данные основного контакта
</button>

<!-- Modal -->
<div class="modal fade" id="addContactCard" tabindex="-1" role="dialog" aria-labelledby="addContactCard" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addContactCard">Создать карточку контакта</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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

                    <button class="btn btn-primary" type="sucsess">Создать карточку контакта</button>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="chengePrymaryContact" tabindex="-1" role="dialog" aria-labelledby="chengePrymaryContact" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chengePrymaryContact">Создать карточку контакта</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mine-content admin-section__form">
            <div class="curent-primary-contact-image">
            @if(isset($primarycontact->prymary_contact_image))
                <img style="width:250px;" src="/storage/contacts_image/{{$primarycontact->prymary_contact_image}}" alt="">
            @endif
            </div>
            <form action="/admin/update-prymary-contact" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <div class="form-group"> 
                    @if(isset($primarycontact->prymary_contact_adress))
                    <lable for="pcb" class="form-label"> <h6>Адрес основного контакта</h6>  </lable>
                    <input id="pcb" type="text" class="form-control" name='prymary_contact_adress' value="{{$primarycontact->prymary_contact_adress}}" > <br>
                    
                    <lable for="pcm" class="form-label"> <h6>Почта основного контакта</h6> </lable>
                    <input id="pcm" type="email"  class="form-control" name="prymary_contact_mail" value="{{$primarycontact->prymary_contact_mail}}"> <br>
                    
                    <lable for="pcp" class="form-label"> <h6>Телефон основоного контакта</h6> </lable>
                    <input id="pcp"  class="form-control" name="prymary_contact_phone" value="{{$primarycontact->prymary_contact_phone}}"> <br>
                    
                    <lable for="pci" class="form-label"> <h6>Изображение основоного контакта</h6> </lable>
                    <input id="pci" type="file" class="form-control" name='prymary_contact_image'> <br>
                    @else
                    <lable for="pcb" class="form-label"> <h6>Адрес основного контакта</h6>  </lable>
                    <input id="pcb" type="text" class="form-control" name='prymary_contact_adress' > <br>
                    
                    <lable for="pcm" class="form-label"> <h6>Почта основного контакта</h6> </lable>
                    <input id="pcm" type="email"  class="form-control" name="prymary_contact_mail"> <br>
                    
                    <lable for="pcp" class="form-label"> <h6>Телефон основоного контакта</h6> </lable>
                    <input id="pcp"  class="form-control" name="prymary_contact_phone"> <br>
                    
                    <lable for="pci" class="form-label"> <h6>Изображение основоного контакта</h6> </lable>
                    <input id="pci" type="file" class="form-control" name='prymary_contact_image'> <br>
                    @endif

                    <button class="btn btn-primary" type="sucsess">Обновить основной контакт</button>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<br>
<br>
<!---------------------------------------------------------------------------------->

        <h5>Существующие карточки контактов</h5>
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