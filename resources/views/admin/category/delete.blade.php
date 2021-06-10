@extends('admin.pages.delete')
@section('title-admin','Deleted At')

@section('content-header-title')
    <h1 class="m-0">{{trans('admin.deleted_at')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.deleted_at')}}</li>
    <li class="pl-2"> » {{trans('admin.show')}}</li>
@endsection
@section('table_delete')
    
<table class="table m-0">
  <thead>
  <tr>
    <th>{{ trans('admin.number') }}</th>
    <th>{{ trans('admin.name') }}</th>
    <th>{{ trans('admin.created_at') }}</th>
    <th>{{ trans('admin.deleted_at') }}</th> 
    <th>{{ trans('admin.restore') }}</th> 
    <th>{{ trans('admin.harddelete') }}</th> 
  </tr>
  </thead>
  <tbody>
      @foreach ($deleted as $item)
      <tr class="created_at">
        <td><a href="pages/examples/invoice.html">{{$item->id}}</a></td>
        <td>{{$item->name}}</td>
        <td><span class="badge badge-success">{{$item->created_at}}</span></td>
        <td><span class="badge badge-danger">{{$item->deleted_at}}</span></td>
        <td>
          <div>
            {!! Form::open(array('route' => array('admin.category.restore',$item->id), 'method' =>'POST')) !!}
            {{ Form::hidden('_method', 'PUT') }}
            <button type="submit" class="btn btn-success btn-ok"><i class="fas fa-undo"></i></button>
            {!! Form::close() !!}
          </div>
        </td>
        <td>
          <div>
              {!! Form::open(array('route' => array('admin.category.deleteHard',$item->id))) !!}
              {{ Form::hidden('_method', 'DELETE') }}
              <button type="submit" class="btn btn-danger btn-ok"><i class="far fa-trash-alt"></i></button>
              {!! Form::close() !!}
          </div>
        </td>
      </tr>
      @endforeach
  </tbody>
</table>
    
@endsection