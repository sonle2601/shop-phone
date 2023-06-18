<?php

namespace App\Http\Service;

use Illuminate\Support\Str;
use App\Models\Product;
use PHPUnit\Exception;
use App\Models\Category;

class ProductService
{
    public function create($request){
        $request->validate([
            'ProImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('ProImage');
        $imageName = Str::slug($request->input('ProName'), '-').'.'. $image->getClientOriginalExtension();
        $destinationPath = public_path('/template_admin/img');
        $image->move($destinationPath, $imageName);
        
        try {
            Product::create([
                'ProName'=>$request->input('ProName'),
                'ProImage'=>$imageName,
                'ProCate'=>$request->input('ProCate'),
                'ProQuantity'=>$request->input('ProQuantity'),
                'ProPrice'=>$request->input('ProPrice'),
                'ProInfo'=>$request->input('ProInfo'),
                'ProDes'=>$request->input('ProDes'),
                'ProSlug'=>Str::slug($request->input('ProName'), '-'),
            ]);
        
            Session()->flash('success','Thêm sản phẩm thành công');
        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
    public function getAll(){
        return Product::All();
    }


    public function edit($product, $request){
            $imagePath = public_path('/template_admin/img/'.$product->ProImage);
            if (file_exists($product->ProImage)) {
                unlink($imagePath);
               
            }
            $request->validate([
                'ProImage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
                $image = $request->file('ProImage');
                $imageName = Str::slug($request->input('ProName'), '-').'.'. $image->getClientOriginalExtension();
                $destinationPath = public_path('/template_admin/img');
                $image->move($destinationPath, $imageName);
        try {
            $product->ProName = $request->input('ProName');
            $product->ProImage = $imageName;
            $product->ProCate = $request->input('ProCate');
            $product->ProQuantity = $request->input('ProQuantity');
            $product->ProPrice = $request->input('ProPrice');
            $product->ProInfo = $request->input('ProInfo');
            $product->ProDes = $request->input('ProDes');
            $product->ProSlug = Str::slug($request->input('ProName'), '-');
            $product->save();
            Session()->flash('success','Cập nhật sản phẩm thành công');

            return true;
        }
        catch (Exception $ex){
            Session()->flash('error','Cập nhật sản phẩm thất bại');
        }
        return false;
    }

    public function delete($product){

        try{
            $id = (int) $product->id;
        $result = Product::where('id', $id)->first();
        if($product){
            return  Product::where('id', $id)->delete();
        }
        Session()->flash('success','Xóa sản phẩm thành công'); 
        return true; 
        }catch(Exception $ex){
            Session()->flash('error','Xóa sản phẩm thất bại');
        }
        return false;
       

    }

    public function showProduct(){
       return Product::paginate();
    }
    public function getCategory(){
        return Category::All();
     }


    public function getMobile(){
        
        return Product::where('ProCate', 1)->get();
    
    }

    public function getTab(){
        return Product::where('ProCate', 2)->get();
    }

    public function getlaptop(){
        return Product::where('ProCate', 3)->get();
    }


    public function getWatch(){
        return Product::where('ProCate', 4)->get();
    }

    public function getAccessory(){
        return Product::where('ProCate', 5)->get();
    }
   
    
}