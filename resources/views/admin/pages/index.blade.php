@extends('admin.layout.master')
@section('title-admin','AdminLTE 3')


@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
@endsection
@section('content-wrapper')
<section class="content-fuild">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-pages">
            <div class="card-header">
              @yield('card-header-title')
            </div>
            @if (Session::has('error'))
              <div class="alert bg-danger text-center">{{Session::get('error')}}</div>
            @endif
            @if (Session::has('success'))
              <div class="alert bg-success text-center">{{ Session::get('success') }}</div>
            @endif
            <!-- /.card-header -->
            <div class="card-body card-body-pages">
                @include('admin.layout.info_box')
                @yield('table')
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
    <!-- /.content -->
@endsection