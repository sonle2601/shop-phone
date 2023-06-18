<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\SliderService;
use App\Http\Service\ProductService;
use App\Models\Product;
use App\Models\Category;


class MainController extends Controller
{
    protected $slider;
    protected $ProductService;
    public function __construct(SliderService $slider , ProductService $ProductService ){
        $this->slider = $slider;
        $this->ProService = $ProductService;
    }

   
    public function index(){
        return view('user.home', [
            "title"=>'Trang chủ',
            'sliders'=>$this->slider->show(),
            // 'products'=>$this->ProService->showProduct(),
            'mobiles'=>$this->ProService->showMobile(),
            'tabs'=>$this->ProService->showTab(),
            'laptops'=>$this->ProService->showLaptop(),
            'watchs'=>$this->ProService->showWatch(),
            'accessorys'=>$this->ProService->showAccessory(),
            'categorys'=>$category,

        ]);
    }


    // public function getProduct(Request $request)
    // {
    //     $products = Product::All();

    //     if ($request->ajax()) {
    //         $view = view('user.data_product', compact('products'))->render();
   
    //         return response()->json(['html' => $view]);
    //     }
   
    //     return view('user.home', compact('products'),[
    //         'title'=>'Trang chủ',
    //         'sliders'=>$this->slider->show(),
    //         'categorys'=>$this->ProService->getCategory(),

           
    //     ]);
    // }
    
    public function getMobile(){
        return view ('user.mobile',[
            'title'=>"Di động",
            'sliders'=>$this->slider->show(),
            'mobiles'=>$this->ProService->getMobile(),
        ]);
    }

    public function getProduct(){
        return view ('user.home',[
            'title'=>"Di động",
            'sliders'=>$this->slider->show(),
            'mobiles'=>$this->ProService->getMobile(),
            'tabs'=>$this->ProService->getTab(),
            'laptops'=>$this->ProService->getLaptop(),
            'watchs'=>$this->ProService->getWatch(),
            'accessorys'=>$this->ProService->getAccessory(),
        ]);
    }
    public function getTab(){
        return view ('user.tab',[
            'title'=>"Di động",
            'sliders'=>$this->slider->show(),
            'tabs'=>$this->ProService->getTab(),
        ]);
    }
    public function getLaptop(){
        return view ('user.laptop',[
            'title'=>"Di động",
            'sliders'=>$this->slider->show(),
            'laptops'=>$this->ProService->getLaptop(),
        ]);
    }
    public function getWatch(){
        return view ('user.watch',[
            'title'=>"Di động",
            'sliders'=>$this->slider->show(),
            'watchs'=>$this->ProService->getWatch(),
        ]);
    }
    public function getAccessory(){
        return view ('user.accessory',[
            'title'=>"Di động",
            'sliders'=>$this->slider->show(),
            'accessorys'=>$this->ProService->getAccessory(),
        ]);
    }

public function getData(){
    return view('user.mobile');
}
}