@extends('admin.layout.master')
@section('title-admin','Category | Edit')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.category')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.category')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class=" mb-1"><b class="add-type">{{trans('admin.edit')}} {{trans('admin.category')}}</b></div>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.title')}}</label>
                                <input type="text" name="name" class="form-control"  placeholder="{{$category->name}}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.url_picture')}}</label>
                                <input type="text" name="url_picture" class="form-control" placeholder="{{$category->url_picture}}">
                                @error('url_picture')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                                <label>{{trans('admin.description')}}</label>
                                <textarea name="description" id="description" rows="10" placeholder={{$category->description}}></textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary" value="Add">
                        </div>
                    </div>
                </div>                
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection