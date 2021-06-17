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
  <div class="add mb-2 mt-2">
    <a class="add-item" href="{{route('admin.user.add')}}"><button class="btn btn-add p-30"><i class="fas fa-plus"></i>{{ trans('admin.add') }}</button></a>
    <a class="trash-item"href="{{route('admin.user.delete.list')}}"><button class="btn btn-add p-30"><i class="fas fa-trash"></i>{{ trans('admin.daxoaganday') }}</button></a>
  </div>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>{{ trans('admin.number') }}</th>
          <th>{{ trans('admin.username') }}</th>
          <th>{{ trans('admin.fullname') }}</th>
          <th>{{ trans('admin.level') }}</th>
          <th>{{ trans('admin.active') }}</th>
          <th>Email</th>
          <th>{{ trans('admin.address') }}</th>
          <th>{{ trans('admin.created_at') }}</th>
          <th>{{ trans('admin.updated_at') }}</th>
          <th>{{ trans('admin.edit') }}</th>
          <th>{{ trans('admin.delete') }}</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=0 ?>
        @foreach ($getAll as $item)
        <tr class="old">
            <td>{{ number($i++) }}</td>
            <td>
              <a href="{{route('admin.user.info',$item->id)}}" class="d-lex">
                <img src="{{asset('dist/img/'.$item->avatar)}}" alt="User Avatar" class="img-size-50 img-circle mr-3">{{$item->username}}
              </a>
            </td>
            <td>{{$item->fullname}}</td>
            <td>
                @if ($item->level === 1)
                {{trans('admin.admin')}}
                @endif
                @if ($item->level === 0)
                {{trans('admin.member')}}
                @endif

            </td>
            <td>
              @if ($item->active === 1)
              {{trans('admin.active')}}
              @endif
              @if ($item->active === 0)
              {{trans('admin.noactive')}}
              @endif

          </td>
            <td>{{$item->email}}</td>
            <td>{{$item->avatar }}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <th>
              <div>
                {!! Form::open(array('route' => array('admin.user.edit',$item->id))) !!}
                {{ Form::hidden('_method', 'GET') }}
                <button type="submit" class="btn btn-success btn-ok"><i class="fas fa-pencil-alt"></i></button>
                {!! Form::close() !!}
            </div>
            </th>
            <th>
              <div>
                  {!! Form::open(array('route' => array('admin.user.delete',$item->id))) !!}
                  {{ Form::hidden('_method', 'DELETE') }}
                  <button type="submit" class="btn btn-danger btn-ok"><i class="far fa-trash-alt"></i></button>
                  {!! Form::close() !!}
              </div>
            </th>
        </tr>                     
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>{{ trans('admin.number') }}</th>
          <th>{{ trans('admin.username') }}</th>
          <th>{{ trans('admin.fullname') }}</th>
          <th>{{ trans('admin.level') }}</th>
          <th>{{ trans('admin.active') }}</th>
          <th>Email</th>
          <th>{{ trans('admin.address') }}</th>
          <th>{{ trans('admin.created_at') }}</th>
          <th>{{ trans('admin.update_at') }}</th>
          <th>{{ trans('admin.edit') }}</th>
          <th>{{ trans('admin.delete') }}</th>
        </tr>
        </tfoot>
      </table>
      
      <div class="card-footer">
        <nav aria-label="Contacts Page Navigation">
          <ul class="pagination justify-content-center m-0">
            {!! $getAll->render() !!}
          </ul>
        </nav>
      </div>
@endsection