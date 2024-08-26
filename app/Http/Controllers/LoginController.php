<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        /* if ($test = session('test')) {
            action($test);
        }
        dd(session()->has('test'));*/
        //dd(session()->all());
        //$foo = session('foo');
        // dd($foo);

        return view('login.index');
    }

    public function store(Request $request)
    {
        //sessions:
        /* session([
            'foo' => 'Bar',
            'name' => 'Max',
        ]); */
        //$session = app()->make('session');
        //$session = app('session');
        //$session = session();
        //$session = Session::get('key');
        //dd($session);
        //удаление сессии:
        /* session()->forget('foo');
        session()->flush(); */

        //Requests (запросы):
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

        /* if (true) {
            return redirect()->back()->withInput();
        } */

        // authenticate user

        session(['alert' => __('Добро пожаловать!')]);
        //alert(__('Добро пожаловать!'));

        return redirect()->route('user');
    }
}
