
@include('user.layout.header')
    <div class="container" style="padding-top: 80px">
        @if (Auth::check())
        <marquee style="color: red; padding-top:10px">
            Chào Mừng
            {{'Bạn'}}
            <b style="color: #fff">{{Auth::user()->username}}</b>
            Đến Với<b style="color: #fff"> PhimHay.TV</b>
        @endif
        </marquee>
        
    </div>

    {{-- Main --}}
    @section('content-header')
        
    @show
    @section('content-hot')
        
    @show
    @section('content-new')
        
    @show
    

    {{-- Yieb Footer --}}
@section('footer-movieHot')
    @foreach ($movies as $item)
        <li>
            <div class="media">
                <a href="{{route('detail.index',[$item->id,$item->title])}}">
                    <img src="{{$item->url_picture}}" alt="post" class="img-fluid wh-50">
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
                    <img src="{{$item->url_picture}}" alt="post" class="img-fluid wh-30">
                </figure>
                <b style="font-size:10px; color:#fff">{{$item->title}}</b>
            </a>
       </li>
    @endforeach
@endsection
@include('user.layout.footer')
