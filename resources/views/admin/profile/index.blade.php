@extends('admin.layouts.app')

@section('title')
	Admin Profile
@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Profile
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="
              @if (Auth::user()->image == '')
				{{ asset('/images/team2.jpg') }}
				@else
				{{ App\Helpers\Helpers::storage(Auth::user()->image) }}
              @endif" alt="User profile picture">

              <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
              <p class="text-center text-muted">
                {{ Auth::user()->position->committee }} {{ Auth::user()->position->position }}
              </p>

              <form action="{{ url('admin/photo') }}" method="POST" enctype="multipart/form-data">
              <a class="btn bg-red btn-block" id="profileImage"><b>Change Profile Photo</b></a>
            	{{ csrf_field() }}
              	<input type="file" name="profile_photo" id="fileImage" accept="image/*" />
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>

              <p class="text-muted">
                {{ Auth::user()->email }}
              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>
              <li><a href="#change-password" data-toggle="tab">Change Password</a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="settings">
	
        				@foreach ($errors->all() as $error)
                  <div class="alert alert-danger col-sm-9 col-sm-offset-3">{{ $error }}</div>
                @endforeach

                  @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                  @if (session('error'))
                    <div class="alert alert-danger col-sm-9 col-sm-offset-3">{{ session('error') }}</div>
                  @endif

                <form class="form-horizontal" action="{{ route('admin.update') }}" method="POST">
                	{{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Auth::user()->name }}" required name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}" required name="email">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn bg-red">Submit</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane" id="change-password">
                <form class="form-horizontal" action="{{ route('admin.password') }}" method="POST">
                  
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">Old Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputSkills" placeholder="Old Password" required name="old_password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-3 control-label">New Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputSkills" placeholder="New Password" required name="password">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-3 control-label">Confirm Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" required  name="password_confirmation">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                      <button type="submit" class="btn bg-red">Submit</button>
                    </div>
                  </div>

                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2014-{{ Carbon\Carbon::now()->year }} <a href="{{ url('/') }}">{{ config('app.name') }}</a>.</strong> All rights
    reserved.
  </footer>

@endsection

@section('footer')

	<script>
		// make file button
		var wrapper = $('<div/>').css({height:0,width:0,'overflow':'hidden'});
		var fileInput = $('input:file').wrap(wrapper);

		$('#fileImage').on("change", function() {
		    $(this).parents("form").submit();
		});

		$('#profileImage').click(function(){
		    fileInput.click();
		}).show();
	</script>

@endsection