
@include('user.layout.header')
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

@section('title','Profile')
<section class="section-space-less30 overlay-dark bg-attachment" style="background-image: url('{{asset('img/banner/video-back1.jpg')}}');">
    <div class="container" style="margin-top:80px;">
        <div class="topic-border color-white mb-30">
            <div class="topic-box-lg category-title">
                {{ trans('admin.home') }} » {{ trans('admin.profile') }}
            </div>
        </div>
        <section class="content">
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

                            @if (Auth::user()->provider)
                                <img class="profile-user-img img-fluid img-circle"
                                src="{{Auth::user()->avatar}}"
                                alt="User profile picture">
                            @else
                                <img class="profile-user-img img-fluid img-circle"
                                src="{{asset('dist/img/'.Auth::user()->avatar)}}"
                                alt="User profile picture">
                            @endif

                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-iteam" data-toggle="modal" data-target="#viewAvata" href="#">{{ trans('client.viewavatar') }}</a>
                            
                            <a class="dropdown-iteam" data-toggle="modal" data-target="#updateAvata" href="#">{{ trans('updateavatar') }}</a>
                          </div>
                            <!-- The Modal -->
                            @include('user.component.modal_avatar')
                        </div>

                      </div>

                      <h3 class="profile-username text-center "  style="text-transform: uppercase">{{Auth::user()->username}}</h3>
        
                      <p class="text-muted text-center">{{Auth::user()->fullname}}</p>
        
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>{{trans('admin.level')}}</b> 
                          <a class="float-right">

                            @if (Auth::user()->level==1)
                                {{ trans('admin.admin') }}
                            @else
                                {{ trans('admin.member') }}
                            @endif

                          </a>
                        </li>
                        <li class="list-group-item">
                          <b>{{trans('admin.status')}}</b> 
                          <a class="float-right">

                            @if (Auth::user()->active ==0)
                              {{ trans('admin.noactive') }}
                            @else
                              {{ trans('admin.active') }}
                            @endif

                          </a>
                        </li>
                        <li class="list-group-item">
                          <b>{{ trans('admin.jointime') }}</b> <a class="float-right">{{ getJoinTimeUser(Auth::user()->id) }}</a>
                        </li>
                      </ul>
        
                      <a href="#" class="btn btn-primary btn-block"><b>{{ trans('client.follow') }}</b></a>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
        
                  <!-- About Me Box -->
                  <div class="card card-about card-primary">
                    <div class="card-header card-about-header">
                      <h3 class="card-title">{{ trans('client.aboutme') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i>Email</strong>
                      <p class="text-muted">
                        {{Auth::user()->email}}
                      </p>
                      <hr>
                      <strong><i class="fas fa-map-marker-alt mr-1"></i>{{ trans('admin.address') }}</strong>
                      <p class="text-muted">{{Auth::user()->address}}</p>
                      <hr>
                      <strong><i class="fas fa-pencil-alt mr-1"></i>{{ trans('admin.created_at') }}</strong>
                      <p class="text-muted">
                        {{Auth::user()->created_at}}
                      </p>
                      <hr>
                      <strong><i class="fas fa-phone"></i> {{ trans('admin.phone') }}</strong>
                      <p class="text-muted">{{Auth::user()->phone}}</p>
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
                        <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">{{ trans('client.timeline') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">{{ trans('client.settings') }}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#infomation" data-toggle="tab">{{ trans('client.infomationupdate') }}</a></li>
                        @if(session('success'))
                        <li class="nav-item"><a class="nav-link bg-success" href="#" data-toggle="tab">{{session('success')}}</a></li>
                        @endif
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
                                <!-- general form elements -->
                                <div class="card card-primary">
                                  <div class="card-header">
                                    <h3 class="card-title">{{ trans('client.changepassword') }}</h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <!-- form start -->
                                  <form action="{{route('setting.changepassword')}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                    <div class="card-body">
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">{{ trans('admin.password') }} {{trans('admin.old')}}</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{ trans('admin.enter') }} {{ trans('admin.password') }} {{trans('admin.old')}}" name="passwordOld">
                                        @error('passwordOld')
                                        <small class="text-danger">{{ $message }}</small> 
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">{{ trans('admin.password') }} {{trans('admin.new')}}</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{ trans('admin.enter') }} {{ trans('admin.password') }} {{trans('admin.new')}}" name="password">
                                        @error('password')
                                        <small class="text-danger">{{ $message }}</small> 
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">{{ trans('admin.password_cofimer') }}</>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="{{ trans('admin.password_cofimer') }}" name="password_confirmation">
                                        @error('password_confirmation')
                                        <small class="text-danger">{{ $message }}</small> 
                                        @enderror
                                      </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                      <input type="submit" value="{{ trans('admin.update') }}">
                                    </div>
                                  </form>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="infomation">
                          <div class="row justify-content-center">
                            <div class="col-md-6">
                  
                              <div class="card card-danger">
                                <div class="card-header">
                                  <h3 class="card-title">{{ trans('client.settingsinfomation') }}</h3>
                                </div>
                                <form action="{{route('setting.changeinfomation')}}" method="post">
                                  {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                                <div class="card-body">
                                  {{-- FUllname --}}
                                  <div class="form-group">
                                    <label>{{ trans('admin.fullname') }}</label>
                  
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                      </div>
                                      <input type="text" name="fullname" class="form-control" value="{{Auth::user()->fullname}}">
                                    </div>
                                      @error('fullname')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>
                                  <!-- phone mask -->
                                  <div class="form-group">
                                    <label>{{ trans('client.usphonemark') }}</label>
                  
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                      </div>
                                      <input type="number" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                    </div>
                                      @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                    <!-- /.input group -->
                                  </div>

                                  <div class="form-group">
                                    <label>{{ trans('admin.address') }}</label>
                  
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                      </div>
                                      <input type="text" name="address" class="form-control" value="{{Auth::user()->address}}">
                                    </div>
                                      @error('address')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                  <input type="submit" value="{{ trans('admin.update') }}">
                                </div>
                              </form>
                              </div>
                              <!-- /.card -->
                            </div>
                          </div>
                      </div>
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
    </div>
</section>

@include('user.layout.footer')
