<section class="section-space-bottom">
    <div class="container">
        <div class="item-box-dark-md-less30 ne-isotope">
            <div class="row">
                <div class="col-12">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg color-white">{{ trans('client.topmovieupdate') }}</div>
                        <div class="isotope-classes-tab isotop-btn-light">

                            @foreach ($category3 as $item)
                                <a href="#" data-filter=".movies{{$item->id}}"  class="current" > {{trans('client.category_newly',['name'=>$item->name])}}</a>   
                            @endforeach
                            
                        </div>
                        <div class="more-info-link-light">
                               <img src="{{asset('img/author.jpg')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="featuredContainer">
                @foreach($category3 as $row)

                    <div class="row movies{{$row->id}}">
                        <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                            @foreach ($row->getMovie1($row->id) as $item)
                            <div class="img-overlay-70 img-scale-animate height-100">
                                <img src="{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-100 ">
                                <div class="topic-box-top-sm">
                                    <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
                                </div>
                                <div class="mask-content-xs">
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
                                @foreach ($row->getMovie6($row->id) as $item)
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
                    
               @endforeach
            </div>
        </div>
    </div>
</section>