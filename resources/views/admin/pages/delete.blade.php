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
    
<div class="row">
  <div class="col-md-8">
    <!-- TABLE: LATEST ORDERS -->
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">{{ trans('admin.daxoaganday') }}</h3>

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
            @yield('table_delete')
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
          {{-- <a href="{{route('admin.movie.add')}}"><button class="btn btn-add btn-success p-30">{{trans('admin.add')}} {{ trans('admin.movie') }} </button></a> --}}
        <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right viewAll">{{ trans('admin.viewallmovie') }}</a>
      </div>
      <!-- /.card-footer -->
    </div>
  </div>
  @include('admin.layout.siderbar')
</div>
    
@endsection