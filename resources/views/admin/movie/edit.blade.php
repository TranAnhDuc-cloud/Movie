@extends('admin.layout.master')
@section('title-admin','Movie | Edit')


@section('content-header-title')
    <h1 class="m-0">Movie</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Home</a></li>
    <li class="pl-2"> » Movie</li>
    <li class="pl-2"> » Edit</li>
@endsection
@section('content-wrapper')
     <!-- Main content -->
     <div class="card-body card-pd">
        <div class="table-responsive">
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session::has('error')}}</div>
                @endif
            <form action="{{route('admin.movie.update',$movie->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-6">
                        <label>Tên Phim</label>
                        <input type="text" name="title" class="form-control" placeholder="{{$movie->title}}">
                        @error('title')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Tên Thứ 2</label>
                        <input type="text" name="name" class="form-control" placeholder="{{$movie->name}}">
                        @error('name')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Đạo Diễn</label>
                        <input type="text" name="directors" class="form-control" placeholder="{{$movie->directors}}">
                        @error('directors')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Diễn Viên</label>
                        <input type="text" name="actor" class="form-control" placeholder="{{$movie->actor}}">
                        @error('actor')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Ngày Công Chiếu</label>
                        <input type="date" name="date" class="form-control" placeholder="{{$movie->date}}">
                        @error('date')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Năm</label>
                        <input type="number" name="year" class="form-control" placeholder="{{$movie->year}}">
                        @error('year')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Thời Lượng</label>
                        <input type="number" name="time" class="form-control" placeholder="{{$movie->time}} Phút /Tập">
                        @error('time')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Số Lượt Xem</label>
                        <input type="number" name="view" class="form-control" placeholder="{{$movie->view}} Lượt Xem">
                        @error('year')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Trạng Thái</label>
                        <input type="text" name="status" class="form-control" placeholder="{{$movie->status}}">
                        @error('status')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Mô Tả Phim</label>
                        <input type="textlong"  name="description" class="form-control" placeholder="{{$movie->description}}">
                        @error('description')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Link Ảnh</label>
                        <input type="text" name="url_picture" class="form-control" placeholder="{{$movie->url_picture}}">
                        @error('url_picture')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label>Link Phim</label>
                        <input type="text" name="url_link" class="form-control" placeholder="{{$movie->url_link}}">
                        @error('url_link')
                            <small class="form-text text-muted alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Thể Loại</label>
                        <br>
                        <select name="categories_id" id="categories_id">
                            <option value="{{$movie->id}}" name="{{$movie->name}}">{{$movie->category->name}}</option>
                            @foreach ($category as $item)
                            <option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Quốc Gia</label>
                        <br>
                        <select name="contries_id" id="contries_id">
                            <option value="{{$movie->id}}" name="{{$movie->name}}">{{$movie->contry->name}}</option>
                            @foreach ($contry as $item)
                            <option value="{{$item->id}}" name="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Độ Hot</label>
                        <br>
                        <select name="film_hot" id="film_hot">
                            <option value="{{$movie->film_hot}}" name="{{$movie->film_hot}}">{{$movie->film_hot}}</option>
                            <option value="2" name="film_hot_2">Cực Hot</option>
                            <option value="1" name="film_hot_1">Hot</option>
                            <option value="0" name="film_hot_0">Không Hot</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Kiểu Phim</label>
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
                    <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa">
                </div>
                
            </form>
        </div>
    </div>
      <!-- /.content -->
@endsection