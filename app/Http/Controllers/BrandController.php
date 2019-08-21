<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{
  public function index()
    {
        return view('admin.brand.add-brand');
    }

    public function saveBrand(Request $request){
        $this->validate($request,[
            'brand_name' => 'required|regex:/^[a-z ,.\-]+$/i|max:10|min:4',
            'brand_description' => 'required',
            'publication_status' => 'required',
        ]);


        $brand = new Brand();

        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;

        $brand->save();

        return redirect('/brand/add')->with('message','Brand Saved Successfully');
    }

     public function manageBrand(){
        $brands = Brand::all();
    	return view('admin.brand.manage_brand',['brands' => $brands]);
    }

    public function unpublishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();

        return redirect('/brand/manage');
    }

    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();

        return redirect('/brand/manage');
    }

    public function editBrand($id){
        $brand = Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);
    }

     public function updateBrand(Request $request){
        $brand = Brand::find($request->id);

        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();

        return redirect('/brand/manage')->with('message','Brand Updated Successfully');
    }

    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();

        return redirect('/brand/manage')->with('message','Brand deleted successfully');
    }


}
