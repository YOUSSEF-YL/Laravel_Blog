<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Articles  = DB::table('articles')->where('featured','0')->get();
        $featuredArticles = DB::table('articles')->where('featured','1')->get();
        //$category = category::all();
      

      return view('index' , compact('Articles','featuredArticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

 


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Slug)
    {    $current = Article::where('Slug',$Slug)->first(); 

        $Previous = Article::find(--$current->id );
        $next = Article::find(++$current->id );

         $categorys = category::all();
          return view('post',compact('categorys','Previous','next'))
          ->with('article',Article::where('Slug',$Slug)
          ->first());

        
    }

    public function showbycategory($category_id)
    {
        $Articles  = DB::table('articles')->where('category_id',$category_id)->get();
        $categorys = category::all();
          return view('postsbycategory', 
          compact('Articles','categorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
