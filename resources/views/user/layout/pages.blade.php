@extends('user.layout.master')
@section('content-header')
<!-- Pages-->
 <section class="section-space-bottom">
    <div class="container">
        <div class="item-box-dark-md-less30 ne-isotope">
            <div class="row">
                <div class="col-12">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg category-title">@yield('title-pages')</div>
                        <div class="more-info-link-light">
                            <div class="topic-box-lg category-title">Top Phim Xem Nhiều</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuredContainer">
                <div class="row action">
                    <div class="col-xl-8 col-lg-5 col-md-12">
                        <div class="row">
                            @yield('content-pages')
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                        <div class="sidebar-box item-box-dark-md">
                            @foreach ($view as $item)
                            <div class="media mb30-list bg-secondary-body">
                                <div class="media-body media-padding10">
                                    <h3 class="title-medium-light mb-none">
                                        <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                    </h3>
                                    <h3 class="mb-none">
                                        <a href="{{route('detail.index',[$item->id,$item->title])}}" style="font-size:13px; color:#666">Lượt Xem : {{$item->view}}</a>
                                    </h3>
                                </div>
                                <a class="img-opacity-hover" href="{{route('detail.index',[$item->id,$item->title])}}">
                                    <img src="../../public/{{$item->url_picture}}" alt="news" class="img-fluid wh-50">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                    @yield('link-pages')
            </div>
        </div>
    </div>
</section>
<!-- END Pages -->

@endsection
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
                       <img src="../../public/{{$item->url_picture}}" alt="news" class="img-fluid width-100">
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
                                   </div>
                                   <img src="../../public/{{$item->url_picture}}" alt="news" class="img-fluid width-100">
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

@section('footer-movieHot')
    @foreach ($movies as $item)
        <li>
            <div class="media">
                <a href="{{route('detail.index',[$item->id,$item->title])}}">
                    <img src="../..//public/{{$item->url_picture}}" alt="post" class="img-fluid wh-50">
                </a>
                <div class="media-body">
                    <h3 class="title-medium-light size-md mb-10">
                        <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                    </h3>
                    <div class="post-date-light">
                        <ul>
                            <li>
                                <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>{{$item->date}}
                                <br>
                                <br>
                                <span>View : {{$item->view}}</span>
                            </li>
        
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    @endforeach
@endsection
@section('footer-movieNew')
    @foreach ($new as $item)
       <li>
            <a href="{{route('detail.index',$item->id)}}">
                <figure>
                    <img src="../../public/{{$item->url_picture}}" alt="post" class="img-fluid wh-30">
                </figure>
                <b style="font-size:10px; color:#fff">{{$item->title}}</b>
            </a>
       </li>
    @endforeach
@endsection

