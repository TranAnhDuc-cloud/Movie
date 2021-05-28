@extends('user.layout.pages')
@section('title','PhimTV')
 <!-- Contry -->
 @section('title-pages')
 Home » {{$titleMovies}}
 @endsection
 @section('content-pages')
 <div class="col-xl-8 col-lg-5 col-md-12">
     <div class="row">
         @foreach ($typeMovies as $item)
         <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 pl-4 pr-0">
             <div class="position-relative mb-30">
                 <div class="img-scale-animate mb-15 img-overlay-70">
                     <a href="{{route('detail.index',[$item->id,$item->title])}}">
                         <img src="../../public/{{$item->url_picture}}" alt="news" class="img-fluid width-100 height-200">
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
                             </span>{{$item->date}}
                             
                         </li>
                     </ul>
                 </div>
                 <h3 class="title-medium-light size-md">
                     <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
                 </h3>
                 <span>
                     <i class="fa fa-calendar" aria-hidden="true"></i>
                     Thời Lượng :
                 </span>{{$item->time}} Phút</li>
             </div>
         </div>
         @endforeach
     </div>
 </div>
 @endsection     
 @section('link-pages')
 {!! $typeMovies->render() !!}
 @endsection         
