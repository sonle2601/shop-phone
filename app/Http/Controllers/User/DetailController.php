<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Service\ProductService;



class DetailController extends Controller
{
   
    protected $ProductService;
    public function __construct( ProductService $ProductService ){
        
        $this->ProService = $ProductService;
    }
    public function getDetail(Product $product){
       
        return view('user.detail_product',[
            'title'=>$product->ProName,
            'products'=>$product,
            'alls'=>$this->ProService->getAll(),
        ]);
       
    }
}