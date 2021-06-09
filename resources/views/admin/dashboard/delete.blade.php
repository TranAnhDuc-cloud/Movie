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
    <!-- Info boxes -->
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('admin.movie') }}</span>
              <span class="info-box-number">
                {{ $movieAll }}
                <small>{{ trans('admin.themovie') }}</small>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('admin.like') }}</span>
              <span class="info-box-number">1.000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('admin.moviehot') }}</span>
              <span class="info-box-number">{{ $movieHot }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{ trans('admin.member') }}</span>
              <span class="info-box-number">{{$memberAll}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

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
                            <img src="dist/img/user1-128x128.jpg" alt="User Image">
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
        
    </div>
@endsection