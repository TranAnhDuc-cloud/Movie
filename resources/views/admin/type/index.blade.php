@extends('admin.pages.index')
@section('title-admin','TypeMovie')

@section('content-header-title')
    <h1 class="m-0">Type Movie</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » Type Movie</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('card-header-title')
    <h3 class="card-title">The Movie In DataBase</h3>
@endsection
@section('table')
    <div class="add mb-2 mt-2">
        <a href="{{route('admin.type.movie.add',$name)}}"><button class="btn btn-add btn-success p-30">Add</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>TT</th>
        <th>ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        @foreach ($handle as $item)
        <tr class="old">
            <td>{{$i++}}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->year}}</td>
            <th><a href="{{route('admin.type.movie.edit',[$name,$item->id])}}"><i class="fas fa-pencil-alt"></i></a></th>
            <th><a href="{{route('admin.type.movie.delete',[$name,$item->id])}}"><i class="far fa-trash-alt"></i></a></th>
        </tr>                     
        @endforeach
        </tbody>
    </table>
    
@endsection