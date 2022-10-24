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
Route::get('/refiled-projects-single-page/{id}', [MainController::class, 'refiled_projects_single_page'])->name('refiled-projects-single-page');

//Партнеры
Route::get('/partners', [MainController::class, 'partners'])->name('partners');

//Поддержка
Route::get('/support', [MainController::class, 'support'])->name('support');

//Контакты
Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

//Админка
Route::get('/admin', [MainController::class, 'admin'])->name('admin')->middleware('auth');


//--------- Админка - Контакты------------------------------------------------------------------------------------------------------------------------

//Админка - Управление контактами
Route::get('/admin-contact', [MainController::class, 'admin_contact'])->name('admin-contact')->middleware('auth');

// Создание карточек Контактов
Route::post('/admin/create-contact', [MainController::class, 'create_contact']) ->name('create_contact')->middleware('auth');

//Изменение карточек Контактов
Route::get('/edit-contact/{id}', [MainController::class, 'edit_contact']) ->name('edit_contact')->middleware('auth');

//Обновление карточек Контактов
Route::post('/admin/update-contact/{id}', [MainController::class, 'update_contact']) ->name('update_contact')->middleware('auth');

//Удаление карточек Контактов
Route::get('/admin/dell-contact/{id}', [MainController::class, 'dell_contact']) ->name('dell_contact')->middleware('auth');


//--------- Админка - продукты------------------------------------------------------------------------------------------------------------------------

//Админка - Управление продуктами
Route::get('/admin-product', [MainController::class, 'admin_product'])->name('admin-product')->middleware('auth');

// Создание продукта
Route::post('/admin/create-product', [MainController::class, 'create_product']) ->name('create_product')->middleware('auth');

//Изменение продукта
Route::get('/edit-product/{id}', [MainController::class, 'edit_product']) ->name('edit_product')->middleware('auth');

//Обновление продукта
Route::post('/admin/update-product/{id}', [MainController::class, 'update_product']) ->name('update_product')->middleware('auth');

//Удаление продукта
Route::get('/admin/dell-product/{id}', [MainController::class, 'dell_product']) ->name('dell_product')->middleware('auth');


//--------- Админка - Главная------------------------------------------------------------------------------------------------------------------------

//Админка - Управление контактами
Route::get('/admin-home-page', [MainController::class, 'admin_home_page'])->name('admin-home-page')->middleware('auth');

// Создание карточек Контактов
Route::post('/admin/create-home-page', [MainController::class, 'create_home_page']) ->name('create-home-page')->middleware('auth');

//Изменение карточек Контактов
Route::get('/edit-home-page/{id}', [MainController::class, 'edit_home_page']) ->name('edit-home-page')->middleware('auth');

//Обновление карточек Контактов
Route::post('/admin/update-home-page/{id}', [MainController::class, 'update_home_page']) ->name('update-home-page')->middleware('auth');

//Удаление карточек Контактов
Route::get('/admin/dell-home-page/{id}', [MainController::class, 'dell_home_page']) ->name('dell-home-page')->middleware('auth');

//--------- Админка - О нас------------------------------------------------------------------------------------------------------------------------

//Админка - Управление О нас
Route::get('/admin-about', [MainController::class, 'admin_about'])->name('admin-about')->middleware('auth');

//Админка - О нас - обновить подзаголовок
Route::post('/admin/change-adout-subtitle', [MainController::class, 'change_adout_subtitle'])->name('change-adout-subtitle')->middleware('auth');

//Админка - О нас - Создать карточку
Route::post('/admin/create-adout-card', [MainController::class, 'create_adout_card'])->name('create-adout-card')->middleware('auth');

//Редактировать карточеу О нас
Route::get('/admin/edit-about-card/{id}', [MainController::class, 'edit_about_card']) ->name('edit-about-card')->middleware('auth');

//Обновить карточеу О нас
Route::post('/admin/update-about-card/{id}', [MainController::class, 'update_about_card']) ->name('update-about-card')->middleware('auth');

//Удалить карточеу О нас
Route::get('/admin/dell-about-card/{id}', [MainController::class, 'dell_about_card']) ->name('dell-about-card')->middleware('auth');



//Админка - О нас - Добавить документ
Route::post('/admin/create-adout-doc', [MainController::class, 'create_adout_doc'])->name('create-adout-doc')->middleware('auth');

//Редактировать документа О нас
Route::get('/admin/edit-about-doc/{id}', [MainController::class, 'edit_about_doc']) ->name('edit-about-doc')->middleware('auth');

//Обновить документа О нас
Route::post('/admin/update-about-doc/{id}', [MainController::class, 'update_about_doc']) ->name('update-about-doc')->middleware('auth');

//Удаление документа О нас
Route::get('/admin/dell-about-doc/{id}', [MainController::class, 'dell_about_doc']) ->name('dell-about-doc')->middleware('auth');



//--------- Админка - Новости ------------------------------------------------------------------------------------------------------------------------

//Админка - Управление Новости
Route::get('/admin-news', [MainController::class, 'admin_news'])->name('admin-news')->middleware('auth');

//Админка - Создать Новость
Route::post('/admin/create-news', [MainController::class, 'create_news'])->name('create-news')->middleware('auth');

//Редактировать Новость
Route::get('/admin/edit-news/{id}', [MainController::class, 'edit_news']) ->name('edit-news')->middleware('auth');

//Обновить новость
Route::post('/admin/update-news/{id}', [MainController::class, 'update_news']) ->name('update-news')->middleware('auth');

//Удаление Новости
Route::get('/admin/dell-news/{id}', [MainController::class, 'dell_news']) ->name('dell-news')->middleware('auth');


//--------- Админка - Реализованные проекты ------------------------------------------------------------------------------------------------------------------------

//Админка - Управление Проектами
Route::get('/admin-projects', [MainController::class, 'admin_projects'])->name('admin-projects')->middleware('auth');

//Админка - Создать проект
Route::post('/admin/create-project', [MainController::class, 'create_project'])->name('create-project')->middleware('auth');

//Редактировать Проекта
Route::get('/admin/edit-project/{id}', [MainController::class, 'edit_project']) ->name('edit-project')->middleware('auth');

//Обновить Проекта
Route::post('/admin/update-project/{id}', [MainController::class, 'update_project']) ->name('update-project')->middleware('auth');

//Удаление Проекта
Route::get('/admin/dell-project/{id}', [MainController::class, 'dell_project']) ->name('dell-project')->middleware('auth');

//--------- Админка - Партнёры ------------------------------------------------------------------------------------------------------------------------

//Админка - Управление Партнёрами
Route::get('/admin-partner', [MainController::class, 'admin_partner'])->name('admin-partner')->middleware('auth');

//Админка - Партнёты - Создать карточку
Route::post('/admin/create-partner', [MainController::class, 'create_partner'])->name('create-partner')->middleware('auth');

//Редактирование Карточки партнёра
Route::get('/admin/edit-partner/{id}', [MainController::class, 'edit_partner']) ->name('edit-partner')->middleware('auth');

//Обновление Карточки партнёра
Route::post('/admin/update-partner/{id}', [MainController::class, 'update_partner']) ->name('update-partner')->middleware('auth');

//Удаление Карточки партнёра
Route::get('/admin/dell-partner/{id}', [MainController::class, 'dell_partner']) ->name('dell-partner')->middleware('auth');

//--------- Админка - Поддержка ------------------------------------------------------------------------------------------------------------------------

//Админка - Управление Поддержкой
Route::get('/admin-support', [MainController::class, 'admin_support'])->name('admin-support')->middleware('auth');



//Админка - Поддержка - Создать талон
Route::post('/admin/create-warranty', [MainController::class, 'create_warranty'])->name('create-warranty')->middleware('auth');

//Изменение талона
Route::get('/admin/edit-warranty/{id}', [MainController::class, 'edit_warranty']) ->name('edit-earranty')->middleware('auth');

//Обновление талона
Route::post('/admin/update-warranty/{id}', [MainController::class, 'update_warranty']) ->name('update-earranty')->middleware('auth');

//Удаление талона
Route::get('/admin/dell-warranty/{id}', [MainController::class, 'dell_warranty']) ->name('dell-earranty')->middleware('auth');




//Админка - Поддержка - Создать инструкцию
Route::post('/admin/create-manual', [MainController::class, 'create_manual'])->name('create-manual')->middleware('auth');

//Редактировать инструкции
Route::get('/admin/edit-manual/{id}', [MainController::class, 'edit_manual']) ->name('edit-manual')->middleware('auth');

//Обновить инструкции
Route::post('/admin/update-manual/{id}', [MainController::class, 'update_manual']) ->name('update-manual')->middleware('auth');

//Удаление инструкции
Route::get('/admin/dell-manual/{id}', [MainController::class, 'dell_manual']) ->name('dell-manual')->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
