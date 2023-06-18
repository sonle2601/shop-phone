<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function login(){
        return view('admin.login', [
            'title' => 'Đăng nhập'
        ]);
    }
    public function loginPost(Request $request){

        $this->validate($request,[
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);

    if(Auth::attempt([
        'email' => $request->input('email'),
        'password' => $request->input('password')
    ],
        $request->input('remember')
    )){
        session::put('user_id', Auth::user()->id);
            return redirect()-> route('home');
    } 
    Session()->flash('error','Email hoặc mật khẩu không đúng');
    return redirect()->back();
    }


    public function register(){
        return view('admin.register', [
            'title'=>'Đăng kí tài khoản'
        ]);
    }

    public function registerPost(Request $request){
        if($request->input('password')!=$request->input('retypepassword')){
            Session()->flash('error','Mật khẩu không khớp');
            return redirect()->back();
        }
            else{

                try {
                    
                    User::create([
                        'name'=>$request->input('name'),
                        'email'=>$request->input('email'),
                        'password'=>bcrypt($request->input('password')),
                    ]);
        
                   
                    Session()->flash('success','Tạo tài khoản thành công');
                    return redirect()->back();
        
                }
                catch (Exception $ex){
                    Session()->flash('error',$ex->getMessage());
                    return false;
                }
                return true;
            }
            }
    
    }