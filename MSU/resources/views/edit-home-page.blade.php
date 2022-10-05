@extends('admin-base')

@section('admin-content')
<h1>Управление слайдами</h1>
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
                    <form action="/admin/update-home-page/{{$mainslide->id}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление продукта в слайдер на главной</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <p style="font-size:11px;">
                                            Область отображения слайда 1110х600. Формат .png с прозрачным фоном. 
                                            <a href="/images/main-slide.psd">Шаблон для главного слайда.</a> <br>Можно добавить только картинку, без остальных элементов в таком случае, можно использовать любую картинку подходящего размера. <br> Каждый следующий элемент будет отображаться при наличии.
                                            Если не выбрать новое изображение, останется текущее.
                                        </p>
                                        <div class="current-slide-image">
                                            <p>Текущее изображение</p>
                                            <img style="width:150px" src="/storage/image_mine_slide/{{ $mainslide->image_mine_slide}}" alt="">
                                        </div>
                                        <lable for="image-mine-slide" class="form-label"> <h6><span style='color:red; font-size:24; font-weight:900;'>*</span> Изображение для слайдера на главной</h6></lable>
                                        <input id="image-mine-slide" type="file" class="form-control" name='image_mine_slide'><br>

                                        <lable for="b-title-mine-slide" class="form-label"> <h6>Название чёрный текст</h6></lable>
                                        <p style="font-size:11px;">
                                            Пара слов. 
                                        </p>
                                        <input id="b-title-mine-slide"  class="form-control" name="b_title_mine_slide" value="{{$mainslide->b_title_mine_slide}}"><br>
                                        
                                        <lable for="g-title-mine-slide" class="form-label"> <h6>Название зелёный текст</h6></lable>
                                        <p style="font-size:11px;">
                                            Пара слов. 
                                        </p>
                                        <input id="g-title-mine-slide"  class="form-control" name="g_title_mine_slide" value="{{$mainslide->g_title_mine_slide}}"><br>

                                        <lable for="subtitle-mine-slide" class="form-label"> <h6>Описание для главного слайдера</h6></lable>
                                        <p style="font-size:11px;">
                                            2-3 строки (Около 100-120 символов с учёном пробелов) 
                                        </p>
                                        <textarea id="subtitle-mine-slide" type="text" class="form-control" name='subtitle_mine_slide'>{{$mainslide->subtitle_mine_slide}}</textarea><br>
                                        
                                        <lable for="link-mine-slide" class="form-label"> <h6>Продукт для кнопки</h6></lable>

                                        <select id="link-mine-slide" class="form-control" name="link_mine_slide">
                                        <option value="">Без кнопки</option>
                                            @foreach($product as $el)
                                            {{$el->product_type}}
                                                @if($el->product_type == "product_type-1")
                                                    <option value="/app-product-single-page/{{$el->id}}">{{$el->b_single_page_title}} {{$el->g_single_page_title}} (Программно-аппаратный)</option>
                                                @else
                                                    <option value="/app-hard-product-single-page/{{$el->id}}">{{$el->b_single_page_title}} {{$el->g_single_page_title}} (Программный)</option> 
                                                @endif
                                            @endforeach
                                        </select> 
                                        <hr>
                                        <button class="btn btn-primary" type="sucsess">Обновить слайд</button>
                                    </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
                <script>
                    $(document).ready(function(){
                        let x = $("select[name='link_mine_slide'] option[value='{{$mainslide->link_mine_slide}}']").attr('selected','selected');
                    });
                </script>

@endsection