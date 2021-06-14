<section class="section-space-bottom-less30">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 mb-30">
                <div class="item-box-dark-md-less30">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg color-white">{{ trans('client.reviewmovie') }}</div>
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
                                <p>
                                    <a class="btn btn-info" data-toggle="collapse" href="#see{{$item->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                      {{ trans('client.xemthem') }}
                                    </a>
                                </p>
                                <div class="collapse" id="see{{$item->id}}">
                                    <div class="card-body" style="color: rgb(187, 179, 179); font: 15px;">
                                      {{$item->description}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="ne-sidebar sidebar-break-md col-xl-4 col-lg-5 col-md-12">
                <div class="sidebar-box item-box-dark-md">
                    <div class="topic-box-lg bg-danger">{{ trans('client.movieviewmost') }}</div>
                </div>
                <div class="sidebar-box item-box-dark-md">
                    @include('user.component.siderbar_mostview')
                </div>
            </div>
        </div>
    </div>
</section>