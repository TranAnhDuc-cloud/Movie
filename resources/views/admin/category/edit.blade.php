@extends('admin.layout.master')
@section('title-admin','Category | Edit')

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
            <form action="{{route('admin.category.update',$movie->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-6">
                        <label>ID</label>
                        <input disabled type="id" name="id" class="form-control" placeholder="{{$movie->id}}">
                    </div>
                    <div class="form-group col-6">
                        <label>Tên Thể Loại</label>
                        <input type="name" name="name" class="form-control" placeholder="{{$movie->name}}">
                        @error('name')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Mô Tả</label>
                        <input type="text" name="description" class="form-control" placeholder="{{$movie->description}}">
                        @error('description')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Link Ảnh</label>
                        <input type="text" name="url_picture" class="form-control" placeholder="{{$movie->url_picture}}">
                        @error('url_picture')
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