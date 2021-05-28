@extends('admin.layout.master')
@section('title-admin','Category | Add')

@section('content-header-title')
    <h1 class="m-0">Category</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » Category</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-6">
                        <label>Tên Thể Loại</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập Tên Thể Loại">
                        @error('name')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Mô Tả Thể Loại</label>
                        <input type="text" name="description" class="form-control" placeholder="Nhập Các Mô Tả Thể Loại">
                        @error('directors')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Nhập URL Hình Ảnh</label>
                        <input type="text" name="url_picture" class="form-control" placeholder="Hình Ảnh Thể Loại">
                        @error('url_picture')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
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