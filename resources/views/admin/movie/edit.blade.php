@extends('admin.layout.master')
@section('title-admin','Movie | Edit')


@section('content-header-title')
    <h1 class="m-0">{{trans('admin.movie')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.movie')}}</li>
    <li class="pl-2"> » {{trans('admin.edit')}}</li>
@endsection
@section('content-wrapper')
<section class="content-fluid">

    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-4 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2><strong>{{$movie->title}}</strong></h2>
            <p class="lead mb-5">{{ trans('admin.status') }} : {{$movie->status}}<br>
                {{ trans('admin.directors') }} : {{$movie->directors}}
            </p>
            <img src="{{asset($movie->url_picture)}}" width="368px;" height="372px;" alt="">
          </div>
        </div>
        <div class="col-8">
            <div class="card-body card-pd">
                <div class="table-responsive">
                        @if (Session::has('error'))
                          <div class="alert alert-danger">{{Session::has('error')}}</div>
                        @endif
                        {!! Form::open(array('route' =>array('admin.movie.update',$movie->id), 'files' => true , 'method' =>'POST')) !!}
                        {{ Form::hidden('_method', 'PUT') }}
                        {{ csrf_field() }}
                        <div class=" mb-1"><b class="add-type">{{trans('admin.edit')}} {{trans('admin.movie')}}</b></div>
                       <div class="container-fluid">
                           <div class="content-fluid">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.title')}}</label>
                                    <input type="text" name="title" class="form-control" value="{{$movie->title}}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.name')}}</label>
                                    <input type="text" name="name" class="form-control" value="{{$movie->name}}">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.directors')}}</label>
                                    <input type="text" name="directors" class="form-control" value="{{$movie->directors}}">
                                    @error('directors')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.actors')}}</label>
                                    <input type="text" name="actor" class="form-control" value="{{$movie->actor}}">
                                    @error('actor')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.date')}}</label>
                                    <input type="date" name="date" class="form-control" value="{{$movie->date}}">
                                    @error('date')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.year')}}</label>
                                    <input type="number" name="year" class="form-control" value="{{$movie->year}}">
                                    @error('year')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.time')}} {{ trans('admin.minutes') }} /{{ trans('admin.epoiside') }}</label>
                                    <input type="number" name="time" class="form-control" value="{{$movie->time}}" placeholder="">
                                    @error('time')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.view')}}</label>
                                    <input type="number" name="view" class="form-control" value="{{$movie->view}}" placeholder="{{ trans('admin.view') }}">
                                    @error('view')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.status')}}</label>
                                    <input type="text" name="status" class="form-control" value="{{$movie->status}}">
                                    @error('status')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.description')}}</label>
                                    <input  type="textlong" name="description" class="form-control" value="{{$movie->description}}" >
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.url_picture')}}</label>
                                    <input type="file" name="url_picture" class="url_picture" value="{{$movie->url_picture}}">
                                    @error('url_picture')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.url_link')}}</label>
                                    <input type="file" name="url_link" class="url_picture" value="{{$movie->url_link}}">
                                    @error('url_link')
                                        <small class="text-danger">{{ $message }}</small> 
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.category')}}</label>
                                    <br>
                                    <select name="categories_id" id="categories_id">
                                        <option value="{{$movie->category->id}}" name="{{$movie->name}}">{{$movie->category->name}}</option>
                                        @foreach ($category as $item)
                                        <option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.country')}}</label>
                                    <br>
                                    <select name="contries_id" id="contries_id">
                                        <option value="{{$movie->contry->id}}" name="{{$movie->name}}">{{$movie->contry->name}}</option>
                                        @foreach ($contry as $item)
                                        <option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>{{trans('admin.moviehot')}}</label>
                                    <br>
                                    <select name="film_hot" id="film_hot">
                                        <option value="{{$movie->film_hot}}" name="{{$movie->film_hot}}">{{$movie->film_hot}}</option>
                                        <option value="2" name="film_hot_2">Cực Hot</option>
                                        <option value="1" name="film_hot_1">Hot</option>
                                        <option value="0" name="film_hot_0">Không Hot</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>{{trans('admin.typemovie')}}</label>
                                    <br>
                                    <select name="type_movie" id="type_movie">
                                        @foreach ($typeMovie as $item)
                                        @if ($movie->type_movie == $item->id)
                                                <option value="{{$movie->type_movie}}" name="{{$movie->type_movie}}">
                                                    {{$item->name}}
                                                </option>
                                        @endif
                                        @endforeach
                                        @foreach ($typeMovie as $item)
                                            <option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" value="{{trans('admin.edit')}}">
                            </div>
                           </div>
                       </div>
                       {!! Form::close() !!}
                </div>
            </div>
        </div>
      </div>
    </div>

  </section>
     <!-- Main content -->
     
      <!-- /.content -->
@endsection