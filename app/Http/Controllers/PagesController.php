<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    {
        $Articles = Article::all();
        $featuredArticles = DB::table('articles')->where('featured','1')->get();
       // return view('index');
      return view('index')->with('featuredArticles', $featuredArticles);
      //dd($featuredArticles);
    }


    public function post()
    {
       // return view('post');
    }
}
