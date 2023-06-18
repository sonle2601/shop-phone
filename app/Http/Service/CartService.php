<?php

namespace App\Http\Service;

use Illuminate\Support\Str;
use App\Models\Product;
use PHPUnit\Exception;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\User;




class CartService
{
    public function create($request){
        $quantity = (int)$request->input('num-product');
        $product_id = (int)$request->input('product_id');
        $user_id = (int)$request->input('user_id');
        $color = $request->input('color');
        $info = $request->input('info');
        if($quantity<= 0 || $product_id <= 0 || $user_id<=0){
            session()->flash('error', 'Số lượng sản phẩm hoặc mã sản phẩm sai');
            redirect()->back();
            return false;
        }

        $exist = Cart::where('ProId', $product_id)
        ->where('UserId', $user_id)
        ->first();
        // dd($exist);
        if($exist){
            try {
                $exist->quantity = $exist->quantity + $quantity;
                $exist->color = $color;
                $exist->info = $info;
                $exist->save();
                Session()->flash('success','Cập nhật sản phẩm thành công');
                return true;
            }
            catch (Exception $ex){
                Session()->flash('error',$ex->getMessage());
                return false;
            }
        }

        else{
            try {
                Cart::create([
                    'UserId'=>(int)$request->input('user_id'),
                    'ProId'=>(int)$request->input('product_id'),
                    'quantity'=> (int)$request->input('num-product'),
                    'color'=>$request->input('color'),
                    'info'=>$request->input('info'),
                  
                ]);
            
            }
            catch (Exception $ex){
                Session()->flash('error',$ex->getMessage());
                return false;
            }
            return true;
        }
        }

       public function getCart(){
        $user_id = session('user_id');
        $user = User::find($user_id);
        $products = $user->products()->withPivot(['quantity','color','info'])->get();
       return  $products;
       }
       
       public function updateCart($request){
        $quantitys = $request->input('num-product');
        $colors = $request->input('color');
        $infos = $request->input('info');
        $productId = $request->input('productId');
        session()->put('productId', $productId);
    
        // $allColors = array_values($colors);
        // $arrs[] = [$quantity,$colors,$info,$productId];
       
        // foreach ($arrs as $arr) {
        //     foreach ($arr as $item) {
            //         $productId = $arr[0];
            //         $quantity = $arr[1];
            //         $color = $arr[2];
            //         $info = $arr[3];
            
            //     }
            // }
            foreach ($quantitys as $productId => $quantity) {
    
                $cart = Cart::where('ProId', $productId)->first();
        
                if ($cart) {
                    try {
                        $cart->quantity = $quantity;
                        $cart->save();
                    } catch (Exception $ex) {
                        session()->flash('error', $ex->getMessage());
                        return false;
                    }
                }
            }
           
            foreach ($colors as $productId => $color) {
                $cart = Cart::where('ProId', $productId)->first();
    
                if ($cart) {
                    try {
                        $cart->color = $color;
                        $cart->save();
                    } catch (Exception $ex) {
                        session()->flash('error', $ex->getMessage());
                        return false;
                    }
                }
            }
            
        foreach ($infos as $productId => $info) {
            $cart = Cart::where('ProId', $productId)->first();
            if($cart){
                try {
                    $cart->info = $info;
                    $cart->save();
                }
                catch (Exception $ex){
                    Session()->flash('error',$ex->getMessage());
                    return false;
                }
            }
    
        }
        
       
       }
       public function delete($productId)
       {
           try {
               $cart = Cart::where('ProId', $productId)->first();
               
               if ($cart) {
                   $cart->delete();
                   session()->flash('success', 'Xóa sản phẩm thành công');
                   return true;
               }
               
               session()->flash('error', 'Không tìm thấy sản phẩm trong giỏ hàng');
           } catch (Exception $ex) {
               session()->flash('error', 'Xóa sản phẩm thất bại: ' . $ex->getMessage());
           }
           
           return false;
       }
       
        
    }