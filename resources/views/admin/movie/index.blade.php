@extends('admin.pages.index')
@section('title-admin',' Movie')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.movie')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.movie')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('card-header-title')
@endsection
@section('table')
    <div class="add mb-2 mt-2">
    <a class="add-item" href="{{route('admin.movie.add')}}"><button class="btn btn-add btn-success p-30"><i class="fas fa-plus"></i>{{trans('admin.add')}}</button></a>
    <a class="trash-item" href="{{route('admin.movie.delete.list')}}"><button class="btn btn-add btn-success p-30"><i class="fas fa-trash"></i>{{ trans('admin.daxoaganday') }}</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>{{trans('admin.number')}}</th>
          <th>{{trans('admin.title')}}</th>
          <th>{{trans('admin.name')}}</th>
          <th>{{trans('admin.directors')}}</th>
          <th>{{trans('admin.actors')}}</th>
          <th>{{trans('admin.time')}}</th>
          <th>{{trans('admin.date')}}</th>
          <th>{{trans('admin.view')}}</th>
          <th>{{trans('admin.status')}}</th>
          <th>{{trans('admin.category')}}</th>
          <th>{{trans('admin.country')}}</th>
          <th>{{trans('admin.year')}}</th>
          <th>{{trans('admin.url_picture')}}</th>
          <th>{{trans('admin.edit')}}</th>
          <th>{{trans('admin.delete')}}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0 ?>
        @foreach ($getAll as $item)
        <tr class="old">
            <td>{{  number($i++) }}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->directors}}</td>
            <td>{{$item->actor}}</td>
            <td>{{$item->time}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->view}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->category->name}}</td>
            <td>{{$item->contry->name}}</td>
            <td>{{$item->year}}</td>
            <td><img src="{{asset($item->url_picture)}}" class="wh-50 img-fluid" alt=""></td>
              <th>
                <div>
                  {!! Form::open(array('route' => array('admin.movie.edit',$item->id))) !!}
                  {{ Form::hidden('_method', 'GET') }}
                  <button type="submit" class="btn btn-success btn-ok"><i class="fas fa-pencil-alt"></i></button>
                  {!! Form::close() !!}
              </div>
              </th>
              <th>
                <div>
                    {!! Form::open(array('route' => array('admin.movie.delete',$item->id))) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class="btn btn-danger btn-ok"><i class="far fa-trash-alt"></i></button>
                    {!! Form::close() !!}
                </div>
              </th>
        </tr>                     
        @endforeach
        </tbody>
      </table>
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            {!! $getAll->render() !!}
          </ul>
        </nav>
      </div>
@endsection