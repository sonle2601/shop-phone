<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\CartService;
use App\Models\Cart;
use PHPUnit\Exception;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function __construct(CartService $cartService){
        $this->cartService = $cartService;
    }

    public function index(Request $request){
        $result = $this->cartService->create($request);
        return redirect()->back();
    }

    public function show(){
        // dd($this->cartService->getCart());
        return view('user.cart',[
            'title'=>'Giỏ hàng',
            'products'=>$this->cartService->getCart(),
        ]);
    }

    public function deleteCart($productId)
    {
        // dd($productId);
        $result = $this->cartService->delete($productId);
        return redirect()->back();
    }
    
    
    public function update(Request $request)
{
    $result = $this->cartService->updateCart($request);
    return redirect()->back();
}

public function buy(Request $request)
{
    $productIds = $request->input('productIds');

    // Xử lý mua sản phẩm với các productIds đã chọn
    // ...
    dd($productIds);

    // return redirect()->back()->with('success', 'Mua sản phẩm thành công');
}

   
}