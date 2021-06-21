

{{--Most View--}}
@foreach ($view as $item)

<div class="media mb30-list bg-secondary-body">
    <div class="media-body media-padding10">
        <h3 class="title-medium-light mb-none">
            <a href="{{route('detail.index',[$item->id,$item->title])}}">{{$item->title}}</a>
        </h3>
        <h3 class="mb-none">
            <a href="{{route('detail.index',[$item->id,$item->title])}}" style="font-size:13px; color:#666">{{ trans('view') }} : {{$item->view}}</a>
        </h3>
        <h3><a href="#" style="font-size:13px; color:#666">{{ trans('admin.status') }} : {{$item->status}}</a> </h3>
    </div>
    <a class="img-opacity-hover" href="{{route('detail.index',[$item->id,$item->title])}}">
        <img src="{{asset($item->url_picture)}}" alt="news" class="img-fluid wh-50">
    </a>
</div>

@endforeach

{{-- Tags --}}
<div class="tag">
    <span class="mt-2 detail-tag">
        <i class="fas fa-tag"></i>
        <a href="" class="text-warning">{{"Từ Khóa Nổi Bật"}}</a>
    </span>
    <div class="row">
    @foreach ($tags as $item)
            <ul class="col-md-6">
                <li class="tag-li">
                    <a href="{{ route('tags.index',$item->id) }}" class="tag-item" >{{$item->title}}</a>
                    <i class="fas fa-tag"></i>
                </li>
            </ul>
    @endforeach
    </div>
</div>
