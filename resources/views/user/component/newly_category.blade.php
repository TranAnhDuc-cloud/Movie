<section class="section-space-bottom">
    <div class="container">
        <div class="item-box-dark-md-less30 ne-isotope">
            <div class="row">
                <div class="col-12">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg color-white">{{ trans('client.topmovieupdate') }}</div>
                        <div class="isotope-classes-tab isotop-btn-light">
                            <a href="#" data-filter=".action" class="current"> {{ trans('client.action') }}</a>
                            <a href="#" data-filter=".racing">{{ trans('client.art') }}</a>
                            <a href="#" data-filter=".boxing">{{ trans('client.cartoon') }}</a>
                        </div>
                        <div class="more-info-link-light">
                               <img src="{{asset('img/author.jpg')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuredContainer">
                <div class="row action">
                    <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                        @foreach ($action1 as $actions)
                        <div class="img-overlay-70 img-scale-animate height-100" >
                            <img src="{{$actions->url_picture}}" alt="news" class="img-fluid width-100 height-100" >
                            <div class="topic-box-top-sm">
                                <div class="topic-box-sm color-cinnabar mb-20">{{$actions->status}}</div>
                            </div>
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="{{route('detail.index',[$actions->id,$actions->title])}}">{{$actions->directors}}</a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{$actions->date}}
                                        </li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="{{route('detail.index',[$actions->id,$actions->title])}}">{{$actions->title}}</a>
                                </h2>
                                <span>
                                   {{ trans('admin.time') }} :
                                </span>{{$actions->time}}  {{ trans('admin.minutes') }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-12">
                        <div class="row">
                            @foreach ($action as $actions)
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                <div class="position-relative mb-30">
                                    <div class="img-scale-animate mb-15 img-overlay-70">
                                        <a href="{{route('detail.index',[$actions->id,$actions->title])}}">
                                            <img src="{{$actions->url_picture}}" alt="news" class="img-fluid width-100 height-200">
                                        </a>
                                    </div>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cinnabar mb-20">{{$actions->status}}</div>
                                    </div>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{$actions->date}}
                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light size-md">
                                        <a href="{{route('detail.index',[$actions->id,$actions->title])}}">{{$actions->title}}</a>
                                    </h3>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ trans('admin.time') }} :
                                    </span>{{$actions->time}}  {{ trans('admin.minutes') }}</li>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row racing">
                    <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                        @foreach ($vothuat_film1 as $item)
                        <div class="img-overlay-70 img-scale-animate height-100">
                            <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-100 ">
                            <div class="topic-box-top-sm">
                                <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
                            </div>
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->directors}}</a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{$item->date}}</li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                </h2>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ trans('admin.time') }} :
                                </span>{{$item->time}}  {{ trans('admin.minutes') }}</li>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-12">
                        <div class="row">
                            @foreach ($vothuat_film as $item)
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                    <div class="position-relative mb-30">
                                        <div class="img-scale-animate mb-15 img-overlay-70 ">
                                            <a href="{{route('detail.index',[$item->id,$item->title])}}">
                                                <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-200">
                                            </a>
                                        </div>
                                        <div class="topic-box-top-xs">
                                            <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
                                        </div>
                                        <div class="post-date-light">
                                            <ul>
                                                <li>
                                                    <span>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>{{$item->date}}</li>
                                            </ul>
                                        </div>
                                        <h3 class="title-medium-light size-md">
                                            <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                        </h3>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            {{ trans('admin.time') }} :
                                        </span>  {{$item->time}}  {{ trans('admin.minutes') }}</li>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row boxing">
                    <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                        @foreach ($hoathinh_film1 as $item)
                        <div class="img-overlay-70 img-scale-animate height-100">
                            <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-100">
                            <div class="topic-box-top-sm">
                                <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
                            </div>
                            <div class="mask-content-xs">
                                <div class="post-date-light">
                                    <ul>
                                        <li>
                                            <span>by</span>
                                            <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->directors}}</a>
                                        </li>
                                        <li>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                            </span>{{$item->date}}</li>
                                    </ul>
                                </div>
                                <h2 class="title-medium-light size-lg">
                                    <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                </h2>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{ trans('admin.time') }} :
                                </span>{{$item->time}}  {{ trans('admin.minutes') }}</li>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-xl-8 col-lg-5 col-md-12">
                        <div class="row">
                            @foreach ($hoathinh_film as $item)
                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                                <div class="position-relative mb-30">
                                    <div class="img-scale-animate mb-15 img-overlay-70" style="height:155px;">
                                        <a href="{{route('detail.index',[$item->id,$item->title])}}">
                                            <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-200">
                                        </a>
                                    </div>
                                    <div class="topic-box-top-xs">
                                        <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
                                    </div>
                                    <div class="post-date-light">
                                        <ul>
                                            <li>
                                                <span>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>{{$item->date}}</li>
                                        </ul>
                                    </div>
                                    <h3 class="title-medium-light size-md">
                                        <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                    </h3>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        {{ trans('admin.time') }} :
                                    </span>{{$item->time}} {{ trans('admin.minutes') }}</li>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</section>