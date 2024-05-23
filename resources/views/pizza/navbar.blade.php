<nav class="navbar navbar-dark bg-dark justify-content-between">
    <div class=" align-items-center mx-2">
     <a href="{{url('pizza/index')}}" class="badge rounded-pill bg-light text-dark px-3 py-2 mx-2"><b>HOME</b> </a>
     <a href="{{url('pizza/create')}}" class="badge rounded-pill bg-light text-dark px-3 py-2"><b>CREATE</b></a>
     

    </div>
     <form class="form-inline d-flex">
         
             @guest
                 @if (Route::has('login'))
                     <span class="nav-item color-dark text-dark">
                         <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </span>
                 @endif

                 @if (Route::has('register'))
                     <span class="nav-item color-dark">
                         <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </span>
                 @endif
             @else
                 <span class="nav-item dropdown text-dark">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
             @endguest
                 </span>

     </form>
   </nav>
 