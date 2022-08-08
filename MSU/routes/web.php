<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Главная
Route::get('/', [MainController::class, 'index'])->name('index');

//О нас
Route::get('/about', [MainController::class, 'about'])->name('about');

//Программные продукты
Route::get('/app-product', [MainController::class, 'app_product'])->name('app-product');

//Программные продукты соло страница
Route::get('/app-product-single-page', [MainController::class, 'app_product_single_page'])->name('app-product-single-page');

//Программно-аппаратные продукты
Route::get('/app-hard-product', [MainController::class, 'app_hard_product'])->name('app-hard-product');

//Программно-аппаратные продукты соло страница
Route::get('/app-hard-product-single-page', [MainController::class, 'app_hard_product_single_page'])->name('app-hard-product-single-page');

//Новости
Route::get('/news-list', [MainController::class, 'news_list'])->name('news-list');

//Реализованные проекты
Route::get('/refiled-projects', [MainController::class, 'refiled_projects'])->name('refiled-projects');

//Партнеры
Route::get('/partners', [MainController::class, 'partners'])->name('partners');

//Поддержка
Route::get('/support', [MainController::class, 'support'])->name('support');

//Контакты
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

//Админка
Route::get('/admin', [MainController::class, 'admin'])->name('admin');


//--------- Админка - Контакты------------------------------------------------------------------------------------------------------------------------

//Админка - Управление контактами
Route::get('/admin-contact', [MainController::class, 'admin_contact'])->name('admin-contact');

// Создание карточек Контактов
Route::post('/admin/create-contact', [MainController::class, 'create_contact']) ->name('create_contact');

//Изменение карточек Контактов
Route::get('/edit-contact/{id}', [MainController::class, 'edit_contact']) ->name('edit_contact');

//Обновление карточек Контактов
Route::post('/admin/update-contact/{id}', [MainController::class, 'update_contact']) ->name('update_contact');

//Удаление карточек Контактов
Route::get('/admin/dell-contact/{id}', [MainController::class, 'dell_contact']) ->name('dell_contact');