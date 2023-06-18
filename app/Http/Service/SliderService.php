<?php

namespace App\Http\Service;

use App\Models\Topic;
use Illuminate\Support\Str;

class SliderService{
    public function add($request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = Str::slug($request->input('name'), '-').'.'. $image->getClientOriginalExtension();
        $destinationPath = public_path('/template_admin/img');
        $image->move($destinationPath, $imageName);
        try{
            Topic::create([
                'name'=>$request->input('name'),
                'image'=>$imageName,
                'url'=>$request->input('url'),
                'sort_by'=>$request->input('sort_by'),
                'active'=>$request->input('active'),
                
            ]);
            Session()->flash('success','Thêm chủ đề thành công');

        }catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }

    public function list(){
        return Topic::paginate(3);
    }

    public function edit($slider, $request){
        $imagePath = public_path('/template_admin/img/'.$slider->image);
        if (file_exists($slider->image)) {
            unlink($imagePath);
           
        }
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
            $image = $request->file('image');
            $imageName = Str::slug($request->input('name'), '-').'.'. $image->getClientOriginalExtension();
            $destinationPath = public_path('/template_admin/img');
            $image->move($destinationPath, $imageName);
            
    try {
        $slider->name = $request->input('name');
        $slider->image = $imageName;
        $slider->url = $request->input('url');
        $slider->sort_by = $request->input('sort_by');
        $slider->active = $request->input('active');
        $slider->save();
        Session()->flash('success','Cập nhật chủ đề thành công');

        return true;
    }
    catch (Exception $ex){
        Session()->flash('error','Cập nhật chủ đề thất bại');
    }
    return false;
}

public function delete($slider){

    try{
        $id = (int) $slider->id;
    $result = Topic::where('id', $id)->first();
    if($slider){
        return  Topic::where('id', $id)->delete();
        Session()->flash('success','Xóa chủ đề thành công'); 
    }
    return true; 
    }catch(Exception $ex){
        Session()->flash('error','Xóa chủ đề thất bại');
    }
    return false;
   
    }
    public function show(){
        return Topic::where('active',1)->orderByDesc('sort_by')->get();
    }
}