@extends('admin-base')

@section('admin-content')
<h1>Управление продуктами</h1>

<div class="mine-content admin-section__form">
                    <form action="/admin/create-product" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Иконка для меню</legend>
                                <div>
                                    <div class="product-ico">
                                        <input type="radio" id="product-ico1"
                                        name="product-ico" value="product-ico-1" checked>
                                        <label for="product-ico1"><img src="./images/coord_ico.png" alt=""></label>
                                    </div>

                                    <div class="product-ico">

                                        <input type="radio" id="product-ico2"
                                        name="product-ico" value="product-ico-2">
                                        <label for="product-ico2"><img src="./images/config_ico.png" alt=""></label>
                                    </div>
                                    <div class="product-ico">
                                        
                                        <input type="radio" id="product-ico3"
                                        name="product-ico" value="product-ico-3">
                                        <label for="product-ico3"><img src="./images/get_ico.png" alt=""></label>
                                        </div>
                                    <div class="product-ico">
                                        
                                        <input type="radio" id="product-ico3"
                                        name="product-ico" value="product-ico-4">
                                        <label for="product-ico4"><img src="./images/admin_ico.png" alt=""></label>
                                        </div>
                                </div>
                            </fieldset>

                            <lable for="nt" class="form-label"> <h6>Название в пункте меню</h6> </lable>
                            <input id="nt"  class="form-control" name="nav-title"><br>

                            <lable for="ci" class="form-label"> <h6>Изображение контакта</h6>  </lable>
                            <input id="ci" type="file" class="form-control" name='contact_image'> <br>

                            <lable for="ci" class="form-label"> <h6>Изображение контакта</h6>  </lable>
                            <input id="ci" type="file" class="form-control" name='contact_image'> <br>

                            <lable for="cb" class="form-label"> <h6>Название контакта</h6>  </lable>
                            <textarea id="cb" type="text" class="form-control" name='contact_title' ></textarea> <br>

                            <lable for="cb" class="form-label"> <h6>Адрес контакта</h6> </lable>
                            <textarea id="cb" type="text" class="form-control" name='contact_adress' ></textarea> <br>

                            <lable for="cp" class="form-label"> <h6>Телефон контакта</h6> </lable>
                            <input id="cp"  class="form-control" name="contact_phone"> <br>

                            <lable for="cm" class="form-label"> <h6>почта контакта</h6> </lable>
                            <input id="cm" type="email"  class="form-control" name="contact_mail"> <br>

                            <button class="btn btn-primary" type="sucsess">Создать продукт</button>
                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">

                </div>

@endsection