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
                                $nav = navMenu($handle);
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