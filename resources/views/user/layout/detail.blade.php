
@include('user.layout.header')
{{-- MAIN DETAIL --}}
    <div class="mt-50"></div>
    @section('detail-content')
        
    @show
   <div class="container">
    <div class="detail-seemore">
        <div class="detail-seemore-title col-12">Có Thể Bạn Muốn Xem</div>
        <div class="row">
            @foreach ($sameCategory as $item)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="position-relative mb-30">
                    <div class="img-scale-animate mb-15 img-overlay-70">
                        <a href="{{route('detail.index',[$item->id,$item->title])}}">
                            <img src="../../public/{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-200">
                        </a>
                    </div>
                    <div class="topic-box-top-xs">
                        <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
                    </div>
                    <div class="post-date-light">
                        <ul>
                            <li>
                                <span class="mr-5 mb-5">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    {{$item->date}}
                                </span>
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <h3 class="title-medium-light size-md title-medium-light-detail">
                        <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                    </h3>
                    <span class="mt-2 detail-tag">
                        <i class="fas fa-tag"></i>
                        <a href="{{route('category.index',$item->categories_id,$item->category->name)}}">{{$item->category->name}}</a>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
   </div>
{{-- END MAIN DETAIL --}}

{{-- FOOTER IMG --}}
@section('footer-movieHot')
    @foreach ($movies as $item)
        <li>
            <div class="media">
                <a href="{{route('detail.index',[$item->id,$item->title])}}">
                    <img src="../../public/{{$item->url_picture}}" alt="post" class="img-fluid wh-50">
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
@include('user.layout.footer')
