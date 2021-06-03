<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie-only.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin-table.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="ppaM9BXr"></script>
</head>
<body>
    
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="bg-dark-layout" style="background-image: url('{{asset('img/banner/section-background.png')}}');">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-layout1" class="header-style1">
                <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                    
                    <div class="container">
                        <li class="d-flex header-top">
                            
                              <div class="phone">
                                <b>{{trans('client.contactforwork')}} : <a href="tel:0368417420">0368417420</a></b>
                              </div>
                              <address class="phone">
                                <b>{{trans('client.writtenby')}} : <a href="mailto:ductran.25122001@gmail.com">ductran.25122001@gmail.com</a></b>
                              </address>
                              <div class="btn-group">
                                <div type="button" class="btn m-0 pd-0 dropdown-toggle" style="background-color: #111" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-globe-europe" style="color: #fff"></i>
                                </div>
                                <div class="dropdown-menu" style="min-width: 20px">
                                 <a href="{{ route('language',['en']) }}">EN</a>
                                 <hr>
                                 <a href="{{ route('language',['vi']) }}">VI</a>
                                </div>
                              </div>
                        </li>
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-1 d-none d-lg-block">
                                <div class="logo-area">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8 position-static min-height-none">
                                <div class="ne-main-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active">
                                                <a href="{{route('home')}}">{{ trans('admin.home') }}</a>
                                            </li> 
                                            @foreach ($menu as $menus)
                                            <li class="">
                                                <a style="cursor: pointer">{{trans('client.menu-title',['name'=>$menus->name])}}</a>
                                                <ul class="sub-menu ne-dropdown-menu">
                                                    <?php $handle = $menus->handle ;
                                                        $nav = DB::table($handle)->select('*')->get();
                                                    ?>
                                                        @foreach ($nav as $nav_menus)
                                                            <li class="">
                                                                <a href="{{route('menu',[$menus->name,$nav_menus->id,$nav_menus->name])}}">
                                                                    {{trans('client.menu-title',['name'=>$nav_menus->name])}}
                                                                </a>
                                                            </li>  
                                                       @endforeach             
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-3 col-md-12 text-right position-static">
                               
                                <div class="header-action-item">
                                    <ul>
                                        <li class="header-search">
                                            <form id="demo-2" action="{{route('search')}}" method="GET">
                                                {{csrf_field()}}
                                                <input type="search" placeholder="Search" name="search">
                                              </form>
                                        </li>
                                        @if (!Auth::check())
                                        <li class="register">
                                                <button type="button" class="login-btn">
                                                    <a class="login-link" href="{{route('register')}}">
                                                    <i class="fas fa-user-plus"></i>
                                                        <b>{{ trans('admin.register') }}</b>
                                                    </a>    
                                                </button>
                                        </li>
                                        @endif
                                        <li class="login">
                                            @if (Auth::check())
                                            <button type="button" class="login-btn">
                                                <a class="login-link" href="{{route('logout')}}">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <b>{{ trans('admin.logout') }}</b>
                                                </a>    
                                            </button>   
                                            @else
                                            <button type="button" class="login-btn">
                                                    <a class="login-link" href="{{route('login')}}">
                                                    <i class="fas fa-sign-in-alt"></i>
                                                    <b>{{ trans('admin.login') }}</b>
                                                    </a>    
                                            </button>
                                            @endif                                          
                                        </li>
                                        <li class="user">
                                            @if (Auth::check())
                                                @if (Auth::user()->level==1)
                                                    <button type="button" class="login-btn">
                                                        <a class="login-link" href="{{route('admin')}}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                            <b>{{Auth::user()->username}}</b>
                                                        </a>
                                                    </button> 
                                                @else
                                                    <button type="button" class="login-btn">
                                                        <a class="login-link" href="{{route('account',[Auth::user()->username,Auth::user()->id])}}">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                            <b>{{Auth::user()->username}}</b>
                                                        </a>
                                                    </button>
                                                @endif
                                            @endif                                           
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
    