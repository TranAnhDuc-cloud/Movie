<div class="modal fade" id="viewAvata">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Full Avatar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         @if ($user->provider)
            <img class="img-fluid" style="width:100%;" src="{{asset($user->avatar)}}" alt="User profile picture">
         @else
            <img class="img-fluid" style="width:100%;" src="{{asset('dist/img/'.$user->avatar)}}" alt="User profile picture">
         @endif
        </div>
      </div>
    </div>
</div>


<div class="modal fade" id="updateAvata">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Cập Nhật Ảnh Đại Diện</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          {!! Form::open(array('url' =>array('user/info/update/'.$user->id) , 'files' => true , 'method' =>'POST')) !!}
            {{ Form::hidden('_method', 'PUT') }}
                {{ csrf_field() }}

                  @if($user->provider)
                    <img class="img-fluid modal-img" src="{{asset($user->avatar)}}" alt="User profile picture">
                  @else
                    <img class="img-fluid modal-img" src="{{asset('dist/img/'.$user->avatar)}}" alt="User profile picture">
                  @endif

                  <label class="dropdown-iteam" for="upload">
                    <input type="file" name="avatar" id="avatar">
                    @error('avatar')
                      <small class="text-danger">{{ $message }}</small> 
                    @enderror
                    
                  </label>
                  <input type="submit" value="Update">

          {!! Form::close() !!}
        </div>
        <div class="modal-footer">
            Close
        </div>

      </div>
    </div>
</div>