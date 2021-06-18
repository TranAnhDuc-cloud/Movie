<div class="modal fade" id="viewAvata">
    <div class="modal-dialog">
      <div class="modal-content" style="min-width: 500px;">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        @if (Auth::user()->provider)
            <img style="padding: 50px; border-radius: 0px;" class="img-fluid modal-img" src="{{asset(Auth::user()->avatar)}}" alt="User profile picture">
        @else
            <img style="padding: 50px; border-radius: 0px;" class="img-fluid modal-img" src="{{asset('dist/img/'.Auth::user()->avatar)}}" alt="User profile picture">
        @endif

      </div>
    </div>
</div>


<div class="modal fade" id="updateAvata">
    <div class="modal-dialog">
      <div class="modal-content" style="min-width: 500px;">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cập Nhật Ảnh Đại Diện</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          {!! Form::open(array('route' =>array('setting.avatar') , 'files' => true , 'method' =>'POST')) !!}
            {{ Form::hidden('_method', 'PUT') }}
                {{ csrf_field() }}

                    @if (Auth::user()->provider)
                        <img style="width:100%; padding: 40px;" class="img-fluid" src="{{asset(Auth::user()->avatar)}}" alt="User profile picture">
                    @else
                        <img style="width:100%; padding: 40px;" class="img-fluid" src="{{asset('dist/img/'.Auth::user()->avatar)}}" alt="User profile picture">
                    @endif

                  <label class="dropdown-iteam" for="upload">
                        <input type="file" name="avatar" id="avatar">
                        @error('avatar')
                        <small class="text-danger">{{ $message }}</small> 
                        @enderror
                  </label>

                  <input type="submit" value="Update" class="btn btn-success">

          {!! Form::close() !!}
        </div>

        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-danger">Close</button>
        </div>

      </div>
    </div>
</div>