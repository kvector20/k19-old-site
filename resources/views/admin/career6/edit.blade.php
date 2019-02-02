@extends('admin.layouts.app')

@section('title')
Edit Session
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
        Edit {{ $session->name }}
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Edit Session</h3>
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

                <form class="form-horizontal" action="{{ route('career6.session.update', $session->id) }}" method="POST">
                	{{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" autofocus required name="name" value="{{ $session->name or old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputcompany" placeholder="Company" required name="company" value="{{ $session->company or old('company') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputMobile" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select name="category" class="form-control select2" required style="width: 100%;">
                        <option value="">Choose category</option>
                        @foreach ($categories as $category => $value)
                          @if ($session->category == $category)
                            <option selected value="{{ $category }}">{{ $value }}</option>
                          @else
                            <option value="{{ $category }}">{{ $value }}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                  </div>
    
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="description" placeholder="Description" name="description">{{ $session->description or old('description') }}</textarea>
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
