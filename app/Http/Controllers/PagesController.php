<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $Article = Article::all();
        return view('index');
      //  return view('index')->with('Article', $Article);
    }


    public function post()
    {
       // return view('post');
    }
}
