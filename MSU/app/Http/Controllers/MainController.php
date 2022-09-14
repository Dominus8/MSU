<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;


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


//Новости соло страница
    public function news_single_page(){
        return view('single-news');
    }


//Реализованные проекты
    public function refiled_projects(){
        return view('refiled-projects');
    }


//Реализованные проекты соло страница
    public function refiled_projects_single_page(){
        return view('refiled-projects-single-page');
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
        $contact = new Contact();
        return view('contacts',['contact'=>$contact->all()]);
    }

//------------------------- Админка ---------------------------------------------------

//Админка
    public function admin(){
        $contact = new Contact();
        return view('admin',['contact'=>$contact->all()]);
    }

//Админка - Управление контактами

public function admin_contact(){
    $contact = new Contact();
    return view('admin-contact',['contact'=>$contact->all()]);
}

//Создание карточки кнтактов
        public function create_contact(Request $request){
            
            // $valid = $request->validate([
            //     'contact_image'=>'required',
            //     'contact_title'=>'required|max:200',
            //     'contact_adres'=>'required|max:200',
            //     'contact_phone'=>'required|max:150',
            //     'contact_mail'=>'required|max:150',
            // ]);
            // dd($request);
            $image = $request->file('contact_image')->store('storage', 'contacts_image');
            $img = Image::make( $request->file('contact_image'))->save('storage/contacts_image/'.$image); //->resize(111, 26)
    
            $contact = new Contact();
            $contact->contact_image = $image;
            $contact->contact_title = $request->input('contact_title');
            $contact->contact_adress = $request->input('contact_adress');
            $contact->contact_phone = $request->input('contact_phone');
            $contact->contact_mail = $request->input('contact_mail');
    
            $contact->save();
    
            return redirect()->route('admin-contact');

    }

// Редактирование карточки направления
    public function edit_contact($id){

        $contact = new Contact;

        return view('editcontact',['contact'=>$contact->find($id)]);
    }

//Обновление карточки кнтактов
    public function update_contact($id, Request $request){

        // $valid = $request->validate([
        //     'contact_body'=>'required|max:200',
        //     'contact_phone'=>'required|max:150',
        //     'contact_mail'=>'required|max:150',
        // ]);

        if($request->file('contact_image')){
            $image = $request->file('contact_image')->store('storage', 'contacts_image');

            $img = Image::make( $request->file('contact_image'))->save('storage/contacts_image/'.$image); //->resize(111, 26)

            Storage::disk('contacts_image')->delete(Contact::find($id)->contact_image);

        }else{
            $image = Contact::find($id)->contact_image;
        }

        $contact = Contact::find($id);
        $contact->contact_image = $image;
        $contact->contact_title = $request->input('contact_title');
        $contact->contact_adress = $request->input('contact_adress');
        $contact->contact_phone = $request->input('contact_phone');
        $contact->contact_mail = $request->input('contact_mail');

        $contact->save();

        return redirect()->route('admin-contact');
}

// Для удаления карточек контактов
        public function dell_contact($id){

            $contact = Contact::find($id);
            
            // Storage::disk('contacts_image')->delete($contact->contact_image);
            
            $contact->delete();

            return redirect()->route('admin-contact');

        }

//--------------------------- Управление продуктами -------------------------------------

//Админка - Управление продуктами

    public function admin_home_page(){
      return view('admin-home-page');
    }

//Создание продукта
    public function create_home_page(Request $request){
        dd($request);
      return redirect()->route('admin-home-page');

    }

// Редактирование продукта
    public function edit_home_page($id){
        return redirect()->route('admin-home-page');
    }

//Обновление продукта
    public function update_home_page(){

        return redirect()->route('admin-home-page');
    }

// Для удаления продукта
        public function dell_home_page($id){


            return redirect()->route('admin-home-page');

        }

//--------------------------- Управление продуктами -------------------------------------

//Админка - Управление продуктами

    public function admin_product(){
      return view('admin-product');
    }

//Создание продукта
    public function create_product(Request $request){
        // dd($request);
//    dd($request->input("single_page_parameters"));
        //$image = $request->file('contact_image')->store('storage', 'contacts_image');
        //$img = Image::make( $request->file('contact_image'))->save('storage/contacts_image/'.$image); //->resize(111, 26)

        $product = new Product();
//        $product->contact_image = "image";
        $product->product_type = $request->input('product_type');
        $product->single_page_bico = "single_page_bico"; //$request->input('single-page-bico');
        $product->single_page_gico = "single_page_gico"; //$request->input('single-page-gico');
        $product->nav_title = $request->input("nav_title");
        $product->b_single_page_title = $request->input('b_single_page_title');
        $product->g_single_page_title = $request->input("g_single_page_title");
        $product->single_page_slides = "single_page_slides";//$request->input('single-page-slides');
        $product->single_page_sudtitle = $request->input('single_page_sudtitle');
        $product->single_page_purpose = $request->input("single-page-purpose");
        $product->single_page_parameters = $request->input("single_page_parameters");
        $product->single_page_documents ='single_page_documents' ;//$request->input()

        $product->save();

      return redirect()->route('admin-product');

    }

// Редактирование продукта
    public function edit_product($id){
        return redirect()->route('admin-product');
    }

//Обновление продукта
    public function update_product(){

        return redirect()->route('admin-product');
    }

// Для удаления продукта
        public function dell_product($id){


            return redirect()->route('admin-product');

        }

}// Закрывает контроллер 
