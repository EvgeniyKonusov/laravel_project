<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        //return 'Test';

        //return ['foo' => 'bar']; //json
        //return response()->json(['foo' => 'bar'], 200, []); //json
        //$response = app()->make('response');
        //$response = app('response');
        /* return response('test', 200, []); */
        //return response('');
        return response('test', 200, []);
        //$response = Response::make('dsfs');
    }
}
