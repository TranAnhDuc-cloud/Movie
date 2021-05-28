@extends('user.layout.master')
@section('title','Phim TV')
 


@section('content-hot')
<div class="content">
    <!-- Film Nổi Bật -->
   <section class="section-space-less10">
       <div class="container">
           <div class="topic-box-lg color-white mb-5">Phim Nổi Bật</div>
           <div class="row tab-space5">
               @foreach ($film_hot1 as $item)
               <div class="col-lg-5 col-md-12 mb-10">
                   <div class="img-overlay-70 img-scale-animate">
                       <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100">
                       <div class="mask-content-lg">
                           <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
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
                           <h1 class="title-medium-light">
                               <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                           </h1>
                       </div>
                   </div>
               </div>
               @endforeach
               <div class="col-lg-7 col-md-12">
                   <div class="row tab-space5">
                       @foreach ($film_hot as $item)
                           <div class="col-sm-6 col-12">
                               <div class="img-overlay-70 img-scale-animate mb-10">
                                   <div class="mask-content-sm">
                                       <div class="topic-box-sm color-cinnabar mb-10">{{$item->status}}</div>
                                       <h3 class="title-medium-light">
                                           <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                           <ul>
                                               <li>
                                                   <span>by</span>
                                                   <a href="{{route('detail.index',[$item->id,$item->title])}}" class="directors">{{$item->directors}}</a>
                                               </li>
                                               <li>
                                                   <span>
                                                       <i class="fa fa-calendar" aria-hidden="true"></i>
                                                       Thời Lượng :
                                                   </span>{{$item->time}} Phút</li>
                                           </ul>
                                       </h3>
                                       <style>
                                           .directors{
                                               color: #fff;
                                               font-size:12px;
                                               margin-left: 5px;
                                           }
                                       </style>
                                   </div>
                                   <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100">
                                   <style>
                                       .title-medium-light{
                                           margin-bottom: 5px !important;
                                       }
                                       .descripton_film:hover{
                                           color: #fff !important;
                                       }
                                   </style>
                               </div>
                           </div>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- END Film Nổi Bật -->
</div>
@endsection
@section('content-new')
 <!-- Category -->
 <section class="section-space-bottom">
    <div class="container">
        <div class="item-box-dark-md-less30 ne-isotope">
            <div class="row">
                <div class="col-12">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg color-white">Top Phim Mới Cập Nhật</div>
                        <div class="isotope-classes-tab isotop-btn-light">
                            <a href="#" data-filter=".action" class="current">Hành Động</a>
                            <a href="#" data-filter=".racing">Võ Thuật</a>
                            <a href="#" data-filter=".boxing">Hoạt Hình</a>
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
                                            <a href="{{route('detail.index',[$actions->id,$actions->title])}}">Adams</a>
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
                                   Thời Lượng :
                                </span>{{$actions->time}} Phút
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
                                        Thời Lượng :
                                    </span>{{$actions->time}} Phút</li>
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
                                    Thời Lượng :
                                </span>{{$item->time}} Phút</li>
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
                                            Thời Lượng :
                                        </span>  {{$item->time}} Phút</li>
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
                                    Thời Lượng :
                                </span>{{$item->time}} Phút</li>
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
                                        Thời Lượng :
                                    </span>{{$item->time}} Phút</li>
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
<!-- END Category -->

<!-- Review Film -->
<section class="section-space-bottom-less30">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 mb-30">
                <div class="item-box-dark-md-less30">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg color-white">Reviews Films</div>
                    </div>
                    <div class="row">
                        @foreach ($review as $item)
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="games-review-box">
                                <div class="img-overlay-70 img-scale-animate mb-30">
                                    <a href="{{route('detail.index',[$item->id,$item->title])}}">
                                        <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100" style="height: 200px;">
                                    </a>
                                    <div class="topic-box-top-xs">
                                        @foreach ($category as $row)
                                        @if ($item->categories_id == $row->id)
                                        <div class="topic-box-sm color-cinnabar">{{$row->name}}</div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
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
                                <h3 class="title-medium-light size-lg mb-15">
                                    <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                </h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-xl-4 col-lg-5 col-md-12">
                <div class="sidebar-box item-box-dark-md">
                    <div class="topic-box-lg bg-danger">Top Xem Nhiều</div>
                </div>
                <div class="sidebar-box item-box-dark-md">
                    
                    @foreach ($view as $item)
                    <div class="media mb30-list bg-secondary-body">
                        
                        @foreach ($category as $row)
                        @if ($item->categories_id == $row->id)
                        <div class="media-body media-padding10 col-6">
                            <h3 class="title-medium-light mb-none">
                                <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                            </h3>
                            <h3 class="mb-none">
                                <a href="{{route('detail.index',[$item->id,$item->title])}}" style="font-size:13px; color:#666">Lượt Xem : {{$item->view}}</a>
                            </h3>
                        </div>
                        @endif
                        @endforeach
                        <a class="img-opacity-hover col-6" href="{{route('detail.index',[$item->id,$item->title])}}">
                            <img src="{{$item->url_picture}}" alt="news" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Review Film -->

<!-- Video Review Website -->
<section class="section-space-less30 overlay-dark bg-attachment" style="background-image: url('img/banner/video-back1.jpg');">
    <div class="container">
        <div class="topic-border color-white mb-30">
            <div class="topic-box-lg color-white">Trailer</div>
        </div>
        <div class="row">
            @foreach ($trailer as $item)
            <div class="col-lg-7 col-md-12 mb-30">
                <div class="img-overlay-90">
                    <div class="text-center">
                        <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">
                            <img src="{{asset('img/banner/play.png')}}" alt="play" class="img-fluid">
                        </a>
                    </div>
                    <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100">
                    <div class="mask-content-lg">
                        @foreach ($category as $row)
                        @if ($row->id == $item->categories_id)                     
                        <div class="topic-box-sm color-white mb-20">{{$row->name}}</div>
                        @endif 
                        @endforeach
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
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-lg-5 col-md-12">
                @foreach ($cate as $item)
                <div class="media mb-30 bg-primarytextcolor on-hover-bg-gray">
                    <a class="img-opacity-hover width25-lg" href="{{route('category.index',[$item->id,$item->name])}}">
                        <img src="{{$item->url_picture}}" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body media-padding8">
                        <div class="topic-box-sm bg-danger mb-20">{{$item->name}}</div>
                        <h3 class="title-medium-light mb-none">
                            <a href="{{route('category.index',[$item->id,$item->name])}}">{{$item->description}}</a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- END Video -->
@endsection

