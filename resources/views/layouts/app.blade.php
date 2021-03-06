<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EatMe') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsedwww Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand">
                       EatMe 
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">

                        <!-- Authentication Links -->
                        @if (Auth::guest())

                         <li><a href="{{ url('/guest') }}">Home</a></li>
                <li><a href="{{ url('/detail')}}">Restaurants</a></li>
                </ul>
                      

                    <ul class="nav navbar-nav navbar-right">

                            <li><a href="{{ route('login') }}">Login</a></li>

                            <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                @elseif(Auth::user()->is_admin=='1')

        
                        <li><a href="{{ url('/adminhome') }}">Home</a></li>
                <li><a href="{{ url('/detail') }}">Restaurants</a></li>
                <li><a href="{{ url('/adminpanel') }}">Admin Panel</a></li>
                </ul>
                
                            
                                </a>


                    <ul class="nav navbar-nav navbar-right">

                              
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">


                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                               
                            </li>
                       
                    </ul>
                </div>
            </div>




                    @else
                   

                   
                        <li><a href="{{ url('/welcomeugly') }}">Home</a></li>
                <li><a href="{{ url('/detail') }}">Restaurants</a></li>
                <li><a href="{{ url('/associate' . Auth::user()->username) }}">My Reviews</a></li>
                 <li><a href="{{ url('/myprofile') }}">My Profile</a></li>
                </ul>
                
                            
                                </a>


                    <ul class="nav navbar-nav navbar-right">

                              
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            
                                        </form>
                                    </li>
                               
                            </li>
                       
                    </ul>
                </div>
            </div>





                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
