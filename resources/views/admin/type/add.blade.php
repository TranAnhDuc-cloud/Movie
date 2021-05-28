@extends('admin.layout.master')
@section('title-admin','Tyep | Add')

@section('content-header-title')
    <h1 class="m-0">Type Movie</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » Type Movie</li>
    <li class="pl-2"> » Show</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive ">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.type.movie.store',$name)}}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                    <div class=" mb-1"><b class="add-type">{{$name}}</b></div>
                    <div class="container">
                        <div class="content">
                            <div class="form-group ">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập Tên {{$name}}">
                                @error('name')
                                    <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label>Year</label>
                                <input type="number" name="year" class="form-control" placeholder="Nhập Năm Công Chiếu">
                                @error('year')
                                    <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <input type="submit" name="submit" class="mt-5 form-control btn btn-primary" value="Thêm">
                        </div>
                    </div>
                    <style>
                        .container , .add-type{
                            display: flex;
                            justify-content:center;
                        }
                        .add-type{
                            color: #a5cbef;
                            background: -webkit-gradient(linear,left top,right top,from(#f78c12),to(#ff005d));
                            background: linear-gradient(to right,#f78c12,#fa0660);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            -webkit-box-decoration-break: clone;
                            box-decoration-break: clone;
                            font-weight: 700;
                            font-size: 40px;
                            padding-bottom: 5px;
                            text-transform: uppercase;
                        }
                        .content{
                            background-color: rgb(207, 239, 243);
                            width:50%;
                            border: 1px solid #bababa;
                            box-shadow: #686666;
                            border-radius:5px;
                            padding: 30px 30px 50px 30px;
                        }
                    </style>
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection