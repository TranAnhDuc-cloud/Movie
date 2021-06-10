@extends('admin.pages.index')
@section('title-admin','Dashboard')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.dashboard')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.dashboard')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('table')
  
     <!-- Main row -->
     <div class="row">
        <div class="col-md-8">
          <div class="row">
            <!-- USERS LIST -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ trans('admin.latestmember') }}</h3>

                  <div class="card-tools">
                    <span class="badge badge-danger">{{$member->count()}} {{ trans('admin.newmember') }}</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <ul class="users-list clearfix">
                    @foreach ($member as $item)
                        <li class="item-user">
                            <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Image">
                            {{-- {{asset('dist/img/'.$item->url_picture)}} --}}
                            <a class="users-list-name" href="#">{{$item->username}}</a>
                            <span class="users-list-date">{{$item->created_at}}</span>
                        </li>
                    @endforeach
                  </ul>
                </div>
                <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="viewUser">{{ trans('admin.viewalluser') }}</a>
                </div>
            </div>
          </div>
          <!-- TABLE: LATEST ORDERS -->
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">{{ trans('admin.latestmovie') }}</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                  <tr>
                    <th>{{ trans('admin.number') }}</th>
                    <th>{{ trans('admin.title') }}</th>
                    <th>{{ trans('admin.status') }}</th>
                    <th>{{ trans('admin.created_at') }}</th> 
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($created_at as $item)
                      <tr class="created_at">
                        <td><a href="pages/examples/invoice.html">{{$item->id}}</a></td>
                        <td>{{$item->title}}</td>
                        <td><span class="badge badge-success">{{$item->status}}</span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20">{{$item->created_at}}</div>
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="{{route('admin.movie.add')}}"><button class="btn btn-add btn-success p-30">{{trans('admin.add')}} {{ trans('admin.movie') }} </button></a>
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right viewAll">{{ trans('admin.viewallmovie') }}</a>
            </div>
            <!-- /.card-footer -->
          </div>
        </div>
        @include('admin.layout.siderbar')
      </div>
      
@endsection