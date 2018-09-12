@extends('admin.layouts.app')

@section('title')
Edit your personal info
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/admin_style/css/datepicker/datepicker3.css') }}">
<link rel="stylesheet" href="{{ asset('/admin_style/css/froala/froala_editor.css') }}">
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Personal info
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Edit your personal info</h3>
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

                <form class="form-horizontal" action="{{ route('admin.info.edit') }}" method="POST">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Phone</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Phone" required name="phone" value="{{ $personalInfo->phone or old('phone') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Date of birth</label>

                    <div class="col-sm-9">
                      <input type="text" id="datepicker" class="form-control" id="inputName" placeholder="Date of birth" required name="date_of_birth" value="{{ $personalInfo->date_of_birth or old('date_of_birth') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Address" required name="address" value="{{ $personalInfo->address or old('address') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Objectives</label>

                    <div class="col-sm-9">
                      <textarea type="text" id="bodyTextarea" class="form-control" id="inputName" placeholder="Objectives" required name="objectives">{{ $personalInfo->objectives or old('objectives') }}</textarea>
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
<!-- bootstrap datepicker -->
<script src="{{ asset('/admin_style/js/datepicker/bootstrap-datepicker.js') }}"></script>

<script type="text/javascript" src="{{ asset('/admin_style/js/froala/froala_editor.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/lists.min.js') }}"></script>
<script>
  $(function() {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    $('#bodyTextarea')
      .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: "Write your objectives..."})
  })
</script>
@endsection
