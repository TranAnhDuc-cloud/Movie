@extends('admin.pages.index')
@section('title-admin',' Movie')

@section('content-header-title')
    <h1 class="m-0">Movie</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » Movie</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('card-header-title')
    <h3 class="card-title">The Movie In DataBase</h3>
@endsection
@section('table')
    <div class="add mb-2 mt-2">
    <a href="{{route('admin.movie.add')}}"><button class="btn btn-add btn-success p-30">Add</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>TT</th>
          <th>Title</th>
          <th>Name</th>
          <th>Directors</th>
          <th>Actors</th>
          <th>Thời Lượng</th>
          <th>Ngày SX</th>
          <th>Url_Picture</th>
          <th>Url_links</th>
          <th>View</th>
          <th>Status</th>
          <th>Phim Hot</th>
          <th>Type Movie</th>
          <th>Year</th>
          <th>Edit</th>
          <th>Delete</th>
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
            <th>TT</th>
            <th>Title</th>
            <th>Name</th>
            <th>Directors</th>
            <th>Actors</th>
            <th>Thời Lượng</th>
            <th>Ngày SX</th>
            <th>Url_Picture</th>
            <th>Url_links</th>
            <th>View</th>
            <th>Status</th>
            <th>Phim Hot</th>
            <th>Type Movie</th>
            <th>Year</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </tfoot>
      </table>
@endsection