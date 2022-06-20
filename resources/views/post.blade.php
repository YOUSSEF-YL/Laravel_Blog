<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Gallery Format Post - Abstract</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{asset('asset/css/base.css')}}">
   <link rel="stylesheet" href="{{asset('asset/css/vendor.css')}}">  
   <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
        

   <!-- script
   ================================================== -->
	<script src="{{asset('js/modernizr.js')}}"></script>
	<script src="{{asset('js/pace.min.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

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


   <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-gallery">  
				<h1>  {{$article->title}}</h1>
   				<div class="content-media">
						<div class="post-slider flexslider">
							<ul class="slides">
								<li>
									<img src="{{asset('/uploads/articles/'.$article->image)}}"> 
								</li>
								
							</ul>							
						</div> 
					</div>

					<div class="primary-content">

						<h1 class="entry-title">{{$article->title}}</h1>	

						<ul class="entry-meta">
							<li class="date">{{$article->date->format('M d Y')}}</li>						
							<li class="cat"><a href="">{{\App\Models\Category::where(['id' => $article->category_id])->pluck('name')->first();}}</a><a href="">Design</a></li>				
						</ul>						
						
							{!!$article->content!!}
						

						<p class="tags">
		  			     	<span>Tagged in :</span>
		  				  	<a href="#">orci</a><a href="#">lectus</a><a href="#">varius</a><a href="#">turpis</a>
		  			   </p>

		  			   <div class="author-profile">
		  			   	<img src="images/avatars/user-05.jpg" alt="">

		  			   	<div class="about">
		  			   		<h4><a href="#">{{$article->author}}</a></h4>
		  			   	
		  			   		<p>Alias aperiam at debitis deserunt dignissimos dolorem doloribus, fuga fugiat impedit laudantium magni maxime nihil nisi quidem quisquam sed ullam voluptas voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		  			   		</p>

		  			   		<ul class="author-social">
		  			   			<li><a href="#">Facebook</a></li>
						        	<li><a href="#">Twitter</a></li>
						        	<li><a href="#">GooglePlus</a></li>
						        	<li><a href="#">Instagram</i></a></li>					        	
		  			   		</ul>
		  			   	</div>
		  			   </div> <!-- end author-profile -->						

					</div> <!-- end entry-primary -->		  			   

	  			   <div class="pagenav group">
		  			   <div class="prev-nav">
		  			   	<a href="/Post/{{$Previous->slug}}" rel="prev">
		  			   		<span>Previous</span>
		  			   		{{$Previous->title}} 
		  			   	</a>
		  			   </div>
		  				<div class="next-nav">
		  					<a href="/Post/{{$next->slug}}" rel="next">
		  						<span>Next</span>
								  {{$next->title}} 
		  					</a>
		  				</div>  				   
	  				</div>

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->



	@include('layouts.Comments')


   </section> <!-- end content -->


   <!-- footer
   ================================================== -->
   @include('layouts.footer')

</body>

</html>