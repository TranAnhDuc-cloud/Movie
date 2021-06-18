<div class="content">
    <!-- Film Nổi Bật -->
   <section class="section-space-less10">
       <div class="container">
           <div class="topic-box-lg color-white mb-5">{{ trans('client.moviehot') }}</div>
           <div class="row tab-space5">
               @foreach ($film_hot1 as $item)
               <div class="col-lg-5 col-md-12 mb-10">
                   <div class="img-overlay-70 img-scale-animate">
                       <img src="{{asset($item->url_picture)}}" alt="news" class="img-fluid width-100 height-450">
                       <div class="mask-content-lg">
                           <div class="topic-box-sm color-cinnabar mb-20">{{$item->status}}</div>
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
                           <h1 class="title-medium-light">
                               <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                           </h1>
                       </div>
                   </div>
               </div>
               @endforeach
               <div class="col-lg-7 col-md-12">
                   <div class="row tab-space5">
                       @foreach ($film_hot as $item)
                           <div class="col-sm-6 col-12">
                               <div class="img-overlay-70 img-scale-animate mb-10">
                                   <div class="mask-content-sm">
                                       <div class="topic-box-sm color-cinnabar mb-10">{{$item->status}}</div>
                                       <h3 class="title-medium-light">
                                           <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                                           <ul>
                                               <li>
                                                   <span>{{ trans('client.by') }}</span>
                                                   <a href="{{route('detail.index',[$item->id,$item->title])}}" class="directors">{{$item->directors}}</a>
                                               </li>
                                               <li>
                                                   <span>
                                                       <i class="fa fa-calendar" aria-hidden="true"></i>
                                                       {{ trans('admin.time') }} :
                                                   </span>{{$item->time}} {{ trans('admin.minutes') }}</li>
                                           </ul>
                                       </h3>
                                   </div>
                                   <img src="{{asset($item->url_picture)}}" alt="news" class="img-fluid width-100 height-220">
                               </div>
                           </div>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- END Film Nổi Bật -->
</div>