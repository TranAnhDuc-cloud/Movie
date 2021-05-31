@extends('admin.layout.master')
@section('title-admin','Movie | Add')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.movie')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.movie')}}</li>
    <li class="pl-2"> » {{trans('admin.add')}}</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.movie.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class=" mb-1"><b class="add-type">{{trans('admin.add')}} {{trans('admin.movie')}}</b></div>
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.title')}}{{trans('admin.movie')}}</label>
                                <input type="text" name="title" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.title')}}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.name')}}</label>
                                <input type="text" name="name" class="form-control" placeholder="{{trans('admin.enter')}}{{trans('admin.name')}}">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.directors')}}</label>
                                <input type="text" name="directors" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.directors')}}">
                                @error('directors')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.actors')}}</label>
                                <input type="text" name="actor" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.actors')}}">
                                @error('actor')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.date')}}</label>
                                <input type="date" name="date" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.date')}}">
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.year')}}</label>
                                <input type="number" name="year" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.year')}}">
                                @error('year')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.time')}}</label>
                                <input type="number" name="time" class="form-control" placeholder="{{trans('admin.minutes')}} / {{trans('admin.epoiside')}}">
                                @error('time')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.view')}}</label>
                                <input type="number" name="view" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.view')}}">
                                @error('year')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.status')}}</label>
                                <input type="text" name="status" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.status')}}">
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.description')}}</label>
                                <input type="text" name="description" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.description')}}">
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                <label>{{trans('admin.url_picture')}}</label>
                                <input type="text" name="url_picture" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.url_picture')}}">
                                @error('url_picture')
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.url_link')}}</label>
                                <input type="text" name="url_link" class="form-control" placeholder="{{trans('admin.enter')}} {{trans('admin.url_link')}}">
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
                                    @foreach ($category as $item)
                                    <option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label>{{trans('admin.country')}}</label>
                                <br>
                                <select name="contries_id" id="contries_id">
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
                                        <option value="{{$item->id}}" name="available_no">{{$item->name}}</option>
                                    @endforeach
                                </select>
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