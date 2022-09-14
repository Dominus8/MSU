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
                                    <input type="radio" id="product-type1" name="product_type" value="product_type-1" checked>
                                    <label for="product-ico1">Программный продукт </label>
                                </div>

                                <div class="product-ico">
                                    <input type="radio" id="product-type2" name="product_type" value="product_type-2">
                                    <label for="product-type2">Программно-аппаратные продукты</label>
                                </div>
                            </fieldset>
                            <br>
                            <hr>
                            <br>
                            <fieldset>
                                <!--Для выбора иконки продукта в меню-->
                                <legend>Иконка для меню</legend>

                                <lable for="single_page_bico" class="form-label"> <h6>Иконка чёрная</h6></lable>
                                <input id="single_page_bico" type="file" class="form-control" name='single_page_bico'><br>

                                <lable for="single_page_gico" class="form-label"> <h6>Иконка зелёная</h6></lable>
                                <input id="single_page_gico" type="file" class="form-control" name='single_page_gico'><br>

                                <!--Название пункта в меню продуктов-->
                                <lable for="nt" class="form-label"> <h6>Название в пункте меню</h6></lable>
                                <input id="nt"  class="form-control" name="nav_title"><br>
                            </fieldset>
                            <br>
                            <hr>
                            <br>

                            <fieldset>
                                <legend>Продукт на странице продукта</legend>

                                <lable for="b_single_page_title" class="form-label"> <h6>Заголовок чёрный текст</h6> </lable>
                                <input id="b_single_page_title"  class="form-control" name="b_single_page_title"><br>

                                <lable for="g_single_page_title" class="form-label"> <h6>Заголовок зелёный текст</h6> </lable>
                                <input id="g_single_page_title"  class="form-control" name="g_single_page_title"><br>

                                <lable for="single_page_slides" class="form-label"> <h6>Изображение для слайдера на странице</h6></lable>
                                <input id="single_page_slides" type="file" multiple class="form-control" name='single_page_slides'><br>

                                <lable for="single_page_sudtitle" class="form-label"><h6>Описание</h6></lable>
                                <textarea id="single_page_sudtitle" type="text" class="form-control" name='single_page_sudtitle'></textarea><br>

                                <lable for="single-page-purpose" class="form-label"> <h6>Назначение</h6></lable>
                                <textarea id="single-page-purpose" type="text" class="form-control" name='single-page-purpose'></textarea><br>
                            
                                <h6>Добавить параметры</h6>
                                <div id="parameters-wrapper"  class="single-page-parameters-wrapper">
                                    <div class="single-page-parameters-item">
                                        <input id="single-page-parameters"  class="form-control" placeholder="Название параметра">
                                        <input id="single-page-parameters"  class="form-control" placeholder="Значение параметра">
                                    </div>   
                                </div>
                                <textarea id="parameters-to-send" type="text" style="display:none;"  name='single_page_parameters'></textarea><br> 
                                <br>
                                <div id="plus-parameter" class="btn btn-success">+</div> <div id="minus-parameter" class="btn btn-danger">-</div> <div  class="btn btn-primary add-paramiter">Записать</div>
                                <br>
                                <br>
                                <div class="single-page-documents-wrapper">
                                    <lable for="single_page_documents" class="form-label"> <h6>Добавить документы</h6></lable>
                                    <input id="single_page_documents" type="file"  multiple class="form-control" name='single_page_documents'><br>
                                    
                                </div>
                            </fieldset>

                            <button class="btn btn-primary" type="sucsess">Создать продукт</button>
                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">

                </div>

@endsection