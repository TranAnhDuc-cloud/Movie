@extends('admin.layout.master')
@section('title-admin','Category | Add')

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
            <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class=" mb-1"><b class="add-type">{{trans('admin.add')}} {{trans('admin.category')}}</b></div>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.title')}}</label>
                                <input type="text" name="name" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.title')}}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.description')}}</label>
                                <input type="text" name="description" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.description')}}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.url_picture')}}</label>
                                <input type="file" name="url_picture"  placeholder="{{trans('admin.enter')}} {{trans('admin.url_picture')}}">
                                @error('url_picture')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-primary" value="{{trans('admin.add') }}">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection