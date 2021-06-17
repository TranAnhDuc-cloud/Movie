@extends('admin.pages.index')
@section('title-admin','Dashboard')

@section('content-header-title')
    <h1 class="m-0">{{trans('client.searchresult')}}</h1>
@endsection
@section('content-header-url')
    <li class="breadcrumb-item"><a href="{{route('admin')}}">{{trans('admin.home')}}</a></li>
    <li class="pl-2"> » {{trans('admin.search')}}</li>
@endsection

@section('table')
    <!-- Info boxes -->
     <!-- Main row -->
    <div class="row">
        <table id="example2" class="table table-bordered table-hover">
            <tbody>
            <?php $i=0 ?>
            <b>{{ trans('admin.movie') }}</b>
            @foreach ($movie as $item)
            <tr class="old">
                <td>{{ number($i++) }}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->directors}}</td>
                <td>{{$item->actor}}</td>
                <td>{{$item->time}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->url_picture}}</td>
                <td>{{$item->url_link}}</td>
                <td>{{$item->view}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->contry->name}}</td>
                <td>{{$item->year}}</td>
            </tr>                     
            @endforeach
            </tbody>
        </table>
        <table id="example2" class="table table-bordered table-hover">
            <tbody>
            <?php $i=0 ?>
            <b>{{ trans('admin.user') }}</b>
            @foreach ($user as $item)
            <tr class="old">
                <td>{{ number($i++) }}</td>
                <td>
                    <a href="{{route('admin.user.info',$item->id)}}">
                      <img src="{{asset('dist/img/'.$item->avatar)}}" alt="User Avatar" class="img-size-50 img-circle mr-3">{{$item->username}}
                    </a>
                </td>
                <td>{{$item->email}}</td>
            </tr>                     
            @endforeach
            </tbody>
        </table>
        <table id="example2" class="table table-bordered table-hover">
            <tbody>
            <?php $i=0 ?>
            <b>{{ trans('admin.category') }}</b>
            @foreach ($category as $item)
            <tr class="old">
                <td>{{ number($i++) }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
            </tr>                     
            @endforeach
            </tbody>
        </table>
    </div>
@endsection