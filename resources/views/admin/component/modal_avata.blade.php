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
          <img class="img-fluid modal-img" src="{{asset('dist/img/'.$member->avatar)}}" alt="User profile picture">
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
          {!! Form::open(array('route' =>array('admin.user.update.avatar',$member->id) , 'files' => true , 'method' =>'POST')) !!}
            {{ Form::hidden('_method', 'PUT') }}
                {{ csrf_field() }}
                  <img class="img-fluid modal-img" src="{{asset('dist/img/'.$member->avatar)}}" alt="User profile picture">
                  <label class="dropdown-iteam" for="upload">
                    <input type="file" name="avatar" id="avatar">
                    {{-- <p class="text-center m-5 text-danger"><i class="fas fa-hand-point-right"></i> Chọn Ảnh Đại Diện</p> --}}
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