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


   <!-- content
   ================================================== -->
   <section id="content-wrap" class="site-page">
   	<div class="row">
   		<div class="col-twelve">

   			<section>  

				<div class="content-media">
					<div id="map-wrap">
					   <div id="map-container"></div>
					  <div id="map-zoom-in"></div>
						<div id="map-zoom-out"></div>
				   </div>  
				</div>

					<div class="primary-content">

						<h1 class="entry-title add-bottom">Get In Touch With Us.</h1>	

						<p class="lead">Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim aliquip Ut incididunt amet ut cupidatat.</p> 

						<p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>

						<div class="row">
							<div class="col-six tab-full">
								<h4>Where to Find Us</h4>

					  			<p>
					         1600 Amphitheatre Parkway<br>
					         Mountain View, CA<br>
					         94043 US
					         </p>

							</div>

							<div class="col-six tab-full">
								<h4>Contact Info</h4>

				   			<p>someone@abstractwebsite.com<br>
							   	info@abstractwebsite.com <br>
							   	Phone: (+63) 555 1212			     
							   </p>

							</div>

						</div>

						<form name="cForm" id="cForm" method="post" action="">
	  					   <fieldset>

	                     <div class="form-field">
	  						      <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
	                     </div>

	                     <div class="form-field">
	  						      <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
	                     </div>

	                    

	                     <div class="message form-field">
	                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
	                     </div>

	                     <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>

	  					   </fieldset>
  				      </form> <!-- end form -->

				</section>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->		
   </section> <!-- end content -->

   
   <!-- footer
   ================================================== -->
   @include('layouts.footer')

</body>

</html>