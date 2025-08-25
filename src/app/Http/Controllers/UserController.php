<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('register');
    }

     public function register(Request $request)
    {
        $form = $request->all();
        User::create($form);
        return redirect('/mypage/profile');
    }

     public function profile()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['id']);
        User::find($request->id)->update($form);
        return redirect('/');
    }

     public function mypage()
    {
        $users = User::all();
        return view('mypage',['users' => $users]);
    }

}
