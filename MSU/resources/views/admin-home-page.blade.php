@extends('admin-base')

@section('admin-content')
<h1>Управление продуктами</h1>

<div class="mine-content admin-section__form">
                    <form action="/admin/create-product" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление продукта в слайдер на главной</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="imade-mine-slide" class="form-label"> <h6>Изображение для слайдера на главной</h6></lable>
                                        <input id="imade-mine-slide" type="file" class="form-control" name='imade-mine-slide'><br>

                                        <lable for="b-title-mine-slide" class="form-label"> <h6>Название чёрный текст</h6></lable>
                                        <input id="b-title-mine-slide"  class="form-control" name="b-title-mine-slide"><br>
                                        
                                        <lable for="g-title-mine-slide" class="form-label"> <h6>Название зелёный текст</h6></lable>
                                        <input id="g-title-mine-slide"  class="form-control" name="g-title-mine-slide"><br>

                                        <lable for="subtitle-mine-slide" class="form-label"> <h6>Описание для главного слайдера</h6></lable>
                                        <textarea id="subtitle-mine-slide" type="text" class="form-control" name='subtitle-mine-slide'></textarea><br>
                                        
                                        <lable for="link-mine-slide" class="form-label"> <h6>Продукт для кнопки</h6></lable>
                                        <select id="link-mine-slide" class="form-control" name="link-mine-slide">
                                            <option value="s1">Чебурашка</option>
                                            <option value="s2" selected>Крокодил Гена</option>
                                            <option value="s3">Шапокляк</option>
                                            <option value="s3" >Крыса Лариса</option>
                                        </select> 
                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Добавить слайд</button>
                                    </div>
                                    
                            </fieldset>


                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">

                </div>

@endsection