@extends('user.layout.master')

@section('content-pages')
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
                            @yield('content-page')
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                        <div class="sidebar-box item-box-dark-md">
                           @include('user.layout.siderbar_mostview')
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





