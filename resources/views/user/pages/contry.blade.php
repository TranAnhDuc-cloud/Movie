@extends('user.layout.pages')
@section('title','PhimTV 
/ Country')
 <!-- Contry -->
 @section('title-pages')
    <a href="{{route('home')}}"> {{ trans('admin.home') }} » 
    </a>
    <a href="" return false;>{{ trans('admin.country') }} » {{$nameContry->name}}</a>
 @endsection
 @section('content-page')
         @foreach ($contry as $item)
         <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 pl-4 pr-0">
             <div class="position-relative mb-30">
                 <div class="img-scale-animate mb-15 img-overlay-70">
                     <a href="{{route('detail.index',[$item->id,$item->title])}}">
                         <img src="{{asset($item->url_picture)}}" alt="news" class="height-200 img-fluid width-100">
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
                     {{ trans('admin.time') }} :
                 </span>{{$item->time}} {{ trans('admin.minutes') }}</li>
             </div>
         </div>
         @endforeach
 @endsection     
 @section('link-pages')
 {!! $contry->render() !!}
 @endsection         

