@extends('admin.layout.master')
@section('title-amdin','User | Edit')


@section('content-header-title')
    <h1 class="m-0">{{ trans('admin.user') }}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{ trans('admin.home') }}</a></li>
    <li class="pl-2"> » {{ trans('admin.user') }}</li>
    <li class="pl-2"> » {{ trans('admin.edit') }}</li>
@endsection
@section('content-wrapper')

     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
            {!! Form::open(array('route' =>array('admin.user.update',$user->id), 'files' => true , 'method' =>'POST')) !!}
            {{ Form::hidden('_method', 'PUT') }}
            {{ csrf_field() }}
                <div class=" mb-1"><b class="add-type">{{trans('admin.edit')}} {{trans('admin.user')}}</b></div>
                <div class="container">

                    <div class="content d-flex ">
                        <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            @if($user->provider)
                                <img src="{{asset($user->avatar)}}" alt="" class="wh-avatar">
                            @else
                                <img src="{{asset('dist/img/'.$user->avatar)}}" alt="" class="wh-avatar">
                            @endif
                            
                        </a>
                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-iteam" data-toggle="modal" data-target="#viewAvata" href="#">Xem Ảnh Đại Diện</a>
                            
                            <a class="dropdown-iteam" data-toggle="modal" data-target="#updateAvata" href="#">Cập Nhật Ảnh Đại Diện</a>
                        </div>
                            <!-- The Modal -->
                            @include('admin.component.modal_avata')

                        <div class="">
                            <div><strong>Email</strong>:{{$user->email}}</div>
                            <div><strong>{{ trans('admin.address') }}</strong>  : {{$user->address}}</div>
                            <div><strong>{{ trans('admin.created_at') }}</strong> : {{$user->created_at}}</div>
                        </div>
                    </div>

                    <div class="content">
                        <div class="form-group ">
                            <label>{{ trans('admin.fullname') }}</label>
                            <input type="name" name="fullname" class="form-control" value="{{$user->fullname}}">
                            @error('fullname')
                                <small class="text-danger">{{ $message }}</small> 
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.password')}}</label>
                                <input type="password" name="password" id="" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label>{{ trans('admin.password_confirm') }}</label>
                                <input type="password" name="password_confirmation" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.active')}}</label>
                                <br>
                                <select name="active" id="active">
                                    <option value="0" name="no_active">Không Hoạt Động</option>
                                    <option value="1" name="yes_active"> Hoạt Động</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>{{ trans('admin.level') }}</label>
                                <br>
                                <select name="level" id="level">
                                    <option value="0" name="member">{{trans('admin.member')}}</option>
                                    <option value="1" name="admin">{{trans('admin.admin')}}</option>
                                </select>
                            </div>
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