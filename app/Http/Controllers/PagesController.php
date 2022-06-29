<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    {
        $Articles  = DB::table('articles')->where('featured','0')->get();
        $featuredArticles = DB::table('articles')->where('featured','1')->get();
        $categorys = category::all();
        $Allarticles = Article::Paginate(4);

      return view('index' , compact('Articles','featuredArticles','categorys','Allarticles'));
    }


    public function contact()
    {
      $categorys = category::all();
      $Allarticles = Article::Paginate();
      return view('contact', compact('categorys','Allarticles'));
      
    }

    public function about()
    {
      $categorys = category::all();
      $Allarticles = Article::Paginate();
      return view('contact', compact('categorys','Allarticles'));
    }

    public function category()
    {
      $categorys = category::all();
      $Allarticles = Article::Paginate();

      return view('contact', compact('categorys','Allarticles'));
    }
    
    
}
