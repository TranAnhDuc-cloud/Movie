<div class="col-xl-4 col-lg-3 col-md-12 text-right position-static">
                               
    <div class="header-action-item">
        <ul>
            <li class="header-search">
                <form id="demo-2" action="{{route('user.search')}}" method="GET">
                    {{csrf_field()}}
                    <input type="search" placeholder="Search" name="search">
                  </form>
            </li>

            <li class="user">
                @if (Auth::check())
                    <button type="button" class="login-btn">

                        @if (Auth::user()->level==1)
                            <a class="login-link" href="{{route('admin')}}">
                                @if (Auth::user()->provider)
                                    <img class="avatar" src="{{Auth::user()->avatar}}" alt="">
                                @else
                                    <img class="avatar" src="{{asset('dist/img/'.Auth::user()->avatar)}}" alt="">
                                @endif
                                <b>{{Auth::user()->username}}</b>
                            </a>
                        @else
                            <a class="login-link" href="{{route('account',[Auth::user()->username,Auth::user()->id])}}">
                                @if (Auth::user()->provider)
                                    <img class="avatar" src="{{Auth::user()->avatar}}" alt="">
                                @else
                                    <img class="avatar" src="{{asset('dist/img/'.Auth::user()->avatar)}}" alt="">
                                @endif
                                <b>{{Auth::user()->username}}</b>
                            </a>
                        @endif
                        
                    </button> 
                @endif                                           
            </li>
            
            <li class="login">
                <button type="button" class="login-btn">
                @if (Auth::check())
                    <a class="login-link" href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        <b>{{ trans('admin.logout') }}</b>
                    </a>    
                @else
                    <a class="login-link" href="{{route('login')}}">
                        <i class="fas fa-sign-in-alt"></i>
                        <b>{{ trans('admin.login') }}</b>
                    </a>    
                </button>  
                @endif                                          
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

            
           
        </ul>
    </div>
</div>