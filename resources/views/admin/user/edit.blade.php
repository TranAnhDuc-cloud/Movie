@extends('admin.layout.master')
@section('title-amdin','User | Edit')


@section('content-header-title')
    <h1 class="m-0">User</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » User</li>
    <li class="pl-2"> » Edit</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-6">
                        <label>ID</label>
                        <input disabled type="id" name="id" class="form-control" placeholder="{{$user->id}}">
                    </div>
                    <div class="form-group col-6">
                        <label>Full Name</label>
                        <input type="name" name="fullname" class="form-control" placeholder="{{$user->fullname}}">
                        @error('name')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Quyền Truy Cập</label>
                        <input type="number" min ="0" max ="1"name="level" class="form-control" placeholder="{{$user->level}}">
                        @error('level')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="{{$user->email}}">
                        @error('email')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa">
                </div>
                
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection