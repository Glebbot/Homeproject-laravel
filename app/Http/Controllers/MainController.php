<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $query=$request->query();
        return view('welcome', compact('query'));
    }

    public function php(Request $request)
    {
        dd($request);
    }

    public function test(Request $request)
    {
        $a=$request->all('a');
        dd($a);
    }
}
