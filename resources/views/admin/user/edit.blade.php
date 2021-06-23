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
                    <div class="content ">
                        <div class="row">
                            <a class="dropdown-iteam" data-toggle="modal" data-target="#viewAvata" href="#">
                                @if($user->provider)
                                    <img class="wh-avatar" src="{{asset($user->avatar)}}" alt="" id="profileImage">
                                @else
                                    <img class="wh-avatar" src="{{asset('dist/img/'.$user->avatar)}}" alt="" id="profileImage">
                                    
                                @endif
                            </a>
                                <!-- The Modal -->
                                @include('admin.component.modal_avata')
                                
                            <div class="ml-4">
                                <div class="p-2"><strong>Email</strong>:{{$user->email}}</div>
                                <div class="p-2"><strong>{{ trans('admin.address') }}</strong>  : {{$user->address}}</div>
                                <div class="p-2"><strong>{{ trans('admin.created_at') }}</strong> : {{$user->created_at}}</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="upload">
                                    {{-- <a name="upload" class="glyphicon dropdown-iteam glyphicon-folder-open" aria-hidden="true">Cập Nhật Ảnh Đại Diện <i class="fas fa-upload"></i></a> --}}
                                    {{-- <a href="#" id="updateImage">Cập Nhật Ảnh Đại Diện <i class="fas fa-upload"></i></a> --}}
                                    <input type="file" value="{{$user->avatar}}" id="upload" name="avatar">
                                    <input type="hidden" value="{{$user->avatar}}" id="upload" name="avatar_old">
                                </label>
                            </div>
                        </div>
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
                                <label>{{ trans('admin.password_cofimer') }}</label>
                                <input type="password" name="password_confirmation" id="" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.address')}}</label>
                                <input type="text" name="address" id="" class="form-control" value="{{$user->address}}">
                            </div>
                            <div class="form-group col-6">
                                <label>{{ trans('admin.phone') }}</label>
                                <input type="text" name="phone" id="" class="form-control" value="{{$user->phone}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.active')}}</label>
                                <br>
                                <select name="active" id="active">
                                    <option value="1" name="yes_active">{{ trans('admin.active') }}</option>
                                    <option value="0" name="no_active">{{ trans('admin.noactive') }}</option>
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

                        <div class="form-group mt-3" style="width:20%; margin:auto;">    
                            <input type="submit" name="submit" style="wi" class="form-control btn btn-primary" value="{{ trans('admin.edit') }}">
                        </div>
                   </div>
                   
               </div>
            {!! Form::close() !!}
        </div>
    </div>
      <!-- /.content -->

<script src="{{asset('js/auth.js')}}"></script>

@endsection