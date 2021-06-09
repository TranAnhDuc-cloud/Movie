
@include('user.layout.header')
{{-- MAIN DETAIL --}}
    @section('detail-content')
        
    @show
   <div class="container">
    <div class="detail-seemore">
        <div class="detail-seemore-title col-12">{{ trans('client.cothebanmuonxem') }}</div>
        <div class="autoplay">
            @foreach ($sameCategory as $item)
            <div class="sameCategory " >
                <div class="position-relative mb-30 ">
                    <div class="img-scale-animate mb-15 img-overlay-70">
                        <a href="{{route('detail.index',[$item->id,$item->title])}}">
                            <img src="{{asset($item->url_picture)}}"  alt="news" class="img-fluid width-100 height-200">
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
                                <div>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
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
@include('user.layout.footer')
