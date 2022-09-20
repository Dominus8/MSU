@extends('admin-base')

@section('admin-content')
<h1>Управление слайдами</h1>

<div class="mine-content admin-section__form">
                    <form action="/admin/create-home-page" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <fieldset>
                                <legend>Добавление продукта в слайдер на главной</legend>
                                    <div id="in-mine-slider-approved" class="in-mine-slider-property">
                                        <lable for="image-mine-slide" class="form-label"> <h6>Изображение для слайдера на главной</h6></lable>
                                        <input id="image-mine-slide" type="file" class="form-control" name='image_mine_slide'><br>

                                        <lable for="b-title-mine-slide" class="form-label"> <h6>Название чёрный текст</h6></lable>
                                        <input id="b-title-mine-slide"  class="form-control" name="b_title_mine_slide"><br>
                                        
                                        <lable for="g-title-mine-slide" class="form-label"> <h6>Название зелёный текст</h6></lable>
                                        <input id="g-title-mine-slide"  class="form-control" name="g_title_mine_slide"><br>

                                        <lable for="subtitle-mine-slide" class="form-label"> <h6>Описание для главного слайдера</h6></lable>
                                        <textarea id="subtitle-mine-slide" type="text" class="form-control" name='subtitle_mine_slide'></textarea><br>
                                        
                                        <lable for="link-mine-slide" class="form-label"> <h6>Продукт для кнопки</h6></lable>
                                        <select id="link-mine-slide" class="form-control" name="link_mine_slide">
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
                                        <button class="btn btn-primary" type="sucsess">Добавить слайд</button>
                                    </div>
                            </fieldset>


                        </div>
                    </form>
                </div>
                <div class="admin-section__manage">
                @foreach($sainslide as $el)
                        <div class="manage-element directions_card">
                            <img src="/storage/image_mine_slide/{{$el->image_mine_slide}}" alt="img">
                            <h6>{{$el->b_title_mine_slide}}</h6>
                            <a class='btn btn-warning' href="/edit-mainslide/{{$el->id}}">edit</a>
                            <a class='btn btn-danger' href="/admin/dell-home-page/{{$el->id}}">x</a>
                        </div>
                    @endforeach 
                </div>

@endsection