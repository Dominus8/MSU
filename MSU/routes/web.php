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
Route::get('/app-product-single-page/{id}', [MainController::class, 'app_product_single_page'])->name('app-product-single-page');

//Программно-аппаратные продукты
Route::get('/app-hard-product', [MainController::class, 'app_hard_product'])->name('app-hard-product');

//Программно-аппаратные продукты соло страница
Route::get('/app-hard-product-single-page/{id}', [MainController::class, 'app_hard_product_single_page'])->name('app-hard-product-single-page');

//Новости
Route::get('/news-list', [MainController::class, 'news_list'])->name('news-list');

//Новости соло страница
Route::get('/single-news/{id}', [MainController::class, 'news_single_page'])->name('single-news');

//Реализованные проекты
Route::get('/refiled-projects', [MainController::class, 'refiled_projects'])->name('refiled-projects');

//Реализованные проекты соло страница
Route::get('/refiled-projects-single-page', [MainController::class, 'refiled_projects_single_page'])->name('refiled-projects-single-page');

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



//--------- Админка - продукты------------------------------------------------------------------------------------------------------------------------

//Админка - Управление продуктами
Route::get('/admin-product', [MainController::class, 'admin_product'])->name('admin-product');

// Создание продукта
Route::post('/admin/create-product', [MainController::class, 'create_product']) ->name('create_product');

//Изменение продукта
Route::get('/edit-product/{id}', [MainController::class, 'edit_product']) ->name('edit_product');

//Обновление продукта
Route::post('/admin/update-product/{id}', [MainController::class, 'update_product']) ->name('update_product');

//Удаление продукта
Route::get('/admin/dell-product/{id}', [MainController::class, 'dell_product']) ->name('dell_product');



//--------- Админка - Главная------------------------------------------------------------------------------------------------------------------------

//Админка - Управление контактами
Route::get('/admin-home-page', [MainController::class, 'admin_home_page'])->name('admin-home-page');

// Создание карточек Контактов
Route::post('/admin/create-home-page', [MainController::class, 'create_home_page']) ->name('create-home-page');

//Изменение карточек Контактов
Route::get('/edit-home-page/{id}', [MainController::class, 'edit_home_page']) ->name('edit-home-page');

//Обновление карточек Контактов
Route::post('/admin/update-home-page/{id}', [MainController::class, 'update_home_page']) ->name('update-home-page');

//Удаление карточек Контактов
Route::get('/admin/dell-home-page/{id}', [MainController::class, 'dell_home_page']) ->name('dell-home-page');

//--------- Админка - О нас------------------------------------------------------------------------------------------------------------------------

//Админка - Управление О нас
Route::get('/admin-about', [MainController::class, 'admin_about'])->name('admin-about');

//Админка - О нас - обновить подзаголовок
Route::post('/admin/change-adout-subtitle', [MainController::class, 'change_adout_subtitle'])->name('change-adout-subtitle');

//Админка - О нас - Создать карточку
Route::post('/admin/create-adout-card', [MainController::class, 'create_adout_card'])->name('create-adout-card');

//Удаление карточек О нас
Route::get('/admin/dell-about-card/{id}', [MainController::class, 'dell_about_card']) ->name('dell-about-card');

//Админка - О нас - Добавить документ
Route::post('/admin/create-adout-doc', [MainController::class, 'create_adout_doc'])->name('create-adout-doc');

//Удаление документа О нас
Route::get('/admin/dell-about-doc/{id}', [MainController::class, 'dell_about_doc']) ->name('dell-about-doc');

//--------- Админка - Новости ------------------------------------------------------------------------------------------------------------------------

//Админка - Управление Новости
Route::get('/admin-news', [MainController::class, 'admin_news'])->name('admin-news');

//Админка - О нас - Создать карточку
Route::post('/admin/create-news', [MainController::class, 'create_news'])->name('create-news');

//Удаление документа О нас
Route::get('/admin/dell-news/{id}', [MainController::class, 'dell_news']) ->name('dell-news');

//--------- Админка - Реализованные проекты ------------------------------------------------------------------------------------------------------------------------

//Админка - Управление Проектами
Route::get('/admin-projects', [MainController::class, 'admin_projects'])->name('admin-projects');

//Админка - О нас - Создать карточку
Route::post('/admin/create-project', [MainController::class, 'create_project'])->name('create-project');

//Удаление Проекта
Route::get('/admin/dell-project/{id}', [MainController::class, 'dell_project']) ->name('dell-project');
