<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;
use App\Contact;
use Cart;

class PageController extends Controller
{   
    //homepage
    public function main()
    {
        $categories = Category::where('publication_status',1)->get();
   
      $newProducts = Product::where('publication_status',1)
                                    ->orderBy('id','DESC')
                                    ->take(3)
                                    ->get();
      $featureProducts = Product::where('publication_status',1)
                                    ->orderBy('id','ASC')
                                    ->take(8)
                                    ->get();
        $bestProducts = Product::where('publication_status',1)
                                    ->orderBy('id','ASC')
                                    ->take(8)
                                    ->get();                             
        return view('front_end.home.index',['categories'=>$categories,'newProducts'=>$newProducts,'featureProducts' => $featureProducts,'bestProducts' => $bestProducts ]);
    }
    //category page
   public function index(){
    $categories = Category::where('publication_status',1)->get();
   
    $newProducts = Product::where('publication_status',1)->orderBy('id','DESC')->get();
    return view('front_end.pages.category',['categories'=>$categories,'newProducts'=>$newProducts]);
    }

   //single category
   public function categorydetails($id){
    $categories = Category::where('publication_status',1)->get();
        $categoryProducts = Product::where('category_id',$id)
                            ->where('publication_status',1)
                            ->get();
        return view('front_end.category.men-category',[
            'categoryProducts' => $categoryProducts,
            'categories'=>$categories
        ]);
    }
     //singleproduct
    public function showsingleproduct($id){
        $product = Product::find($id);
    	return view('front_end.pages.single_product',['product'=>$product]);
    }

    public function showproductcheckout(){

    	return view('front_end.pages.product_checkout');
    }

    public function showconfermationpage(){

    	return view('front_end.pages.confermation');
    }

    

    public function showblogpage(){

    	return view('front_end.pages.blog');

    }

    public function showsingleblogpage(){

    	return view('front_end.pages.single_blog');
    }
    

    public function showtrackpage(){

    	return view('front_end.pages.track');
    }

    public function showcontactpage(){
        $contacts = Contact::where('publication_status',1)->get();
   
    	return view('front_end.pages.contact',['contacts'=>$contacts]);
    }
}
