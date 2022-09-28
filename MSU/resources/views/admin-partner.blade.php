@extends('admin-base')

@section('admin-content')
<h1>Управление проектами</h1>

<div class="mine-content admin-section__form">
                    <form action="/admin/create-partner" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление карточки партнёра</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="image-partner" class="form-label"> <h6>Лого партнёра</h6></lable>
                                        <input id="image-partner" type="file" class="form-control" name='image_partner'><br>

                                        <lable for="link-partner" class="form-label"> <h6>Ссылка на партнёра/ Добавлять только с "http://" перед именем домена (не обязательно)</h6></lable>
                                        <input id="link-partner" value="http://"  class="form-control" name="link_partner"><br>
                                        
                                        <lable for="data-title-partner" class="form-label"> <h6>Текст свплывающий при наведении на карточку (не обязательно)</h6></lable>
                                        <input id="data-title-partner"  class="form-control" name="data_title_partner"><br>

                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Добавить карточку партнёра</button>
                                    </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">
                    <!--Список существующих карточек-->
                    @foreach($partner as $el)
                        <div class="manage-element directions_card">
                            <img src="/storage/image_partner/{{$el->image_partner}}" alt="img">
                            <h6>{{$el->link_partner}}</h6>
                            <a class='btn btn-warning' href="/admin/edit-partner/{{$el->id}}">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-partner/{{$el->id}}">x</a>
                        </div>
                    @endforeach 
                </div>


@endsection