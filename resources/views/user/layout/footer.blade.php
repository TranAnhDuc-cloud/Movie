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
<script src="{{asset('js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/client.js')}}" type="text/javascript"></script>
</body>
</html>