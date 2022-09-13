@extends('admin-base')

@section('admin-content')
<h1>Управление продуктами</h1>

<div class="mine-content admin-section__form">
                    <form action="/admin/create-product" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Тип продукта</legend>
                                <div class="product-ico">
                                    <input type="radio" id="product-type1" name="product-type" value="product-type-1" checked>
                                    <label for="product-ico1">Программный продукт </label>
                                </div>

                                <div class="product-ico">
                                    <input type="radio" id="product-type2" name="product-type" value="product-type-2">
                                    <label for="product-type2">Программно-аппаратные продукты</label>
                                </div>
                            </fieldset>
                            <br>
                            <hr>
                            <br>
                            <fieldset>
                                <!--Для выбора иконки продукта в меню-->
                                <legend>Иконка для меню</legend>

                                <lable for="single-page-bico" class="form-label"> <h6>Иконка чёрная</h6></lable>
                                <input id="single-page-bico" type="file" class="form-control" name='single-page-bico'><br>

                                <lable for="single-page-gico" class="form-label"> <h6>Иконка зелёная</h6></lable>
                                <input id="single-page-gico" type="file" class="form-control" name='single-page-gico'><br>

                                <!--Название пункта в меню продуктов-->
                                <lable for="nt" class="form-label"> <h6>Название в пункте меню</h6></lable>
                                <input id="nt"  class="form-control" name="nav-title"><br>
                            </fieldset>
                            <br>
                            <hr>
                            <br>

                            <fieldset>
                                <legend>Продукт на странице продукта</legend>

                                <lable for="b-single-page-title" class="form-label"> <h6>Заголовок чёрный текст</h6> </lable>
                                <input id="b-single-page-title"  class="form-control" name="b-single-page-title"><br>

                                <lable for="g-single-page-title" class="form-label"> <h6>Заголовок зелёный текст</h6> </lable>
                                <input id="g-single-page-title"  class="form-control" name="g-single-page-title"><br>

                                <lable for="single-page-slides" class="form-label"> <h6>Изображение для слайдера на странице</h6></lable>
                                <input id="single-page-slides" type="file" multiple class="form-control" name='single-page-slides'><br>

                                <lable for="single-page-sudtitle" class="form-label"><h6>Описание</h6></lable>
                                <textarea id="single-page-sudtitle" type="text" class="form-control" name='single-page-sudtitle'></textarea><br>

                                <lable for="single-page-purpose" class="form-label"> <h6>Назначение</h6></lable>
                                <textarea id="single-page-purpose" type="text" class="form-control" name='single-page-purpose'></textarea><br>
                            
                                <h6>Добавить параметры</h6>
                                <div id="parameters-wrapper"  class="single-page-parameters-wrapper">
                                    <div class="single-page-parameters-item">
                                        <input id="single-page-parameters"  class="form-control" name="single-page-parameters" placeholder="Название параметра">
                                        <input id="single-page-parameters"  class="form-control" name="single-page-parameters" placeholder="Значение параметра">
                                    </div>    
                                </div>
                                <br>
                                <div id="plus-parameter" class="btn btn-success">+</div> <div id="minus-parameter" class="btn btn-danger">-</div>
                                <br>
                                <br>
                                <div class="single-page-documents-wrapper">
                                    <lable for="single-page-documents" class="form-label"> <h6>Добавить документы</h6></lable>
                                    <input id="single-page-documents" type="file"  multiple class="form-control" name='single-page-documents'><br>
                                    
                                </div>
                            </fieldset>

                            <!-- <lable for="ci" class="form-label"> <h6>Изображение контакта</h6></lable>
                            <input id="ci" type="file" class="form-control" name='contact_image'><br>

                            <lable for="ci" class="form-label"> <h6>Изображение контакта</h6></lable>
                            <input id="ci" type="file" class="form-control" name='contact_image'><br>

                            <lable for="cb" class="form-label"> <h6>Название контакта</h6> </lable>
                            <textarea id="cb" type="text" class="form-control" name='contact_title'></textarea><br>

                            <lable for="cb" class="form-label"> <h6>Адрес контакта</h6> </lable>
                            <textarea id="cb" type="text" class="form-control" name='contact_adress'></textarea><br>

                            <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
                            <input id="cp"  class="form-control" name="contact_phone"><br>

                            <lable for="cm" class="form-label"> <h6>почта контакта</h6></lable>
                            <input id="cm" type="email"  class="form-control" name="contact_mail"><br> -->

                            <button class="btn btn-primary" type="sucsess">Создать продукт</button>
                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">

                </div>

@endsection