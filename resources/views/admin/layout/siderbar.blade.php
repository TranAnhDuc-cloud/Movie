<div class="col-md-4">
    <!-- PRODUCT LIST -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">{{ trans('admin.recentlyaddmovie') }}</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
          <ul class="products-list product-list-in-card pl-2 pr-2">
              @foreach ($siderbar as $item)
              <li class="item">
                  <div class="product-img">
                  <img src="{{asset($item->url_picture)}}" alt="Product Image" class="img-size-50">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$item->title}}</a>
                      <span class="badge badge-warning float-right">{{trans('admin.view')}} : {{$item->view}}</span>
                      
                    </a>
                  <span class="product-description">
                      {{$item->name}}
                  </span>
                  <span class="badge">{{trans('admin.created_at')}} : {{$item->created_at}}</span>
                  </div>
              </li>
              @endforeach
          </ul>
              <div class="div-loadmore">
                  <button class="btn btn-danger center-block loadMore">Load More</button>
              </div>
          <script src="{{asset('js/admin.js')}}"></script>
    </div>
    
  </div>