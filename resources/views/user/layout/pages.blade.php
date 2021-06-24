@extends('user.layout.master')

@section('content-pages')
<!-- Pages-->
 <section class="section-space-bottom">
    <div class="container">
        <div class="item-box-dark-md-less30 ne-isotope">
            {{-- Movie Most View --}}
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
            {{-- Content Pages --}}
            <div class="featuredContainer">
                <div class="row action">
                    <div class="col-xl-8 col-lg-5 col-md-12">
                        <div class="row">
                            @yield('content-page')
                        </div>
                    </div>
                    {{-- Siderbar Pages --}}
                    <div class="col-xl-4 col-lg-7 col-md-12 mb-30">
                        <div class="sidebar-box item-box-dark-md" style="border-radius: 10px;">
                           @include('user.component.siderbar_mostview')
                        </div>
                    </div>
                </div>
                {{-- Links Pages --}}
                <div class="card-footer" style="width:100%;">
                    <nav aria-label="Contacts Page Navigation">
                      <ul class="pagination justify-content-center m-0">
                        @yield('link-pages')
                      </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END Pages -->
@endsection





