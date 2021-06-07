@extends('admin.pages.index')
@section('title-admin','TypeMovie')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.typemovie')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.typemovie')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('card-header-title')
    <h3 class="card-title">The Movie In DataBase</h3>
@endsection
@section('table')
    <div class="add mb-2 mt-2">
        <a href="{{route('admin.type.movie.add',$name)}}"><button class="btn btn-add btn-success p-30">{{trans('admin.add')}}</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
        <th>{{trans('admin.number')}}</th>
        <th>ID</th>
        <th>{{trans('admin.name')}}</th>
        <th>{{trans('admin.year')}}</th>
        <th>{{trans('admin.edit')}}</th>
        <th>{{trans('admin.delete')}}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0 ?>
        @foreach ($handle as $item)
        <tr class="old">
            <td>{{ number($i++) }}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->year}}</td>
            <th>
                <div>
                  {!! Form::open(array('route' => array('admin.type.movie.edit',[$name,$item->id]))) !!}
                  {{ Form::hidden('_method', 'GET') }}
                  <button type="submit" class="btn btn-success btn-ok"><i class="fas fa-pencil-alt"></i></button>
                  {!! Form::close() !!}
              </div>
              </th>
              <th>
                <div>
                    {!! Form::open(array('route' => array('admin.type.movie.delete',[$name,$item->id]))) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    <button type="submit" class="btn btn-danger btn-ok"><i class="far fa-trash-alt"></i></button>
                    {!! Form::close() !!}
                </div>
              </th>
        </tr>                     
        @endforeach
        </tbody>
    </table>
    
@endsection