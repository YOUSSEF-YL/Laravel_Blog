
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0" nonce="mM3vX2Vb"></script>



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

                 <li class="has-children">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="myaccount/{{Auth::user()->id}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="sub-menu">
                        <li>
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
                     </ul>
                    
                </li>
                 @endguest
                </li>										
            </ul>
        </nav> <!-- end main-nav-wrap -->