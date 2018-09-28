@extends('admin.layouts.app')

@section('title')
New Workshop
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
        Workshops
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add new Workshop</h3>
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

                <form class="form-horizontal" action="{{ route('workshops.store') }}" method="POST" enctype="multipart/form-data">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" autofocus id="inputName" placeholder="Name" required name="name" value="{{ old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Type</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control datepicker" id="datepicker" placeholder="Type" required name="type" value="{{ old('type') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Color</label>

                    <div class="col-sm-9">
                      <input type="color" class="form-control datepicker" id="datepicker" placeholder="Color" required name="color" value="{{ old('color') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Icon</label>

                    <div class="col-sm-9">
                      <input type="file" accept="image/*" class="form-control datepicker" id="datepicker" placeholder="Icon" required name="image">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-9">
                      <textarea class="bodyTextarea" placeholder="Description" required name="description">{{ old('description') }}</textarea>
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
