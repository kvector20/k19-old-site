@extends('admin.layouts.app')

@section('title')
Edit role
@endsection

@section('head')
  <link rel="stylesheet" href="{{ asset('/admin_style/css/all.css') }}">
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Roles
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Edit role</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              @foreach ($errors->all() as $error)
        					<div class="alert alert-danger col-sm-9 col-sm-offset-3">{{ $error }}</div>
        				@endforeach

				@if (session('error'))
				    <div class="alert alert-danger col-sm-9 col-sm-offset-3">
				        {{ session('error') }}
				    </div>
				@endif

                <form class="form-horizontal" action="{{ route('roles.update', $role->id) }}" method="POST">
                	{{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Position</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputPosition" placeholder="Position" required name="position" value="{{ $role->position or old('position') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Committee</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Committee" required name="committee" value="{{ $role->committee or old('committee') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Permissions</label>

                    <div class="col-sm-9">
                      <?php $permissionsArray = array(); ?>
                      @foreach ($permissions as $permission)

                        @if (!in_array(explode('.', $permission->type)[0], $permissionsArray))
                          
                          <div class="check-all-container">
                            <div style="clear: both;"></div>
                            <b>{{ ucfirst(explode('.', $permission->type)[0]) }}:</b> <br>

                            @foreach ($permissions as $permission2)

                              @if (explode('.', $permission->type)[0] === explode('.', $permission2->type)[0])

                                <label class="col-sm-4">
                                  <input type="checkbox" name="permission[]" value="{{ $permission2->id }}" class="minimal"
                                  @foreach ($role->permissions as $rolePermission)
                                    @if ($permission2->id == $rolePermission->id)
                                      {{ 'checked' }} 
                                    @endif
                                  @endforeach
                                  > {{ $permission2->type }}
                                </label>

                              @endif

                            @endforeach
                          </div>
                          
                          <?php $permissionsArray[] = explode('.', $permission->type)[0];?>

                        @endif

                      @endforeach
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn bg-red">Submit</button>
                    </div>
                  </div>
                </form>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	      </div>
	  </div>
	</section>

</div>

@endsection

@section('footer')
  <script src="{{ asset('admin_style/js/icheck.min.js') }}"></script>
  <script>
    $(function () {
      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-blue'
      });
    });
  </script>
@endsection
