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
                            <div class="topic-box-lg category-title">{{ trans('client.movieviewmost') }}</div>
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
                                        <a href="{{route('detail.index',[$item->id,$item->title])}}" style="font-size:13px; color:#666">{{ trans('view') }} : {{$item->view}}</a>
                                    </h3>
                                </div>
                                <a class="img-opacity-hover" href="{{route('detail.index',[$item->id,$item->title])}}">
                                    <img src="{{asset($item->url_picture)}}" alt="news" class="img-fluid wh-50">
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





