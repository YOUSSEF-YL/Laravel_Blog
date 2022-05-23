<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class PagesController extends Controller
{
    public function index()
    {
        $Articles = Article::all();
       // return view('index');
        return view('index')->with('Articles', $Articles);
    //  dd($Articles);
    }


    public function post()
    {
       // return view('post');
    }
}
