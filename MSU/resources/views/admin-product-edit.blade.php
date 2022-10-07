@extends('admin-base')

@section('admin-content')
<h1>Обновление продукта</h1>
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
                    <form action="/admin/update-product/{{$product->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Тип продукта</legend>
                                @if($product->product_type == 'product_type-1')
                                <div class="product-ico">
                                    <input type="radio" id="product-type1" name="product_type" value="product_type-1" checked>
                                    <label for="product-ico1">Программно-аппаратные продукты </label>
                                </div>

                                <div class="product-ico">
                                    <input type="radio" id="product-type2" name="product_type" value="product_type-2">
                                    <label for="product-type2">Программный продукт</label>
                                </div>
                                @else
                                <div class="product-ico">
                                    <input type="radio" id="product-type1" name="product_type" value="product_type-1">
                                    <label for="product-ico1">Программно-аппаратные продукты </label>
                                </div>

                                <div class="product-ico">
                                    <input type="radio" id="product-type2" name="product_type" value="product_type-2" checked>
                                    <label for="product-type2">Программный продукт</label>
                                </div>

                                @endif
                            </fieldset>
                            <br>
                            <hr>
                            <br>
                            <fieldset>
                                <!--Для выбора иконки продукта в меню-->
                                <legend>Иконка для меню</legend>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover" data-bs-title="Об иконках" data-bs-content="Размер 48х48px (1:1) jpg или png формата. Иконки перезаписываются. Если не выбирать новые иконки, то при обновлении продукта иконки останутся старыми. Иконки могут быть любого цвета. Первая - основная, вторая - активная(отображается при выбранном продукте)">Подробности</button>
                                <br>
                                <br>
                                <h5>Текущая чёрная</h5>
                                <img src="/storage/product_page_ico/{{$product->single_page_bico}}" alt="bico">

                                <lable for="single_page_bico" class="form-label"> <h6>Иконка чёрная</h6></lable>
                                <input id="single_page_bico" type="file" class="form-control" name='single_page_bico'><br>

                                <h5>Текущая зелёная</h5>
                                <img src="/storage/product_page_ico/{{$product->single_page_gico}}" alt="bico">

                                <lable for="single_page_gico" class="form-label"> <h6>Иконка зелёная</h6></lable>
                                <input id="single_page_gico" type="file" class="form-control" name='single_page_gico'><br>

                                <!--Название пункта в меню продуктов-->
                                <lable for="nt" class="form-label"> <h6>Название в пункте меню</h6></lable>
                                <input id="nt"  class="form-control" name="nav_title" value="{{$product->nav_title}}"><br>
                            </fieldset>
                            <br>
                            <hr>
                            <br>
                            <fieldset>
                                <legend>Продукт на странице продукта</legend>

                                <lable for="b_single_page_title" class="form-label"> <h6>Заголовок чёрный текст</h6> </lable>
                                <input id="b_single_page_title"  class="form-control" name="b_single_page_title" value="{{$product->b_single_page_title}}" ><br>

                                <lable for="g_single_page_title" class="form-label"> <h6>Заголовок зелёный текст</h6> </lable>
                                <input id="g_single_page_title"  class="form-control" name="g_single_page_title" value="{{$product->g_single_page_title}}"><br>
                                
                                @if($product->product_type == 'product_type-1')
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover" data-bs-title="О слайдах Программно-аппаратного продукта" data-bs-content="Область отображения слайда 345х440px jpg(если размер на всю область) или png формата. Подложка у облости отображения всегда зелёного цвета. Картинки для слайдов ПЕРЕЗАПИСЫВАЮТСЯ 'ПАЧКОЙ'. Добавить по одному слайду нельзя, только все вместе. Слайды перезаписываются, старые удаляются с сервера, новые добавляются.">Подробности</button>
                                @else
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover" data-bs-title="О слайдах Программного продукта" data-bs-content="Область отображения слайдана 880х450px (На данный момент строго не ограничена, Можно эксперементировать) jpg или png формата. Подложки нет только цвет фона секции. Картинки для слайдов ПЕРЕЗАПИСЫВАЮТСЯ 'ПАЧКОЙ'. Добавить по одному слайду нельзя, только все вместе. Слайды перезаписываются, старые удаляются с сервера, новые добавляются.">Подробности</button>
                                @endif
                                <br>
                                <br>
                                <h6>Текущие слайды</h6>
                                <div class="current-slides">
                                    @foreach($product->single_page_slides as $el)
                                    <img style="width:150px; object-fit:contain;" src="/storage/product_slides_image/{{$el}}" alt="slide">
                                    @endforeach
                                </div>
                                <lable for="single_page_slides" class="form-label"> <h6>Изображение для слайдера на странице</h6></lable>
                                <input id="single_page_slides" type="file" multiple class="form-control" name='single_page_slides[]'><br>

                                <lable for="single_page_sudtitle" class="form-label"><h6>Описание</h6></lable>
                                <p style="font-size:11px;">
                                    Текст. Для форматированииспользовать: <br>
                                    &lt;br&gt; - перенос строки (Ставится в текст в место переноса, можно нескоько подряд) <br>
                                    &lt;span class = "Сюда нужный класс, можно сразу несколько чрез пробел"&gt;Сюда текс&lt;/span&gt; <br>
                                        Список слассов: <br>
                                        green - Сделать текст зелёным. <br>
                                        bold - Cделать текст "жирным" <br>
                                        Пример:<br>
                                        &lt;span class = "green bold"&gt;Зелёный, жирный текст&lt;/span&gt;
                                </p>
                                <textarea id="single_page_sudtitle" type="text" class="form-control" name='single_page_sudtitle'>{{$product->single_page_sudtitle}}</textarea><br>
                                @if($product->single_page_purpose)
                                <lable id="single-page-purpose-lable" for="single-page-purpose" class="form-label"><h6>Назначение</h6></lable>
                                <textarea id="single-page-purpose" type="text" class="form-control" name='single-page-purpose'>{{$product->single_page_purpose}}</textarea><br>
                                @endif
                                @if($product->product_type == 'product_type-1')
                                <h6 id="parameters-wrapper_lable">Обновить параметры</h6>
                                <strong>
                                    Нажимать "Записать", даже если нет содержимого! Запишется пустая строка.
                                </strong>
                                    <div id="parameters-wrapper"  class="single-page-parameters-wrapper">
                                        @if($soloparamiters)
                                        @foreach( $soloparamiters as $el)
                                        <div class="single-page-parameters-item-wrapper">
                                            <div class="single-page-parameters-item">
                                                <input id="single-page-parameters" value="{{ $el->key }}"  class="form-control" placeholder="Название параметра">
                                                <input id="single-page-parameters" value="{{ $el->val }}" class="form-control" placeholder="Значение параметра">
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div class="single-page-parameters-item-wrapper">
                                            <div class="single-page-parameters-item">
                                                <input id="single-page-parameters"   class="form-control" placeholder="Название параметра">
                                                <input id="single-page-parameters"  class="form-control" placeholder="Значение параметра">
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <textarea id="parameters-to-send" type="text" style="display:none;"  name='single_page_parameters'></textarea><br> 
                                    <br>
                                    <div id="plus-parameter" class="btn btn-success">+</div> <div id="minus-parameter" class="btn btn-danger">-</div> <div class="btn btn-primary add-paramiter">Записать</div>
                                    @endif
                                <br>
                                <br>
                                <div class="single-page-documents-wrapper">
                                    <lable for="single_page_documents" class="form-label"><h6>Обновить документы</h6></lable>
                                    <p>
                                        По одному не добавляются, только за ново все менять.
                                    </p>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="popover" data-bs-title="О документах" data-bs-content="Документы добавляются все вместе. По одному добавить нельзя. Если нужно добавить один документ, соберите все уже загруженные документы в каталог, добавьте в этот каталог недостающий документ и выделите все документы вместе. Документы перезаписываются `пачкой`">Подробности</button>
                                    <br>
                                    <br>
                                    <input id="single_page_documents" type="file" multiple class="form-control" name='single_page_documents[]'><br>
                                </div>
                            </fieldset>

                            <fieldset>
                            <legend>Настройки мета данных</legend>

                                <lable for="single_page_metadescription" class="form-label"><h6>Description (Не обязательно)</h6></lable>
                                <textarea id="single_page_metadescription" type="text" class="form-control" name='single_page_metadescription'>{{$product->single_page_metadescription}}</textarea><br>
                                
                                <lable for="single_page_metakeywords" class="form-label"><h6>Keywords (Не обязательно. Отдельные слова через запятую)</h6></lable>
                                <textarea id="single_page_metakeywords" type="text" class="form-control" name='single_page_metakeywords'>{{$product->single_page_metakeywords}}</textarea><br>
                            
                            </fieldset>    
                            <button class="btn btn-primary" type="sucsess">Обновить продукт</button>
                        </div>
                    </form>
                </div>

                <script>
                    $(document).ready(function(){
                        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
                        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
                    });
                </script>

                

@endsection