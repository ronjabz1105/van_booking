<header>
    <!-- header inner -->
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                   <div class="center-desk">
                      <div class="logo">

                         <a href=""><img src="{{asset('images/logo.png')}}" alt="#" /></a>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark ">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse" id="navbarsExample04">
                      <ul class="navbar-nav mr-auto">
                         <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('dashboard')}}">Home</a>
                         </li>
                         <li class="nav-item ">
                            <a class="nav-link" href="">About</a>
                         </li>
                         <li class="nav-item {{ Request::is('trips*') ? 'active' : '' }}">
                            <a class="nav-link" href="{{url('trips')}}">Our Trips</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link" href="">Gallery</a>
                         </li>
                         <li class="nav-item {{ Request::is('mybookings*') ? 'active' : '' }}">
                           <a class="nav-link" href="{{url('mybookings')}}">My Bookings</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="">Contact Us</a>
                         </li>
                         @if (Route::has('login'))
                          
                                @auth
                                
                                <x-app-layout>
                                  </x-app-layout>
                         @else
                                     <li class="nav-item ">
                                        <a class="nav-link " href="login">Login</a>
                                    </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link " href="register">Register</a>
                                     </li>
                                    @endif
                                @endauth
                         
                        @endif
                   

                      </ul>
                   </div>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>