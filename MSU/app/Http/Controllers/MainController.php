<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

// Главная станицаа
    public function index(){
        return view('index');
    }


// О нас 
    public function about(){
        return view('about');
    }


//Программные продукты
    public function app_product(){
        return view('app-product');
    }

//Программные продукты соло страница
    public function app_product_single_page(){
        return view('app-product-single-page');
    }


//Программно-аппаратные продукты 
    public function app_hard_product(){
        return view('app-hard-product');
    }

//Программно-аппаратные продукты соло страница
    public function app_hard_product_single_page(){
        return view('app-hard-product-single-page');
    }


//Новости
    public function news_list(){
        return view('news-list');
    }


//Реализованные проекты
    public function refiled_projects(){
        return view('refiled-projects');
    }


//Партнеры
    public function partners(){
        return view('partners');
    }


//Поддержка
    public function support(){
        return view('support');
    }


//Контакты
    public function contacts(){
        return view('contacts');
    }
}// Закрывает контроллер 
