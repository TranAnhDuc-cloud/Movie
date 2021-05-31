@extends('admin.layout.master')
@section('title-admin','User | Add')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.user')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.user')}} </li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive ">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
                <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class=" mb-1"><b class="add-type">{{trans('admin.add')}} {{trans('admin.user')}}</b></div>
                    <div class="container">
                        <div class="content">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{ trans('admin.username') }}</label>
                                    <input type="text" name="username" class="form-control" placeholder="{{trans('admin.enter')}} {{ trans('admin.username') }}">
                                    @error('username')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{ trans('admin.fullname') }}</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="{{trans('admin.enter')}} {{ trans('admin.fullname') }}">
                                    @error('fullname')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{ trans('admin.password') }}</label>
                                    <input type="password" name="password" class="form-control" placeholder="{{trans('admin.enter')}} {{ trans('admin.password') }}">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.password_cofimer')}}</label>
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="{{trans('admin.password_cofimer')}}">
                                    @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.level')}}</label>
                                    <br>
                                    <select name="level" id="level">
                                        <option value="1" name="admin">{{trans('admin.admin')}}</option>
                                        <option value="0" name="member">{{trans('admin.member')}}</option>
                                    </select>
                                    @error('level')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="{{trans('admin.enter')}} Email">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-primary" value="{{trans('admin.add')}}">
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection