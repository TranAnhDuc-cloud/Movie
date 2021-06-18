@extends('admin.pages.index')
@section('title-admin','AdminLTE 3 | Profile')
@section('content-header-title')
    <h1 class="m-0">{{ trans('admin.profile') }}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{ trans('admin.home') }}</a></li>
    <li class="pl-2"> » {{ trans('admin.user') }}</li>
    <li class="pl-2"> » {{ trans('admin.profile') }}</li>
@endsection
@section('card-header-title')
@endsection
@section('table')
<section class="content-fuid">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card-info card card-primary card-outline">
          <div class="card-body-info card-body box-profile">
            <div class="text-center">

              <!-- Default dropright button -->
                <div class="btn-group dropright">
                  <a type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    @if ($user->provider)
                      <img class="profile-user-img img-fluid img-circle " src="{{$user->avatar}}" alt="User profile picture">
                    @else
                      <img class="profile-user-img img-fluid img-circle " src="{{asset('dist/img/'.$user->avatar)}}" alt="User profile picture">
                    @endif
                    
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-iteam" data-toggle="modal" data-target="#viewAvata" href="#">Xem Ảnh Đại Diện</a>
                    
                    <a class="dropdown-iteam" data-toggle="modal" data-target="#updateAvata" href="#">Cập Nhật Ảnh Đại Diện</a>
                  </div>
                    <!-- The Modal -->
                    @include('admin.component.modal_avata')
                </div>
            </div>

            <h3 class="profile-username text-center" style="text-transform: uppercase">{{$user->username}}</h3>

            <p class="text-muted text-center">{{$user->fullname}}</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>{{ trans('admin.level') }}</b> 
                <a class="float-right">
                  @if ($user->level==0)
                      {{ trans('admin.member') }}
                  @else
                  {{ trans('admin.admin') }}
                  @endif
                </a>
              </li>
              <li class="list-group-item">
                <b>{{ trans('admin.status') }}</b> 
                <a class="float-right">
                  @if ($user->active ==0)
                  {{ trans('admin.noactive') }}
                  @else
                  {{ trans('admin.active') }}
                  @endif
                </a>
              </li>
              <li class="list-group-item">
                <b>{{ trans('admin.jointime') }}</b> <a class="float-right">{{$jointime}}</a>
              </li>
            </ul>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">About Me</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i>Email</strong>
            <p class="text-muted">
              {{$user->email}}
            </p>
            <hr>
            <strong><i class="fas fa-map-marker-alt mr-1"></i> {{ trans('admin.address') }}</strong>
            <p class="text-muted">{{ $user->address }}</p> 
            <hr>
            <strong><i class="fas fa-pencil-alt mr-1"></i> {{ trans('admin.date') }} </strong>
            <p class="text-muted">
              {{$user->created_at}}
            </p>
            <hr>
            <strong><i class="far fa-file-alt mr-1"></i> {{ trans('admin.note') }}</strong>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('admin.user.edit',$user->id)}}" >Edit User</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <!-- /.tab-pane -->
              <div class=" active tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-danger">
                      10 Feb. 2014
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-envelope bg-primary"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="far fa-clock"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-user bg-info"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                      <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-comments bg-warning"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-success">
                      3 Jan. 2014
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                        <img src="https://placehold.it/150x100" alt="...">
                      </div>
                    </div>
                  </div>
                  <!-- END timeline item -->
                  <div>
                    <i class="far fa-clock bg-gray"></i>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" method="POST" action="{{route('admin.user.update',Auth::user()->id)}}">
                  {{ csrf_field() }}
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">FullName</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection