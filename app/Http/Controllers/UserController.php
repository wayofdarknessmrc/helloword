<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;

class UserController extends Controller
{
  public function showRegisterForm(){
      return view('user.register');
  }

  public function index()
   {
       $users = DB::select('select * from users');
       return view('user.index', ['users' => $users]);
   }
   public function storeUser(Request $request){
       //dd($request->all());

       $messages = [
           'required' => 'Trường :attribute bắt buộc nhập.',
           'email'    => 'Trường :attribute phải có định dạng email'
       ];
       $validator = Validator::make($request->all(), [
           'name'     => 'required|max:255',
           'email'    => 'required|email',
           'password' => 'required|numeric|min:6|confirmed',
           'password_confirmation' => 'bail|required|same:password'
       ], $messages);

       if ($validator->fails()) {
           return redirect('register')
                   ->withErrors($validator)
                   ->withInput();
       } else {
           // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
           $name = $request->input('name');
           $email = $request->input('email');
           $password =  Hash::make($request->input('password'));

           DB::insert('insert into users (name, email, password) values (?, ?, ?)', [$name, $email, $password]);
           return redirect('register')
                   ->with('message', 'Đăng ký thành công.');
       }
   }
}
