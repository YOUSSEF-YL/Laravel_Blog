
	   	<nav id="main-nav-wrap">
            <ul class="main-navigation sf-menu">
                <li><a href="/index" title="">Home</a></li>									
                <li class="has-children">
                    <a href="/category" title="">Categories</a>
                    <ul class="sub-menu">
                   @foreach ( $categorys as $category)
                   <li><a href="postsbycategory/{{$category->id}}">{{$category->name}}</a></li>
                   @endforeach
                 </ul>
                </li>
                <li class="has-children current">
                    <a href="single-standard.html" title="">Blog</a>
                    <ul class="sub-menu">
                    <li><a href="single-video.html">Video Post</a></li>
                    <li><a href="single-audio.html">Audio Post</a></li>
                    <li><a href="single-gallery.html">Gallery Post</a></li>
                    <li><a href="single-standard.html">Standard Post</a></li>
                 </ul>
                </li>
                <li><a href="../about" title="">About</a></li>	
                <li><a href="../contact" title="">Contact</a></li>
                <li> 
                     <!-- Authentication Links -->
                     @guest
                     @if (Route::has('login'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </li>
                     @endif

                     @if (Route::has('register'))
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                         </li>
                     @endif
                 @else
                     <li class="nav-item dropdown">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="myaccount/{{Auth::user()->id}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             {{ Auth::user()->name }}
                         </a>

                         <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 @endguest
                </li>										
            </ul>
        </nav> <!-- end main-nav-wrap -->