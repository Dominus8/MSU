<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Contact;
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
        $contact = new Contact();
        return view('contacts',['contact'=>$contact->all()]);
    }


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
}// Закрывает контроллер 
