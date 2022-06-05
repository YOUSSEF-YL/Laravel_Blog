<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
@include('layouts.head')

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

		  @include('layouts.nav')

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- page header
   ================================================== -->
   <section id="page-header">
   	<div class="row current-cat">
   		<div class="col-full">
   			<h1>Category: Photography</h1>
   		</div>   		
   	</div>
   </section>

   
   <!-- masonry
   ================================================== -->
   <section id="bricks" class="with-top-sep">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

				@foreach ($categorys as $category)
				 

				<article class="brick entry format-standard animate-this">
   
				   <div class="entry-thumb">
					  <a href="Post/{{$category->slug}}" class="thumb-link">
						  <img src="{{asset('uploads/articles/'.$category->name)}}" alt="building">
								 
					  </a>
				   </div>
	
				   <div class="entry-text">
					   <div class="entry-header">
	
						   <div class="entry-meta">
							   <span class="cat-links">
								   <a href="Post/{{$category->slug}}">{{$category->category_id}}</a> 
								   <a href="Post/{{$category->slug}}">{{\App\Models\Category::where(['id' => $category->category_id])->pluck('name')->first();}}</a>               				
							   </span>			
						   </div>
	
						   <h1 class="entry-title"><a href="Post/{{$category->slug}}">{{$category->title}}.</a></h1>
						   
					   </div>
							<div class="entry-excerpt">
							   {{\Illuminate\Support\Str::words(html_entity_decode(strip_tags($category->name)),40)}}
							</div>
				   </div>
	
				</article> <!-- end article -->
				@endforeach

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   	<div class="row">
   		
   		<nav class="pagination">
		      <span class="page-numbers prev inactive">Prev</span>
		   	<span class="page-numbers current">1</span>
		   	<a href="#" class="page-numbers">2</a>
		      <a href="#" class="page-numbers">3</a>
		      <a href="#" class="page-numbers">4</a>
		      <a href="#" class="page-numbers">5</a>
		      <a href="#" class="page-numbers">6</a>
		      <a href="#" class="page-numbers">7</a>
		      <a href="#" class="page-numbers">8</a>
		      <a href="#" class="page-numbers">9</a>
		   	<a href="#" class="page-numbers next">Next</a>
	      </nav>

   	</div>

   </section> <!-- bricks -->

   
   <!-- footer
   ================================================== -->
   @include('layouts.footer')
</body>

</html>