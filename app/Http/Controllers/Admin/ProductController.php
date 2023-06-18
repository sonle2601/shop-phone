<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\ProductService;
use App\Models\Product;
use App\Http\Requests\CreateFormRequest;

class ProductController extends Controller
{
    protected $ProductService;
    public function __construct(ProductService $ProductService)
    {
        $this->ProService = $ProductService;
    }
    public function add(){
        return view('admin.add_product',[

            'title'=>'Thêm sản phẩm',
          
        ]
    );
    
        }
        public function postAdd(\App\Http\Requests\CreateFormRequest $request){
         
            $result=$this->ProService->create($request);
             return redirect()->back();
         }

         public function list(){
            //dd($this->lopService->getAll());
            return view('admin.list_product',[
                'title'=>'Danh sách sản phẩm',
                'products'=>$this->ProService->getAll()
            ]);
        }

        public function edit(Product $product){
            // dd($product);
            return view('admin.edit_product',[
                'title'=>'Chỉnh sửa thông tin sản phẩm',
                'products'=>$product
            ]);
        }
        public function postedit(Product $product, Request $request){
            $result = $this->ProService->edit($product, $request);
            return redirect()->Route('list');
        }


        public function delete(Product $product)
        {
             
            $result = $this->ProService->delete($product);
            return redirect()->Route('list');
         
        }



}