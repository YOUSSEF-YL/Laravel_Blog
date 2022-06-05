<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PagesController extends Controller
{
    public function index()
    {
        $Articles  = DB::table('articles')->where('featured','0')->get();
        $featuredArticles = DB::table('articles')->where('featured','1')->get();
        $categorys = category::all();
      

      return view('index' , compact('Articles','featuredArticles','categorys'));
    }


    public function contact()
    {
      return view('contact');
    }

    public function about()
    {
      return view('about');
    }

    public function category()
    {
      $categorys = category::all();

      return view('category')->with('categorys',$categorys);
    }
    
    
}
