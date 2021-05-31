@extends('admin.pages.index')
@section('title-admin',' Movie')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.movie')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.movie')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('card-header-title')
    <h3 class="card-title">The Movie In DataBase</h3>
@endsection
@section('table')
    <div class="add mb-2 mt-2">
    <a href="{{route('admin.movie.add')}}"><button class="btn btn-add btn-success p-30">{{trans('admin.add')}}</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>{{trans('admin.number')}}</th>
          <th>{{trans('admin.title')}}</th>
          <th>{{trans('admin.name')}}</th>
          <th>{{trans('admin.directors')}}</th>
          <th>{{trans('admin.actors')}}</th>
          <th>{{trans('admin.time')}}</th>
          <th>{{trans('admin.date')}}</th>
          <th>{{trans('admin.url_picture')}}</th>
          <th>{{trans('admin.url_link')}}</th>
          <th>{{trans('admin.view')}}</th>
          <th>{{trans('admin.status')}}</th>
          <th>{{trans('admin.moviehot')}}</th>
          <th>{{trans('admin.typemovie')}}</th>
          <th>{{trans('admin.year')}}</th>
          <th>{{trans('admin.edit')}}</th>
          <th>{{trans('admin.delete')}}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        @foreach ($getAll as $item)
        <tr class="old">
            <td>{{$i++}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->directors}}</td>
            <td>{{$item->actor}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->url_picture}}</td>
            <td>{{$item->url_link}}</td>
            <td>{{$item->view}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->film_hot}}</td>
            <td>{{$item->type_movie}}</td>
            <td>{{$item->year}}</td>
            <th><a href="{{route('admin.movie.edit',$item->id)}}"><i class="fas fa-pencil-alt"></i></a></th>
            <th><a href="{{route('admin.movie.delete',$item->id)}}"><i class="far fa-trash-alt"></i></a></th>
        </tr>                     
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>{{trans('admin.number')}}</th>
          <th>{{trans('admin.title')}}</th>
          <th>{{trans('admin.name')}}</th>
          <th>{{trans('admin.directors')}}</th>
          <th>{{trans('admin.actors')}}</th>
          <th>{{trans('admin.time')}}</th>
          <th>{{trans('admin.date')}}</th>
          <th>{{trans('admin.url_picture')}}</th>
          <th>{{trans('admin.url_link')}}</th>
          <th>{{trans('admin.view')}}</th>
          <th>{{trans('admin.status')}}</th>
          <th>{{trans('admin.moviehot')}}</th>
          <th>{{trans('admin.typemovie')}}</th>
          <th>{{trans('admin.year')}}</th>
          <th>{{trans('admin.edit')}}</th>
          <th>{{trans('admin.delete')}}</th>
        </tr>
        </tfoot>
      </table>
@endsection