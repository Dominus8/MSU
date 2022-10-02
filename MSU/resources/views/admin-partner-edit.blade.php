@extends('admin-base')

@section('admin-content')
<h1>Обновление карточки партнёра</h1>
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
                    <form action="/admin/update-partner/{{$partner->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Обновление карточки партнёра</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="image-partner" class="form-label"> <h6>Лого партнёра</h6></lable>
                                        <br>
                                        
                                        <h6>Текущий логотип</h6>
                                        <img style="max-width:100px;" src="/storage/image_partner/{{$partner->image_partner}}" alt="">
                                        <br>
                                        <br>
                                        <p>Если новый логотип не выбрать, останется текущий</p>
                                        <input id="image-partner" type="file" class="form-control" name='image_partner'><br>

                                        <lable for="link-partner" class="form-label"> <h6>Ссылка на партнёра/ Добавлять только с "http://" перед именем домена (не обязательно)</h6></lable>
                                        <input id="link-partner"  class="form-control" value="{{$partner->link_partner}}" name="link_partner"><br>
                                        
                                        <lable for="data-title-partner" class="form-label"> <h6>Текст свплывающий при наведении на карточку (не обязательно, не больше 255 символов.)</h6></lable>
                                        <input id="data-title-partner"  class="form-control" value="{{$partner->data_title_partner}}" name="data_title_partner"><br>

                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Обновить карточку партнёра</button>
                                    </div>
                            </fieldset>
                        </div>
                    </form>
                </div>

@endsection