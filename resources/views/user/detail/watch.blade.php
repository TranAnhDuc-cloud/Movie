@extends('user.layout.detail')
@section('title','PhimTV') 
@section('detail-content')
<section class="section-space-bottom-less30" style="padding-top:35px;">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 mb-30">
                <div class="item-box-dark-md-less30">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg category-title">Home / {{$watch->category->name}} / {{$watch->title}}</div>
                    </div>
                    <div class="watch">
                        <video controls width="100%">
                            <source src="{{asset('video/video.mp4')}}">
                        </video>
                        <div class="watch-notificate mt-20">
                            <div class="watch-title">
                                <p>Bạn đang xem phim <b style="font-size:20px">{{$watch->title}}</b> online chất lượng cao miễn phí tại server phim GD 1.</p>
                            </div>
                            <div class="watch-report mb-20">
                                <fieldset>
                                    <legend>Hướng khắc phục lỗi xem phim</legend>
                                    <ul>
                                        <li>Sử dụng DNS 8.8.8.8, 8.8.4.4 hoặc 208.67.222.222, 208.67.220.220 để xem phim nhanh
                                            hơn.
                                        </li>
                                        <li>Chất lượng phim mặc định chiếu là 360. Để xem phim chất lượng cao hơn xin vui lòng
                                            chọn trên player.</li>
                                        <li>Xem phim nhanh hơn với trình duyệt Google Chrome, Cốc Cốc</li>
                                        <li>Nếu bạn không xem được phim vui lòng nhấn CTRL + F5 hoặc CMD + R trên MAC vài lần.</li>
                                    </ul>
                                </fieldset>
                            </div>
                            <div class="">
                                {{$watch->description}}
                            </div>
                        </div>
                        <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
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
                        <div class="media-body media-padding10">
                            <div class="topic-box-sm color-white mb-15">{{$row->name}}</div>
                            <h3 class="title-medium-light mb-none">
                                <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                            </h3>
                            <h3 class="mb-none">
                                <a href="{{route('detail.index',[$item->id,$item->title])}}" style="font-size:13px; color:#666">Lượt Xem : {{$item->view}}</a>
                            </h3>
                        </div>
                        @endif
                        @endforeach
                        <a class="img-opacity-hover" href="single-news-1.html">
                            <img src="{{asset('img/news/news223.jpg')}}" alt="news" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection