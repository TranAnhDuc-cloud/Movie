@extends('user.layout.detail')
@section('title','PhimTV') 
@section('detail-content')
<section class="section-space-bottom-less30">
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-xl-8 col-lg-7 col-md-12 mb-30">
                <div class="item-box-dark-md-less30">
                    <div class="topic-border color-white mb-30">
                        <div class="topic-box-lg category-title">{{ trans('admin.home') }} / {{$watch->category->name}} / {{$watch->title}}</div>
                    </div>
                    <div class="watch">
                        <video controls width="100%">
                            <source src="{{asset($watch->url_link)}}">
                        </video>
                        <div class="watch-notificate mt-20">
                            <div class="watch-title">
                                <p>{{ trans('client.youwatching') }} <b style="font-size:20px">{{$watch->title}}</b> {{ trans('client.onlinechatluongtai') }}.</p>
                            </div>
                            <div class="watch-report mb-20">
                                <fieldset>
                                    <legend>{{ trans('client.huongdankhacphuc') }}</legend>
                                    <ul>
                                        <li>{{ trans('client.sudungDNS') }}.
                                        </li>
                                        <li>{{ trans('client.chatluonghon') }}
                                            .</li>
                                        <li>{{ trans('client.xemphimnhanhon') }}</li>
                                        <li>{{ trans('client.neubankhongxemduoc') }}.</li>
                                    </ul>
                                </fieldset>
                            </div>
                            <div class="">
                                {{$watch->description}}
                            </div>
                        </div>
                        <div class="fb-comments text-white" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
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
@endsection