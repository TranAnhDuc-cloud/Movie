@extends('admin.layout.master')
@section('title-admin','Type | Edit')

@section('content-header-title')
    <h1 class="m-0">Type Movie</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » {{$name}}</li>
    <li class="pl-2"> » Edit</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.type.movie.update',[$name,$type->id])}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="container">
                    <div class="content">
                        <div class="form-group ">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="{{$type->name}}">
                            @error('name')
                                <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label>Year</label>
                            <input type="number" min ="2000" max ="2023" name="year" class="form-control" placeholder=" {{$type->year}}">
                            @error('year')
                                <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <input type="submit" name="submit" class="mt-5 form-control btn btn-primary" value="Sửa">
                    </div>
                </div>
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection