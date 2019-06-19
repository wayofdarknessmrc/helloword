<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
   {
       $users = DB::select('select * from users where active = ?', [1]);
       return view('user.index', ['users' => $users]);
   }
}
