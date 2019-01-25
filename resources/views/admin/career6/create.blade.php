@extends('admin.layouts.app')

@section('title')
New Career Launcher 6 Session
@endsection

@section('head')
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Career Launcher 6 Sessions
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add new Career Launcher 6 Session</h3>
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

                <form class="form-horizontal" action="{{ route('career6.session.create') }}" method="POST">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" autofocus id="inputName" placeholder="Name" required name="name" value="{{ old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Company</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" autofocus id="inputCompany" placeholder="Company" required name="company" value="{{ old('company') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Category</label>

                    <div class="col-sm-9">
                      <select name="category" required id="" class="form-control">
                        <option value="">Choose the category</option>
                        <option value="juniors">Juniors</option>
                        <option value="elec">Electrical</option>
                        <option value="mech">Mechanical</option>
                        <option value="general">General</option>
                        <option value="bio">Biomedical</option>
                        <option value="com">Computer and Communication</option>
                        <option value="civil">Civil</option>
                        <option value="fair">Fair</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="description" placeholder="Description" name="description">{{ old('description') }}</textarea>
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
