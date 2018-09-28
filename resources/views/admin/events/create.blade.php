@extends('admin.layouts.app')

@section('title')
New Event
@endsection

@section('head')
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('/admin_style/css/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('/admin_style/css/datepicker/datepicker3.css') }}">
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Events
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add new Event</h3>
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

                @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                  @endif

                <form class="form-horizontal" action="{{ route('events.store') }}" method="POST">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" autofocus id="inputName" placeholder="Title" required name="title" value="{{ old('title') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Start date</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control datepicker" id="datepicker" placeholder="Start date" required name="start_date" value="{{ old('start_date') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">End date</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control datepicker" id="inputEmail" placeholder="End date" required name="end_date" value="{{ old('end_date') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Start time</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control timepicker" placeholder="Start time" required name="start_time" value="{{ old('start_time') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">End time</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control timepicker" id="inputEmail" placeholder="End time" required name="end_time" value="{{ old('end_time') }}">
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
<!-- bootstrap time picker -->
<script src="{{ asset('admin_style/js/timepicker/bootstrap-timepicker.min.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('admin_style/js/datepicker/bootstrap-datepicker.js') }}"></script>
<script>
  $(function() {
    //Date picker
    $('.datepicker').datepicker({
      autoclose: true
    });
    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  })
</script>
@endsection
