<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');

    }

    public function store(Request $request)
    {
        //$ip = $request->ip();
        //$path = $request->path();
        //$url = $request->url();
        //$full = $request->fullurl();

        //dd($ip, $path, $url, $full);

        //dd($request->is('log*'));
        //dd($request->routeIs('log*'));

        /* $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->boolean('remember');

        dd($email, $password, $remember); */

        //return 'Запрос на вход';
        //return response('Запрос на вход');

        //return response()->redirectTo('/foo');

        if (true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }
}
