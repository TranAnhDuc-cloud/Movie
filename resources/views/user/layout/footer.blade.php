</div>
 <!-- Footer Area Start Here -->
 <footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h2 class="title-bold-light title-bar-left text-uppercase">{{trans('client.movieviewmost')}}</h2>
                        <ul class="most-view-post">
                            @foreach ($movies as $item)
                            <li>
                                <div class="media">
                                    <a href="{{route('detail.index',[$item->id,$item->title])}}">
                                        <img src="{{asset($item->url_picture)}}" alt="post" class="img-fluid wh-50">
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
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-box">
                        <h2 class="title-bold-light title-bar-left text-uppercase">{{trans('client.popularcategory')}}</h2>
                        <ul class="popular-categories">
                            @foreach ($category as $item)
                                <li class="row" style="justify-content: space-between;">
                                    <a href="{{route('category.index',[$item->id,$item->name])}}">{{$item->name}}</a>
                                    </a>
                                    <span>20</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                    <div class="footer-box">
                        <h2 class="title-bold-light title-bar-left text-uppercase">{{trans('client.moviehot')}}</h2>
                        <ul class="post-gallery shine-hover ">
                            @foreach ($new as $item)
                            <li>
                                <a href="{{route('detail.index',$item->id)}}">
                                    <figure>
                                        <img src="{{asset($item->url_picture)}}" alt="post" class="img-fluid wh-30">
                                    </figure>
                                    <b style="font-size:10px; color:#fff ; display: inline">{{$item->title}}</b>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="index.html" class="footer-logo img-fluid">
                        <img src="{{asset('img/logo.png')}}" alt="logo" class="img-fluid">
                    </a>
                    <ul class="footer-social">
                        <li>
                            <a href="#" title="facebook">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="twitter">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="google-plus">
                                <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="linkedin">
                                <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="pinterest">
                                <i class="fab fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="rss">
                                <i class="fas fa-rss" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="vimeo">
                                <i class="fab fa-vimeo" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                    <p>© 2017 newsedge Designed by RadiusTheme. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>





<!-- MENU CLICK = -->
{{-- <div id="offcanvas-body-wrapper" class="offcanvas-body-wrapper">
    <div id="offcanvas-nav-close" class="offcanvas-nav-close offcanvas-menu-btn">
        <a href="#" class="menu-times re-point">
            <span></span>
            <span></span>
        </a>
    </div>
    <div class="offcanvas-main-body">
        <ul id="accordion" class="offcanvas-nav panel-group">
            <li class="panel panel-default">
                <div class="panel-heading">
                    <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <i class="fa fa-home" aria-hidden="true"></i>Home Pages</a>
                </div>
                <div aria-expanded="false" id="collapseOne" role="tabpanel" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="offcanvas-sub-nav">
                            <li>
                                <a href="index.html">Home 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Home 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Home 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Home 4</a>
                            </li>
                            <li>
                                <a href="index5.html">Home 5</a>
                            </li>
                            <li>
                                <a href="index6.html">Home 6</a>
                            </li>
                            <li>
                                <a href="index7.html">Home 7</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="author-post.html">
                    <i class="fa fa-user" aria-hidden="true"></i>Author Post Page</a>
            </li>
            <li class="panel panel-default">
                <div class="panel-heading">
                    <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                        <i class="fa fa-file-text" aria-hidden="true"></i>Post Pages</a>
                </div>
                <div aria-expanded="false" id="collapseTwo" role="tabpanel" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="offcanvas-sub-nav">
                            <li>
                                <a href="post-style-1.html">Post Style 1</a>
                            </li>
                            <li>
                                <a href="post-style-2.html">Post Style 2</a>
                            </li>
                            <li>
                                <a href="post-style-3.html">Post Style 3</a>
                            </li>
                            <li>
                                <a href="post-style-4.html">Post Style 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="panel panel-default">
                <div class="panel-heading">
                    <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                        <i class="fa fa-info-circle" aria-hidden="true"></i>News Details Pages</a>
                </div>
                <div aria-expanded="false" id="collapseThree" role="tabpanel" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="offcanvas-sub-nav">
                            <li>
                                <a href="single-news-1.html">News Details 1</a>
                            </li>
                            <li>
                                <a href="single-news-2.html">News Details 2</a>
                            </li>
                            <li>
                                <a href="single-news-3.html">News Details 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="archive.html">
                    <i class="fa fa-archive" aria-hidden="true"></i>Archive Page</a>
            </li>
            <li class="panel panel-default">
                <div class="panel-heading">
                    <a aria-expanded="false" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>Gallery Pages</a>
                </div>
                <div aria-expanded="false" id="collapseFour" role="tabpanel" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="offcanvas-sub-nav">
                            <li>
                                <a href="gallery-style-1.html">Gallery Style 1</a>
                            </li>
                            <li>
                                <a href="gallery-style-2.html">Gallery Style 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <a href="404.html">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>404 Error Page</a>
            </li>
            <li>
                <a href="contact.html">
                    <i class="fa fa-phone" aria-hidden="true"></i>Contact Page</a>
            </li>
        </ul>
    </div>
</div> --}}

</div>

<script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/plugins.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/ticker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</body>
</html>