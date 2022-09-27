<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Mainslide;
use App\Models\Abouttext;
use App\Models\Aboutcard;
use App\Models\Aboutdoc;
use App\Models\News;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;


class MainController extends Controller
{

// Главная станицаа
    public function index(){
        $mainslide = new Mainslide();
        return view('index',['mainslide'=> $mainslide->all()]);
    }


// О нас 
    public function about(){
        $abouttext = Abouttext::first();
        $aboutcard = new Aboutcard();
        $aboutdoc = new Aboutdoc();
        return view('about',['abouttext'=>$abouttext,'aboutcard'=>$aboutcard->all(),'aboutdoc'=>$aboutdoc->all()]);
    }


//Программные продукты
    public function app_product(){
        $product = new Product();
        return view('app-product',['product'=>$product->where('product_type','product_type-1')->get()]);
    }

//Программные продукты соло страница
    public function app_product_single_page($id){
        $product = new Product();
        $soloProduct = $product::find($id);

        // $docArr = [];
        // foreach($soloProduct->single_page_documents as $el){
        //     $docInfo = pathinfo($el[0]);
        //     array_push($docArr, $docInfo);
        // }
        // dd($docArr);

        preg_match_all("/\{(.+?)\}/", $soloProduct->single_page_parameters, $matches);
        $paramarr = [];
        foreach($matches[0] as $el){
        $jarr = json_decode($el);
        array_push($paramarr, $jarr);
        }

        $soloparamiters =$paramarr;

        // dd($soloProduct->single_page_documents);
        return view('app-product-single-page',['product'=>$product->where('product_type','product_type-1')->get(),'soloproduct'=>$soloProduct,'soloparamiters'=>$soloparamiters]);
    }


//Программно-аппаратные продукты 
    public function app_hard_product(){
        $product = new Product();

        return view('app-hard-product',['product'=>$product->where('product_type','product_type-2')->get()]);
    }

//Программно-аппаратные продукты соло страница
    public function app_hard_product_single_page($id){
        $product = new Product();
        $soloProduct = $product::find($id);

        // $docArr = [];
        // foreach($soloProduct->single_page_documents as $el){
        //     $docInfo = pathinfo($el[0]);
        //     array_push($docArr, $docInfo);
        // }
        // dd($docArr);

        preg_match_all("/\{(.+?)\}/", $soloProduct->single_page_parameters, $matches);
        $paramarr = [];
        foreach($matches[0] as $el){
        $jarr = json_decode($el);
        array_push($paramarr, $jarr);
        }

        $soloparamiters =$paramarr;

        // dd($soloProduct->single_page_documents);
        return view('app-hard-product-single-page',['product'=>$product->where('product_type','product_type-2')->get(),'soloproduct'=>$soloProduct,'soloparamiters'=>$soloparamiters]);
    }


//Новости
    public function news_list(){
        $news =new News();

        return view('news-list',['news'=>$news->all()]);
    }


//Новости соло страница
    public function news_single_page($id){
        $news =News::find($id);
        return view('single-news',['news'=>$news]);
    }


//Реализованные проекты
    public function refiled_projects(){
        $project= Project::all();
        return view('refiled-projects',['project'=>$project]);
    }


//Реализованные проекты соло страница
    public function refiled_projects_single_page($id){
        $project= Project::find($id);
        $projectLincArr = json_decode($project->links_to_send);
        return view('refiled-projects-single-page',['project'=>$project]);
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

//--------------------------- Управление Главным слайдером -------------------------------------

//Админка - Управление Главным слайдером

    public function admin_home_page(){
        $product = new Product();
        $sainslide = new Mainslide();

      return view('admin-home-page',['product' => $product->all(),'sainslide' => $sainslide->all()]);
    }

//Создание Главного слайдера
    public function create_home_page(Request $request){

        // dd($request->file('imade_mine_slide'));

        $mainslide = new Mainslide();

            $image = $request->file('image_mine_slide')->store('storage', 'image_mine_slide');

            $img = Image::make( $request->file('image_mine_slide'))->save('storage/image_mine_slide/'.$image); //->resize(111, 26)

            // Storage::disk('image_mine_slide')->delete(Contact::find($id)->contact_image);
        
        $mainslide->image_mine_slide = $image;
        $mainslide->b_title_mine_slide = $request->input('b_title_mine_slide');
        $mainslide->g_title_mine_slide = $request->input('g_title_mine_slide');
        $mainslide->subtitle_mine_slide = $request->input('subtitle_mine_slide');
        $mainslide->link_mine_slide = $request->input('link_mine_slide');

        $mainslide->save();

      return redirect()->route('admin-home-page');

    }

// Редактирование Главного слайдера
    public function edit_home_page($id){
        return redirect()->route('admin-home-page');
    }

//Обновление Главного слайдера
    public function update_home_page(){

        return redirect()->route('admin-home-page');
    }

// Для удаления Главного слайдера
        public function dell_home_page($id){
            $mainslide = Mainslide::find($id);
            
            Storage::disk('image_mine_slide')->delete($mainslide->image_mine_slide);
            
            $mainslide->delete();

            return redirect()->route('admin-home-page');

        }

//--------------------------- Управление продуктами -------------------------------------

//Админка - Управление продуктами

    public function admin_product(){
        $product = new Product();
        $hardproduct = Product::where('product_type','product_type-1')->get();
        $appproduct = Product::where('product_type','product_type-2')->get();
      return view('admin-product',['product'=>$product->all(),'hardproduct'=>$hardproduct,'appproduct'=>$appproduct]);
    }

//Создание продукта
    public function create_product(Request $request){
        $product_page_bico = $request->file('single_page_bico')->store('storage', 'product_page_ico');
        $bimg = Image::make( $request->file('single_page_bico'))->save('storage/product_page_ico/'.$product_page_bico); //->resize(111, 26)
        
        $product_page_gico = $request->file('single_page_gico')->store('storage', 'product_page_ico');
        $gimg = Image::make( $request->file('single_page_gico'))->save('storage/product_page_ico/'.$product_page_gico); //->resize(111, 26)

        $slides_image = $request->file('single_page_slides');
        $arr=array();
        
        foreach($slides_image as $img){

            $c=$img->store('public','product_slides_image');
            array_push($arr,$c);
        }
        
        
        $document_files = $request->file('single_page_documents');
        $document_arr = array();
        $keyarr = array();
        
        foreach($document_files as $doc){
            $v=($doc->getClientOriginalName());
            $z=$doc->store('public','product_document');
            $document_arr[$v]=$z;
        }
        
        $product = new Product();
        $product->product_type = $request->input('product_type');
        $product->single_page_bico = $product_page_bico; //$request->input('single-page-bico');
        $product->single_page_gico = $product_page_gico; //$request->input('single-page-gico');
        $product->nav_title = $request->input("nav_title");
        $product->b_single_page_title = $request->input('b_single_page_title');
        $product->g_single_page_title = $request->input("g_single_page_title");
        $product->single_page_slides = $arr; //$request->input('single-page-slides');
        $product->single_page_sudtitle = $request->input('single_page_sudtitle');
        $product->single_page_purpose = $request->input("single-page-purpose");
        $product->single_page_parameters = $request->input("single_page_parameters");
        $product->single_page_metadescription = $request->input("single_page_metadescription");
        $product->single_page_metakeywords = $request->input("single_page_metakeywords");
        $product->single_page_documents = $document_arr;
        
        $product->save();

      return redirect()->route('admin-product');

    }

// Редактирование продукта
    public function edit_product($id){
        $product = Product::find($id);
        $soloProduct = Product::find($id);

        preg_match_all("/\{(.+?)\}/", $soloProduct->single_page_parameters, $matches);
        $paramarr = [];
        foreach($matches[0] as $el){
            $jarr = json_decode($el);
            array_push($paramarr, $jarr);
        }

        $soloparamiters =$paramarr;

        return  view('admin-product-edit',['product'=>$product, 'soloparamiters'=>$soloparamiters]);
    }

//Обновление продукта
    public function update_product(Request $request,$id){
        $product = Product::find($id);

        if($request->file('single_page_bico')){
            Storage::disk('product_page_ico')->delete($product->single_page_bico);

            $product_page_bico = $request->file('single_page_bico')->store('storage', 'product_page_ico');
            $bimg = Image::make( $request->file('single_page_bico'))->save('storage/product_page_ico/'.$product_page_bico); //->resize(111, 26)
        }else{
            $product_page_bico = $product->single_page_bico;
        }
        
        if($request->file('single_page_gico')){
            Storage::disk('product_page_ico')->delete($product->single_page_gico);

            $product_page_gico = $request->file('single_page_gico')->store('storage', 'product_page_ico');
            $gimg = Image::make( $request->file('single_page_gico'))->save('storage/product_page_ico/'.$product_page_gico); //->resize(111, 26)
        }else{
           $product_page_gico = $product->single_page_gico;
        }


        if($slides_image = $request->file('single_page_slides')){

            foreach($product->single_page_slides as $el){
                Storage::disk('product_slides_image')->delete($el);
            }

            $slides_image = $request->file('single_page_slides');
            $arr=array();
            foreach($slides_image as $img){
    
                $c=$img->store('public','product_slides_image');
                array_push($arr,$c);
            }
        }else{
          $arr = $product->single_page_slides;
        }
        
        if($request->file('single_page_documents')){

            foreach($product->single_page_documents as $el){
                Storage::disk('product_document')->delete($el);
            }

            $document_files = $request->file('single_page_documents');
            $document_arr = array();
            $keyarr = array();
            
            foreach($document_files as $doc){
                $v=($doc->getClientOriginalName());
                $z=$doc->store('public','product_document');
                $document_arr[$v]=$z;
            }
        }else{
            $document_arr = $product->single_page_documents;
        }
        
        
        $product->product_type = $request->input('product_type');
        $product->single_page_bico = $product_page_bico;
        $product->single_page_gico = $product_page_gico;
        $product->nav_title = $request->input("nav_title");
        $product->b_single_page_title = $request->input('b_single_page_title');
        $product->g_single_page_title = $request->input("g_single_page_title");
        $product->single_page_slides = $arr;
        $product->single_page_sudtitle = $request->input('single_page_sudtitle');
        $product->single_page_purpose = $request->input("single-page-purpose");
        $product->single_page_parameters = $request->input("single_page_parameters");
        $product->single_page_metadescription = $request->input("single_page_metadescription");
        $product->single_page_metakeywords = $request->input("single_page_metakeywords");
        $product->single_page_documents = $document_arr;
        
        $product->save();



        return redirect()->route('admin-product');
    }

// Для удаления продукта
        public function dell_product($id){
                $prpoduct = Product::find($id);
                
                // Storage::disk('contacts_image')->delete($contact->contact_image);
                
                $prpoduct->delete();

            return redirect()->route('admin-product');

        }

//--------------------------- Управление О нас -------------------------------------

//Админка - Управление продуктами

    public function admin_about(){
        if($abouttext = Abouttext::first()){

            $abouttext = Abouttext::first();
        }else{
            $abouttext = new Abouttext();
            $abouttext->about_subtitle = '';
            $abouttext->save();
        }

        $aboutcard = new Aboutcard();
        $aboutdoc = new Aboutdoc();
        
        return view('admin-about',['abouttext'=>$abouttext,'aboutcard'=>$aboutcard->all(),'aboutdoc'=>$aboutdoc->all()]);
    }        

//Админка - Обновить подзаголовок О нас

    public function change_adout_subtitle(Request $request){
        $abouttext = Abouttext::first();

        $abouttext->about_subtitle = $request->input("about_subtitle");
        
        $abouttext->save();
        $aboutcard = new Aboutcard();
        $aboutdoc = new Aboutdoc();
        

        return view('admin-about',['abouttext'=>$abouttext,'aboutcard'=>$aboutcard->all(),'aboutdoc'=>$aboutdoc->all()]);
    }        

//Создать карточку О нас

    public function create_adout_card(Request $request){
        $abouttext = Abouttext::first();
        $aboutcard = new Aboutcard();
        $aboutdoc = new Aboutdoc();

        $adout_card_image = $request->file('adout_card_image')->store('storage', 'adout_card_image');
        $adoutimg = Image::make( $request->file('adout_card_image'))->save('storage/adout_card_image/'.$adout_card_image); //->resize(111, 26)

        $aboutcard->adout_card_image = $adout_card_image;
        $aboutcard->adout_card_text = $request->input("adout_card_text");
        $aboutcard->adout_card_date = $request->input("adout_card_date");
        
        $aboutcard->save();
        

        return view('admin-about',['aboutcard'=>$aboutcard->all(),'abouttext'=>$abouttext,'aboutdoc'=>$aboutdoc->all()]);
    }        

//Удалить карточку О нас

    public function dell_about_card($id){
        $aboutcard = Aboutcard::find($id);
        
        Storage::disk('adout_card_image')->delete($aboutcard->adout_card_image);
        
        $aboutcard->delete();

        return redirect()->route('admin-about');

    }
    
//Создать документ О нас

    public function create_adout_doc(Request $request){
        $abouttext = Abouttext::first();
        $aboutcard = new Aboutcard();
        $aboutdoc = new Aboutdoc();

        $adout_doc_file = $request->file('adout_doc_file')->store('storage', 'adout_doc_file');

        $aboutdoc->adout_doc_file= $adout_doc_file;
        $aboutdoc->adout_doc_title = $request->input("adout_doc_title");
        
        $aboutdoc->save();
        

        return view('admin-about',['aboutcard'=>$aboutcard->all(),'abouttext'=>$abouttext,'aboutdoc'=>$aboutdoc->all()]);
    }
    
//Удалить документ О нас

    public function dell_about_doc($id){

        $aboutdoc = Aboutdoc::find($id);
        
        Storage::disk('adout_doc_file')->delete($aboutdoc->adout_doc_file);
        
        $aboutdoc->delete();

        return redirect()->route('admin-about');

}
 
//--------------------------- Управление Новости -------------------------------------

//Админка - Управление новостями

    public function admin_news(){
        $news = new News();
  
        return view('admin-news',['news'=>$news->all()]);
    } 


//Создать новость

public function create_news(Request $request){
    $news = new News();

    $image_news = $request->file('image_news')->store('storage', 'image_news');
    $newsimg = Image::make( $request->file('image_news'))->save('storage/image_news/'.$image_news); //->resize(111, 26)

    $thumbnail_news = $request->file('thumbnail_news')->store('storage', 'image_news');
    $thumbnailimg = Image::make( $request->file('thumbnail_news'))->save('storage/image_news/'.$thumbnail_news)->resize(343, 174); //

    $news->thumbnail_news = $thumbnail_news;
    $news->image_news = $image_news;
    $news->b_title_news = $request->input("b_title_news");
    $news->g_title_news = $request->input("g_title_news");
    $news->subtitle_news = $request->input("subtitle_news");
    $news->top_text_news = $request->input("top_text_news");
    $news->bottom_text_news = $request->input("bottom_text_news");
    $news->elink_text_news = $request->input("elink_text_news");
    $news->elink_link_news = $request->input("elink_link_news");
    $news->description_news = $request->input("description_news");
    $news->keywords_news = $request->input("keywords_news");
    $news->date_news = $request->input("date_news");
    
    $news->save();
    

    return view('admin-news',['news'=>$news->all()]);
}

// Для удаления продукта
    public function dell_news($id){
        $news = News::find($id);
        
        Storage::disk('image_news')->delete($news->thumbnail_news);
        Storage::disk('image_news')->delete($news->image_news);
        
        $news->delete();

    return redirect()->route('admin-news');

}
 
//--------------------------- Управление Проектами -------------------------------------

//Админка - Управление Проектами

    public function admin_projects(){
        $project = new Project();
  
        return view('admin-project',['project'=>$project->all()]);
    } 


//Создать Проект

public function create_project(Request $request){
    
    $project = new Project();

    
    // $image_project = $request->file('image_project')->store('storage', 'image_project');
    // $projectimg = Image::make( $request->file('image_project'))->save('storage/image_project/'.$image_project); //->resize(111, 26)
    
    $thumbnail_project = $request->file('thumbnail_project')->store('storage', 'image_project');
    $thumbnailpimg = Image::make( $request->file('thumbnail_project'))->save('storage/image_project/'.$thumbnail_project)->resize(343, 174); //
    
    
    $pslides_image = $request->file('image_project');
    $parr=array();
    
    foreach($pslides_image as $img){

        $c=$img->store('public','image_project');
        array_push($parr,$c);
    }

    $pdocument_files = $request->file('document_project');
    $pdocument_arr = array();
    // $pkeyarr = array();
    
    foreach($pdocument_files as $pdoc){
        $v=($pdoc->getClientOriginalName());
        $z=$pdoc->store('public','document_project');
        $pdocument_arr[$v]=$z;
    }
    // dd($pdocument_arr);
    
    $project->thumbnail_project = $thumbnail_project;
    $project->image_project = $parr;
    $project->b_title_project = $request->input("b_title_project");
    $project->g_title_project = $request->input("g_title_project");
    $project->subtitle_project = $request->input("subtitle_project");
    $project->full_text_project = $request->input("full_text_project");
    $project->links_to_send = $request->input("links-to-send");
    $project->document_project = $pdocument_arr;
    $project->description_project = $request->input("description_project");
    $project->keywords_project = $request->input("keywords_project");
    
    $project->save();
    

    return redirect()->route('admin-projects');
}

// Для удаления Проекта
    public function dell_project(){

    return redirect()->route('admin-projects');

}

}// Закрывает контроллер 

