@extends('admin.layout.master')
@section('title-admin','User | Add')

@section('content-header-title')
    <h1 class="m-0">User</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » User</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-6">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Nhập Username">
                    </div>
                    <div class="form-group col-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Nhập Password">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Nhập Full Name">
                    </div>
                    <div class="form-group col-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Nhập Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Level</label>
                        <input type="number" min="0" max="1" name="level" class="form-control" placeholder="Chọn Quyền Truy Cập">
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Thêm">
                </div>
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection