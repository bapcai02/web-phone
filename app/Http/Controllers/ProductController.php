<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    
    public function all_product(){
        $product = DB::table('product')->orderBy('id','desc')->paginate(5);
        return view('backend.pages.all_product',compact('product'));
    }
    public function add_product(){
        $category = DB::table('category')->orderBy('id','desc')->get();
        $brand = DB::table('brand')->orderBy('id','desc')->get();
        $size =DB::table('size')->orderBy('id','desc')->get();
        return view('backend.pages.add_product',compact('brand','category','size'));
    }
    public function save_product(Request $req){
        
        $data = array();
        $data['name'] = $req->name;
        $data['price_unit'] = $req->price_unit;
        $data['price_promotion'] = $req->price_promotion;
        $data['status'] = $req->status;
        $data['category_id'] = $req->category;
        $data['brand_id'] = $req->brand;
        $data['size_id'] = $req->size;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = NULL;
        $data['total_quantity'] = $req->total_quantity;
        
        if(($req->file('image1')) && ($req->file('image2')==NULL) && (($req->file('image3'))==NULL)){
            $fileExtension1 = $req->file('image1')->getClientOriginalExtension(); 
            $fileName1 = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension1;
            $uploadPath = public_path('backend/images/product');
            $req->file('image1')->move($uploadPath, $fileName1);
            $data['image1']=$fileName1;
            $data['image2']="";
            $data['image3']="";
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
        else if(($req->file('image1')==NULL) && ($req->file('image2')) && (($req->file('image3'))==NULL)){
            $fileExtension2 = $req->file('image1')->getClientOriginalExtension(); 
            $fileName2 = time() . "_" . rand(0,9999999) . "." . $fileExtension2;
            $uploadPath = public_path('backend/images/product');
            $req->file('image2')->move($uploadPath, $fileName2);
            $data['image1']=$fileName2;
            $data['image2']="";
            $data['image3']="";
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
        else if(($req->file('image1')==NULL) && ($req->file('image2')==NULL) && (($req->file('image3')))){
            $fileExtension3 = $req->file('image1')->getClientOriginalExtension(); 
            $fileName3 = rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension3;
            $uploadPath = public_path('backend/images/product');
            $req->file('image1')->move($uploadPath, $fileName3);
            $data['image1']=$fileName3;
            $data['image2']="";
            $data['image3']="";
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
         else if(($req->file('image1')) && ($req->file('image2')) && (($req->file('image3'))==NULL)){
            $fileExtension1 = $req->file('image1')->getClientOriginalExtension(); 
            $fileExtension2 = $req->file('image2')->getClientOriginalExtension();
            $fileName1 = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension1;
            $fileName2 = time() . "_" . rand(0,9999999) . "." . $fileExtension2;
            $uploadPath = public_path('backend/images/product');
            $req->file('image1')->move($uploadPath, $fileName1);
            $req->file('image2')->move($uploadPath, $fileName2);
            $data['image1']=$fileName1;
            $data['image2']=$fileName2;
            $data['image3']="";
            // dd($data);
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
        else if(($req->file('image1')) && ($req->file('image2')==NULL) && (($req->file('image3')))){
            $fileExtension1 = $req->file('image1')->getClientOriginalExtension(); 
            $fileExtension3 = $req->file('image2')->getClientOriginalExtension();
            $fileName1 = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension1;
            $fileName3 = rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension3;
            $uploadPath = public_path('backend/images/product');
            $req->file('image1')->move($uploadPath, $fileName1);
            $req->file('image3')->move($uploadPath, $fileName3);
            $data['image1']=$fileName1;
            $data['image2']=$fileName3;
            $data['image3']="";
            // dd($data);
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
        else if(($req->file('image1')==NULL) && ($req->file('image2')) && (($req->file('image3')))){
            $fileExtension2 = $req->file('image2')->getClientOriginalExtension(); 
            $fileExtension3 = $req->file('image3')->getClientOriginalExtension();
            $fileName2 = time() . "_" . rand(0,9999999) . "." . $fileExtension2;
            $fileName3 = rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension3;
            $uploadPath = public_path('backend/images/product');
            $req->file('image1')->move($uploadPath, $fileName2);
            $req->file('image2')->move($uploadPath, $fileName3);
            $data['image1']=$fileName2;
            $data['image2']=$fileName3;
            $data['image3']="";
            // dd($data);
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
         else if(($req->file('image1')) && ($req->file('image2')) && ($req->file('image3'))) {
            $fileExtension1 = $req->file('image1')->getClientOriginalExtension(); 
            $fileExtension2 = $req->file('image2')->getClientOriginalExtension(); 
            $fileExtension3 = $req->file('image3')->getClientOriginalExtension(); 
            $fileName1 = time() . "_" . rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension1;
            $fileName2 = time() . "_" . rand(0,9999999) . "." . $fileExtension2;
            $fileName3 = rand(0,9999999) . "_" . md5(rand(0,9999999)) . "." . $fileExtension3;
			$uploadPath = public_path('backend/images/product');
            $req->file('image1')->move($uploadPath, $fileName1);
            $req->file('image2')->move($uploadPath, $fileName2);
            $req->file('image3')->move($uploadPath, $fileName3);
            $data['image1']=$fileName1;
            $data['image2']=$fileName2;
            $data['image3']=$fileName3;
            //  dd($data);
            DB::table('product')->insert($data);
            return redirect('all-product')->with('message','thêm sản phẩm thành công');
        }
        $data['image1']="";
        $data['image2']="";
        $data['image3']="";
        
        DB::table('product')->insert($data);
        return redirect('all-product')->with('message','thêm sản phẩm thành công');
		
    }
    public function edit_product($id){
        $product = DB::table('product')->where('product.id',$id)->get();
        $category = DB::table('category')->orderBy('id','desc')->get();
        $brand = DB::table('brand')->orderBy('id','desc')->get();
        $size =DB::table('size')->orderBy('id','desc')->get();
        return view('backend.pages.edit_product',compact('product','category','brand','size'));
    }
    public function update_product($id, Request $req){

        $data['name'] = $req->name;
        $data['price_unit'] = $req->price_unit;
        $data['price_promotion'] = $req->price_promotion;
        $data['status'] = $req->status;
        $data['category_id'] = $req->category;
        $data['brand_id'] = $req->brand;
        $data['size_id'] = $req->size;
        $data['updated_at'] = Carbon::now();

        DB::table('product')->where('id',$id)->update($data);

        return   redirect('all-product')->with('message', 'Sửa thành công');
    }
    public function detete_product($id){
        
        DB::table('product')->where('id',$id)->delete();
        return redirect('all-product')>with('message', 'Xoá thành công');;
    }
}
