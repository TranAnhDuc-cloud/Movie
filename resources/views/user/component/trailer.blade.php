<section class="section-space-less30 overlay-dark bg-attachment" style="background-image: url('img/banner/video-back1.jpg');">
    <div class="container">
        <div class="topic-border color-white mb-30">
            <div class="topic-box-lg color-white">{{ trans('client.trailer') }}</div>
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
                    <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-520">
                    <div class="mask-content-lg">
                        @foreach ($category as $row)
                        @if ($row->id == $item->categories_id)                     
                        <div class="topic-box-sm color-white mb-20">{{$row->name}}</div>
                        @endif 
                        @endforeach
                        <div class="post-date-light">
                            <ul>
                                <li>
                                    <span>{{ trans('client.by') }}</span>
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
                        <img src="{{asset($item->url_picture)}}" alt="news" class="img-fluid wh-50">
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