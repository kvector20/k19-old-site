@extends('admin.layouts.app')

@section('title')
Edit your Experience
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/admin_style/css/froala/froala_editor.css') }}">
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Experience
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Edit your experience</h3>
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

                <form class="form-horizontal" action="{{ route('admin.experience.edit') }}" method="POST">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Experience</label>

                    <div class="col-sm-9">
                      <textarea type="text" class="bodyTextarea" class="form-control" id="inputName" placeholder="Objectives" required name="experience">{{ $experience->experience or old('experience') }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Skills</label>

                    <div class="col-sm-9">
                      <textarea type="text" class="bodyTextarea" class="form-control" id="inputName" placeholder="Objectives" required name="skills">{{ $experience->skills or old('skills') }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Courses</label>

                    <div class="col-sm-9">
                      <textarea type="text" class="bodyTextarea" class="form-control" id="inputName" placeholder="Objectives" required name="courses">{{ $experience->courses or old('courses') }}</textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Hobbies</label>

                    <div class="col-sm-9">
                      <textarea type="text" class="bodyTextarea" class="form-control" id="inputName" placeholder="Hobbies" required name="hobbies">{{ $experience->hobbies or old('hobbies') }}</textarea>
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
<script type="text/javascript" src="{{ asset('/admin_style/js/froala/froala_editor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/lists.min.js') }}"></script>
<script>
  $(function() {
    $('.bodyTextarea')
      .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: "Write something..."})
  })
</script>
@endsection
