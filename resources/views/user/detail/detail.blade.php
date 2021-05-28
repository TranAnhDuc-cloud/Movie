@extends('user.layout.detail')
@section('title','PhimTV') 

@section('detail-content')
<section class="section-space-less30 overlay-dark bg-attachment" style="background-image: url('{{asset('img/banner/video-back1.jpg')}}');">
    <div class="container">
        <div class="topic-border color-white mb-30">
            <div class="topic-box-lg category-title">
                Home » {{$detail->category->name}} » {{$detail->title}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 mb-30">
               <div class="row">
                   <div class="col-lg-6">
                    <div class="img-scale-animate mb-15 img-overlay-70">
                        <a href="{{route('detail.index',[$detail->id,$detail->title])}}">
                            <img src="../../public/{{$detail->url_picture}}" alt="news" class="img-fluid width-100 height-400">
                        </a>
                    </div>
                       <a href="{{route('watch.index',[$detail->id,$detail->title])}}">
                           <button class="btn bnt-playmovie"><i class="fas fa-play"></i>Xem Phim</button>
                       </a>
                   </div>
                   <div class="col-lg-6">
                        <div class="detail-title">{{$detail->title}}</div>
                        <div class="detail-item">{{$detail->category->name}}</div>
                        <div class="detail-item">Ngày Chiếu : {{$detail->date}}</div>
                        <div class="detail-item">Thời Lượng :  {{$detail->time}} Phút / Tập</div>
                        <div class="detail-item">Quốc Gia : {{$detail->contry->title}}</div>
                        <div class="detail-item">Năm Xuất Bản :  {{$detail->year}}</div>
                        <div class="detail-item">Đạo Diễn :  {{$detail->directors}}</div>
                        <div class="detail-item">Diễn Viên :  {{$detail->actor}}</div>
                   </div>
               </div>
            </div>

            <div class="col-lg-4 col-md-12">
                @foreach ($cate as $item)
                <div class="media mb-30 bg-primarytextcolor on-hover-bg-gray">
                    <a class="img-opacity-hover width25-lg" href="{{route('category.index',[$item->id,$item->name])}}">
                        <img src="../../public/{{$item->url_picture}}" alt="news" class="img-fluid">
                    </a>
                    <div class="media-body media-padding8">
                        <div class="topic-box-sm bg-danger mb-20">{{$item->name}}</div>
                        <h3 class="title-medium-light mb-none">
                            <a href="{{route('category.index',[$item->id,$item->name])}}">Khám Phá Với Kho Tàng : {{$item->name}} Nhiều Màu Sắc Và Mới Mẻ</a>
                        </h3>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="description col-12">
                <div class="description-title">
                 Nội dung phim
                </div>
                 {{$detail->description}}
            </div>
        </div>
        
    </div>
</section>
@endsection