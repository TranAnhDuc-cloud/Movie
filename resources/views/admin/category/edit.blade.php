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
                    {!! Form::open(array('route' =>array('admin.category.update',$category->id), 'files' => true , 'method' =>'POST')) !!}
                    {{ Form::hidden('_method', 'PUT') }}
                    {{ csrf_field() }}
                    <div class=" mb-1"><b class="add-type">{{trans('admin.edit')}} {{trans('admin.category')}}</b></div>
                    <div class="container">
                        <div class="content d-flex p-5">
                            <img src="{{asset($category->url_picture)}}" class="wh-100" alt="">
                            <div class="ml-5">
                                <div><strong>{{ trans('admin.description') }}</strong>  : {{$category->description}}</div>
                            </div>
                        </div>

                        <div class="content">

                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.title')}}</label>
                                    <input type="text" name="name" class="form-control"  value="{{$category->name}}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.url_picture')}}</label>
                                    <input type="file" name="url_picture"  value="{{$category->url_picture}}">
                                    @error('url_picture')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                    <label>{{trans('admin.description')}}</label>
                                    <input type="text" name="description" id="description" rows="10" value="{{$category->description}}">
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-primary" value="{{ trans('admin.edit') }}">
                            </div>
                        </div>
                    </div>                
                    {!! Form::close() !!}
        </div>
    </div>
      <!-- /.content -->
@endsection