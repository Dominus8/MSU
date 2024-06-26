@extends('admin-base')

@section('admin-content')
<h1>Управление продуктами</h1>
@if ($errors->any())
    <div class="fixed-top alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--------------------------------------------------------------------------------------------------------------->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
  Добавить продукт
</button>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appHardLable">
  Изменить главную программно-аппаратных
</button>

<!-- Modal -->
<div class="modal fade" id="appHardLable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Изменить главную страницу программно-аппаратных продуктов</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="curent-app-hard-image">
            <h5>Текущее изображение</h5>
            @if(isset($apphardlabel->apphardlable_image))
                <img style="width:200px;" src="/storage/product_page_ico/{{$apphardlabel->apphardlable_image}}" alt="">
            @endif
        </div>

        <form action="/admin/update_apphard_primary_page" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if(isset($apphardlabel->apphardlable_title))
            <input class="form-control" type="text" name="apphardlable_title" value="{{$apphardlabel->apphardlable_title}}"> <br>
            <textarea class="form-control" name="apphardlable_subtitle" >{{$apphardlabel->apphardlable_subtitle}}</textarea> <br>
        @else
            <input class="form-control" type="text" name="apphardlable_title"> <br>
            <textarea class="form-control" name="apphardlable_subtitle" ></textarea> <br>
        @endif
            <input class="form-control" type="file" name="apphardlable_image"> <br>
            <button class="btn btn-primary" type="sucsess">Обновить</button>
        </form>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appLable">
  Изменить главную аппаратных
</button>

<!-- Modal -->
<div class="modal fade" id="appLable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Изменить главную страницу аппаратных продуктов</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="curent-app-image">
            <h5>Текущее изображение</h5>
            @if(isset($applabel->applable_image))
                <img style="width:200px;" src="/storage/product_page_ico/{{$applabel->applable_image}}" alt="">
            @endif
      </div>

          <form action="/admin/update_app_primary_page" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            @if(isset($applabel->applable_title))
              <input class="form-control" type="text" name="applable_title" value="{{$applabel->applable_title}}"> <br>
              <textarea class="form-control" name="applable_subtitle" >{{$applabel->applable_subtitle}}</textarea> <br>
            @else
            <input class="form-control" type="text" name="applable_title"> <br>
              <textarea class="form-control" name="applable_subtitle" ></textarea> <br>
            @endif
              <input type="file" class="form-control" name='applable_image'> <br>

              <button class="btn btn-primary" type="sucsess">Обновить</button>
          </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade " id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить новый продукт</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mine-content admin-section__form">
            <form action="/admin/create-product" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <fieldset>
                        <legend><span style='color:red; font-size:24; font-weight:900;'>*</span> Тип продукта</legend>
                        <div class="product-ico">
                            <input type="radio" id="product-type1" name="product_type" value="product_type-1" checked>
                            <label for="product-ico1">Программно-аппаратные продукты </label>
                        </div>
                        <div class="product-ico">
                            <input type="radio" id="product-type2" name="product_type" value="product_type-2">
                            <label for="product-type2">Программный продукт</label>
                        </div>
                    </fieldset>
                    <br>
                    <hr>
                    <br>
                    <fieldset>
                        <!--Для выбора иконки продукта в меню-->
                        <legend><span style='color:red; font-size:24; font-weight:900;'>*</span> Иконка для меню</legend>
                        <p style="font-size:11px;">Размер 48х48px (1:1) jpg или png формата. Иконки могут быть любого цвета. Первая - основная, вторая - активная(отображается при выбранном продукте)</p>
                        <lable for="single_page_bico" class="form-label"> <h6>Иконка чёрная</h6></lable>
                        <input id="single_page_bico" type="file" class="form-control" name='single_page_bico'><br>

                        <lable for="single_page_gico" class="form-label"> <h6>Иконка зелёная</h6></lable>
                        <input id="single_page_gico" type="file" class="form-control" name='single_page_gico'><br>

                        <!--Название пункта в меню продуктов-->
                        <lable for="nt" class="form-label"> <legend><span style='color:red; font-size:24; font-weight:900;'>*</span> Название в пункте меню</legend></lable>
                        <input id="nt"  class="form-control" name="nav_title"><br>
                    </fieldset>
                    <hr>
                    <fieldset>
                        <legend>Продукт на странице продукта</legend>

                        <lable for="b_single_page_title" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Заголовок чёрный текст</h6> </lable>
                        <input id="b_single_page_title"  class="form-control" name="b_single_page_title"><br>

                        <lable for="g_single_page_title" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Заголовок зелёный текст</h6> </lable>
                        <input id="g_single_page_title"  class="form-control" name="g_single_page_title"><br>


                        <lable for="single_page_slides" class="form-label"> <h6>Изображение для слайдера на странице</h6></lable>
                        <p style="font-size:11px;">
                        &nbsp;&nbsp;&nbsp;&nbsp;О слайдах Программно-аппаратного продукта - Область отображения слайда 345х440px jpg(если размер на всю область) или png формата. Подложка у облости отображения всегда зелёного цвета. Добавить по одному слайду нельзя, только все вместе. При нажатии `Выбрать файлы` обведите сразу несколько картинок и они добавятся в форму.<br> <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;О слайдах Программного продукта - Область отображения слайдана 880х450px (На данный момент строго не ограничена, Можно эксперементировать) jpg или png формата. Подложки нет только цвет фона секции. Добавить по одному слайду нельзя, только все вместе. При нажатии `Выбрать файлы` обведите сразу несколько картинок и они добавятся в форму.
                        </p>
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
                        <textarea id="single_page_sudtitle" type="text" class="form-control" name='single_page_sudtitle'></textarea><br>

                        <lable id="single-page-purpose-lable" for="single-page-purpose" class="form-label"> <h6>Функционал</h6></lable>

                        <textarea id="single-page-purpose" type="text" class="form-control" name='single-page-purpose'></textarea><br>

                        <h6 id="parameters-wrapper_lable">Добавить параметры</h6>
                        <p style="font-size:11px;">
                        Обязательно нажать кнопку 'Записать', иначе параметры не добавятся. Не оставляйте строки параметров пустыми, <br> иначе они так и запишутся и отобразятся на странице пустыми (на данный момент)
                        </p>
                        <strong>
                            Нажимать "Записать", даже если нет содержимого! Запишется пустая строка.
                        </strong>

                        <div id="parameters-wrapper"  class="single-page-parameters-wrapper">
                           <div class="single-page-parameters-item-wrapper">
                               <div class="single-page-parameters-item">
                                   <input id="single-page-parameters"  class="form-control" placeholder="Название параметра">
                                   <input id="single-page-parameters"  class="form-control" placeholder="Значение параметра">
                               </div>
                           </div>
                        </div>
                        <textarea id="parameters-to-send" type="text" style="display:none;"  name='single_page_parameters'></textarea><br>
                        <br>
                        <div id="plus-parameter" class="btn btn-success">+</div> <div id="minus-parameter" class="btn btn-danger">-</div> <div class="btn btn-primary add-paramiter">Записать</div>
                        <br>
                        <br>
                        <div class="single-page-documents-wrapper">
                            <lable for="single_page_documents" class="form-label"> <h6>Добавить документы</h6></lable>
                            <p style="font-size:11px;">
                            Название документов на странице берётся из названия файла. Следите за актуальными названиями файлов. Документы добавляются все вместе. <br> По одному добавить нельзя. Для добавление выделите все документы и они добавятся в форму.
                            </p>
                            <input id="single_page_documents" type="file" multiple class="form-control" name='single_page_documents[]'><br>
                        </div>
                    </fieldset>

                    <fieldset>
                    <legend>Настройки мета данных</legend>

                        <lable for="single_page_metadescription" class="form-label"><h6>Description (Не обязательно)</h6></lable>
                        <textarea id="single_page_metadescription" type="text" class="form-control" name='single_page_metadescription'></textarea><br>

                        <lable for="single_page_metakeywords" class="form-label"><h6>Keywords (Не обязательно. Отдельные слова через запятую)</h6></lable>
                        <textarea id="single_page_metakeywords" type="text" class="form-control" name='single_page_metakeywords'></textarea><br>

                    </fieldset>
                    <button class="btn btn-primary" type="sucsess">Создать продукт</button>
                </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
<!--------------------------------------------------------------------------------------------------------------->


<!-- Добавление нового продукта -->
<br>
<br>
<h6>Редактировать Программно-аппаратные продукты</h6>
<div class="admin-section__manage">
            @foreach($hardproduct as $el)
            <div class="manage-element directions_card">
                    <h6>{{$el->b_single_page_title}} {{$el->g_single_page_title}}</h6>
                    <a class='btn btn-warning' href="/edit-product/{{$el->id}}">edit</a>
                    <a class='btn btn-danger' href="/admin/dell-product/{{$el->id}}">x</a>
                </div>
            @endforeach
</div>

<h6>Редактировать Программные продукты</h6>
<div class="admin-section__manage">

            @foreach($appproduct as $el)
            <div class="manage-element directions_card">
                    <h6>{{$el->b_single_page_title}} {{$el->g_single_page_title}}</h6>
                    <a class='btn btn-warning' href="/edit-product/{{$el->id}}">edit</a>
                    <a class='btn btn-danger' href="/admin/dell-product/{{$el->id}}">x</a>
                </div>
            @endforeach
        </div>
</div>
<br>




@endsection
