@extends('admin.pages.index')
@section('title-admin','Category')

@section('content-header-title')
    <h1 class="m-0">{{ trans('admin.category') }}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{ trans('admin.home') }}</a></li>
    <li class="pl-2"> » {{ trans('admin.category') }}</li>
    <li class="pl-2"> » {{ trans('admin.show') }}</li>
@endsection
@section('card-header-title')
@endsection
@section('table')
    <div class="add mb-2 mt-2">
      <a class="add-item" href="{{route('admin.category.add')}}"><button class="btn btn-add btn-success p-30"><i class="fas fa-plus"></i>{{ trans('admin.add') }}</button></a>
      <a class="trash-item" href="{{route('admin.category.delete.list')}}"><button class="btn btn-add btn-success p-30"><i class="fas fa-trash"></i>{{ trans('admin.daxoaganday') }}</button></a>
    </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>{{ trans('admin.number') }}</th>
          <th>{{ trans('admin.title') }}</th>
          <th>{{ trans('admin.description') }}</th>
          <th>{{ trans('admin.url_picture') }}</th>
          <th>{{ trans('admin.edit') }}</th>
          <th>{{ trans('admin.delete') }}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0 ?>
        @foreach ($getAll as $item)
        <tr class="old">
            <td>{{ number($i++) }}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description}}</td>
            <td><img src="{{asset($item->url_picture)}}" class="wh-50" alt=""></td>
            <th>
              <div>
                {!! Form::open(array('route' => array('admin.category.edit',$item->id))) !!}
                {{ Form::hidden('_method', 'GET') }}
                <button type="submit" class="btn btn-success btn-ok"><i class="fas fa-pencil-alt"></i></button>
                {!! Form::close() !!}
            </div>
            </th>
            <th>
              <div>
                  {!! Form::open(array('route' => array('admin.category.delete',$item->id))) !!}
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