@extends('admin.layouts.app')

@section('title')
Edit Workshop
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
        Edit {{ $workshop->name }}
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

                <form class="form-horizontal" action="{{ route('workshops.update', $workshop->id) }}" method="POST" enctype="multipart/form-data">
                	{{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" required name="name" value="{{ $workshop->name or old('name') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Type</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputType" placeholder="Type" required name="type" value="{{ $workshop->type or old('email') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Color</label>

                    <div class="col-sm-9">
                      <input type="color" class="form-control datepicker" id="datepicker" placeholder="Color" required name="color" value="{{ $workshop->color or old('color') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Icon</label>

                    <div class="col-sm-9">
                      <input type="file" accept="image/*" class="form-control datepicker" id="datepicker" placeholder="Icon" name="image">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-9">
                      <textarea class="bodyTextarea" placeholder="Description" required name="description">{{ $workshop->description or old('description') }}</textarea>
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
