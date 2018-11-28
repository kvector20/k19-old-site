@extends('admin.layouts.app')

@section('title')
Rejected Participants
@endsection

@section('head')

@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rejected Participants
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add Rejected Participants</h3>
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
				    <div class="alert alert-success col-sm-9 col-sm-offset-3">
				        {{ session('status') }}
				    </div>
				@endif

                <form class="form-horizontal" action="{{ route('participants19.rejected') }}" method="POST">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" autofocus id="inputName" placeholder="Name" required name="name" value="{{ old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="inputName" placeholder="Email" required name="email" value="{{ old('email') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9">
                      <select name="status" required id="" class="form-control">
                      	<option value="">Select Participant Status</option>
                      	<option value="over">Over Qualified</option>
                      	<option value="under">Under Qualified</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
					<label for="" class="col-sm-3 control-label">First Preference</label>
					<div class="col-sm-9">
						<select name="first" required class="form-control" id="">
							<option value="">Choose your first preference workshop</option>
							<optgroup label="Academic">
								@foreach ($academic as $workshop)
									<option
									@if ($workshop->id == old('first'))
										selected
									@endif
									value="{{ $workshop->id }}">{{ $workshop->name }}</option>
								@endforeach
							</optgroup>
							<optgroup label="Automotive">
								@foreach ($automotive as $workshop)
									<option
									@if ($workshop->id == old('first'))
										selected
									@endif
									value="{{ $workshop->id }}">{{ $workshop->name }}</option>
								@endforeach
							</optgroup>
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

@endsection
