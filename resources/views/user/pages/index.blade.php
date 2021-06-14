@extends('user.layout.master')
@section('title','Phim TV')
 

@section('content-index')


 <!-- Top Newly Movies -->
@include('user.component.newly_category')
<!-- END Top Mewly Movies -->


<!-- Review Film -->
@include('user.component.review')
<!-- END Review Film -->


<!-- Video Trailer Movies -->
@include('user.component.trailer')
<!-- END Trailer Movies -->


@endsection

