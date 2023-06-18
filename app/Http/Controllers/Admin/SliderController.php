<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Service\SliderService;
use App\Models\Topic;


class SliderController extends Controller
{
  
    protected $slider;
    public function __construct(SliderService $slider ){
        $this->slider = $slider;
    }
    public function add(){
        return view ('admin.add_slider',[
            'title'=>'Slider'
        ]);
    }

    public function addPost(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
        ]);
        
        $result=$this->slider->add($request);
        return redirect()->back();

    }

    public function list(){
        return view('admin.list_slider',[
            'title'=>'Danh sách chủ đề',
            'sliders'=>$this->slider->list()
        ]);
    }

    public function edit(Topic $slider){
        // dd($product);
        return view('admin.edit_slider',[
            'title'=>'Chỉnh sửa thông tin chủ đề',
            'sliders'=>$slider
        ]);
    }
    public function postedit(Topic $slider, Request $request){
        // dd($request);
        $result = $this->slider->edit($slider, $request);
        return redirect()->Route('list_slider');
    }


    public function delete(Topic $slider)
    {
         
        $result = $this->slider->delete($slider);
        return redirect()->Route('list_slider');
     
    }

  
}