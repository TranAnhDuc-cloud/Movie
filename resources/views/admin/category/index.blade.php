@extends('admin.pages.index')
@section('title-admin','Category')

@section('content-header-title')
    <h1 class="m-0">Category</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » Category</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('card-header-title')
    <h3 class="card-title">The Movie In DataBase</h3>
@endsection
@section('table')
    <div class="add mb-2 mt-2">
      <a href="{{route('admin.category.add')}}"><button class="btn btn-add btn-success p-30">Add</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>TT</th>
          <th>Name</th>
          <th>Description</th>
          <th>Url_Picture</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        @foreach ($getAll as $item)
        <tr class="old">
            <td>{{$i++}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->url_picture}}</td>
            <th><a href="{{route('admin.category.edit',$item->id)}}"><i class="fas fa-pencil-alt"></i></a></th>
            <th><a href="{{route('admin.category.delete',$item->id)}}"><i class="far fa-trash-alt"></i></a></th>
        </tr>                     
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>TT</th>
          <th>Name</th>
          <th>Description</th>
          <th>Url_Picture</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </tfoot>
      </table>
@endsection