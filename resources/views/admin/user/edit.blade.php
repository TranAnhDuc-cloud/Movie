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
            <form action="{{route('admin.user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class=" mb-1"><b class="add-type">{{trans('admin.edit')}} {{trans('admin.user')}}</b></div>
               <div class="container">
                   <div class="content">
                    <div class="row">
                        <div class="form-group col-6">
                            <label>{{ trans('admin.fullname') }}</label>
                            <input type="name" name="fullname" class="form-control" placeholder="{{$user->fullname}}">
                            @error('fullname')
                                <small class="text-danger">{{ $message }}</small> 
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="{{$user->email}}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small> 
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label>{{trans('admin.active')}}</label>
                            <br>
                            <select name="active" id="active">
                                <option value="0" name="active">Không Hoạt Động</option>
                                <option value="1" name="active"> Hoạt Động</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>{{ trans('admin.level') }}</label>
                            <br>
                            <select name="level" id="level">
                                <option value="0" name="level">Member</option>
                                <option value="1" name="level">Quản Lý</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary" value="{{ trans('admin.edit') }}">
                    </div>
                   </div>
               </div>
                
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection