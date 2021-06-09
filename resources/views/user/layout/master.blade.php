
@include('user.layout.header')
    <div class="container" style="padding-top: 120px">
        @if (Auth::check())
        <marquee style="color: red; padding-top:10px">
            {{trans('client.wellcome')}}
            {{trans('client.you')}}
            <b style="color: #fff">{{Auth::user()->username}}</b>
            {{trans('client.to')}}<b style="color: #fff"> PhimHay.TV</b>
        @endif
        </marquee>
        
    </div>

    {{-- Pages --}}
    @section('content-pages')
        
    @show
    
    @include('user.layout.filmhot')

    {{-- Index --}}
    @section('content-index')
        
    @show
    

@include('user.layout.footer')
