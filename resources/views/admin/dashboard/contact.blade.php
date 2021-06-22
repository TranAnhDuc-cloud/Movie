@extends('admin.pages.index')
@section('title-amdin','User')

@section('content-header-title')
    <h1 class="m-0">{{ trans('admin.user') }}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{ trans('admin.home') }}</a></li>
    <li class="pl-2"> » {{ trans('admin.user') }}</li>
    <li class="pl-2"> » {{ trans('admin.show') }}</li>
@endsection
@section('card-header-title')
@endsection
@section('table')
<section class="content-fuild" style="position:relative">
    @include('admin.component.chat')

    <div class="navbar-search-block container">

    <form class="form-inline" method="GET" action="{{route('admin.contact.search')}}">
      {{csrf_field()}}
      <div class="input-group input-group-sm div-input">
        <input class="form-control form-control-navbar" name='search' type="search" placeholder="{{ trans('admin.search') }}" aria-label="Search">
        <div class="input-group-append input-src">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
          <button class="btn btn-navbar" type="button" data-widget="navbar-search">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
    </form>

  </div>
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">

          @if(isset($getAll))

            @if ($getAll-> isEmpty())
              <div class="container">
                <h3 class="text-black">{{ trans('admin.noresultsfound') }}.</h2>
              </div>
            @else

              @foreach ($getAll as $item)
                  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                    <div class="card bg-light">
                      <div class="card-header text-muted border-bottom-0">
                          @if ($item->level == '0')
                              {{ trans('admin.member') }}
                          @endif
                          @if ($item->level == '1')
                              {{ trans('admin.admin') }}
                          @endif
                      </div>
                      <div class="card-body pt-0">
                        <div class="row">
                          <div class="col-7">
                            <h2 class="lead"><b>{{ $item->username }}</b></h2>
                            <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> {{ trans('admin.address') }}: {{ $item->address }}</li>
                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Mail #: {{$item->email}}</li>
                            </ul>
                          </div>
                          <div class="col-5 text-center">
                            <img src="{{asset('dist/img/'.$item->avatar)}}" alt="user-avatar" class="img-circle img-fluid">
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <div class="text-right">
                          <a href="#" class="btn btn-sm bg-teal">
                            <i class="fas fa-comments"></i>
                          </a>
                          <a href="{{route('admin.user.info',$item->id)}}" class="btn btn-sm btn-primary">
                            <i class="fas fa-user"></i> {{ trans('admin.viewprofile') }}
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
              @endforeach
              
            @endif

          @endif
        </div>
      </div>

      <!-- /.card-body -->
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            {!! $getAll->render() !!}
          </ul>
        </nav>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->

  
</section>

@endsection