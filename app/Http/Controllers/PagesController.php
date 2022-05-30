<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    {
        $Articles  = DB::table('articles')->where('featured','0')->get();
        $featuredArticles = DB::table('articles')->where('featured','1')->get();
        //$category = category::all();
      

      return view('index' , compact('Articles','featuredArticles'));
    }


    
}
