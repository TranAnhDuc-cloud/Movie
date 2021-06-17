<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('user.component.style')
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
                            
                            @include('user.component.nav_menu')
                            
                            @include('user.component.auth_info')

                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
    