@extends('admin.pages.index')
@section('title-amdin','User')

@section('content-header-title')
    <h1 class="m-0">User</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » User</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('card-header-title')
    <h3 class="card-title">The Movie In DataBase</h3>
@endsection
@section('table')
  <div class="add mb-2 mt-2">
    <a href="{{route('admin.user.add')}}"><button class="btn btn-add btn-success p-30">Add</button></a>
  </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>TT</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>Quyền Truy Cập</th>
          <th>Email</th>
          <th>Remember Token</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
        @foreach ($getAll as $item)
        <tr class="old">
            <td>{{$i++}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->fullname}}</td>
            <td>{{$item->level}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->remember_token}}</td>
            <th><a href="{{route('admin.user.edit',$item->id)}}"><i class="fas fa-pencil-alt"></i></a></th>
            <th><a href="{{route('admin.user.delete',$item->id)}}"><i class="far fa-trash-alt"></i></a></th>
        </tr>                     
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>TT</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>Quyền Truy Cập</th>
          <th>Email</th>
          <th>Remember Token</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </tfoot>
      </table>
@endsection