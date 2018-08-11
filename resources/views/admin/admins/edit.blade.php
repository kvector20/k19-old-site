@extends('admin.layouts.app')

@section('title')
Edit Admin
@endsection

@section('head')
  <link rel="stylesheet" href="{{ asset('/admin_style/js/select2/select2.min.css') }}">
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit {{ $admin->name }}
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Edit Admin</h3>
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

                <form class="form-horizontal" action="{{ route('admins.update', $admin->id) }}" method="POST">
                	{{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" required name="name" value="{{ $admin->name or old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" required name="email" value="{{ $admin->email or old('email') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputMobile" class="col-sm-3 control-label">Role</label>

                    <div class="col-sm-9">
                      <select name="role" class="form-control select2" required style="width: 100%;">
                        <option value="">Choose role</option>
                        @foreach ($roles as $role)
                          @if ($admin->role == $role->id)
                            <option selected value="{{ $role->id }}">{{ $role->position }} {{ $role->committee }}</option>
                          @else
                            <option value="{{ $role->id }}">{{ $role->position }} {{ $role->committee }}</option>
                          @endif
                        @endforeach
                      </select>
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
  <script src="{{ asset('admin_style/js/select2/select2.full.min.js') }}"></script>
  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();
    });
  </script>
@endsection
