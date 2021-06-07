@extends('admin.layout.master')
@section('title-admin','TypeMovie | Add')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.typemovie')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.typemovie')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive ">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
                {!! Form::open(array('route' =>array('admin.type.movie.store',$name) , 'files' => true , 'method' =>'POST')) !!}
                {{ Form::hidden('_method', 'POST') }}
                {{ csrf_field() }}
                    <div class=" mb-1"><b class="add-type">{{$name}}</b></div>
                    <div class="container">
                        <div class="content">
                            <div class="form-group ">
                                <label>{{trans('admin.name')}}</label>
                                <input type="text" name="name" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.name')}} {{$name}}">
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label>{{trans('admin.year')}}</label>
                                <input type="number" name="year" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.year')}}">
                                @error('year')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <input type="submit" class="mt-5 form-control btn btn-primary" value="{{trans('admin.add')}}">
                        </div>
                    </div>
                    {!! Form::close() !!}
        </div>
    </div>
      <!-- /.content -->
@endsection