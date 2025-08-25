<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{   public function index()
    {
        return view('login');
    }

    public function getSes(Request $request)
    {
        $data = $request->session()->get('txt');
        return view('login', ['data' => $data]);
    }
    public function postSes(Request $request)
    {
        $txt = $request->input('txt');
        $request->session()->put('txt', $txt);
        return redirect('/session');
    }
    //
}
