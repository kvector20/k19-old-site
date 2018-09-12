@extends('admin.layouts.app')

@section('title')
New Topic
@endsection

@section('head')
  {{-- <link rel="stylesheet" href="{{ asset('/admin_style/css/froala//codemirror.min.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/froala_editor.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/froala_style.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/code_view.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/image_manager.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/image.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/table.css') }}">
  <link rel="stylesheet" href="{{ asset('/admin_style/css/froala/plugins/video.css') }}">
@endsection

@section('content')

	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Topics
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Add new Topic</h3>
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

                <form class="form-horizontal" action="{{ route('topics.store') }}" method="POST"  enctype="multipart/form-data">
                	{{ csrf_field() }}
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Title</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" autofocus id="inputName" placeholder="title" required name="title" value="{{ old('title') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Image</label>

                    <div class="col-sm-9">
                      <input type="file" class="form-control" id="inputName" placeholder="image" required name="image" value="{{ old('image') }}" accept="image/*">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Headline</label>

                    <div class="col-sm-9">
                      <select class="form-control" name="headline" id="HeadlineSelect" required>
                        <option value="">Choose your headline</option>
                        @foreach ($headlines as $headline)
                          <option value="{{ $headline->id }}"
                            @if ($headline->id == old('headline'))
                              selected 
                            @endif
                            >{{ $headline->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">PDF Url</label>

                    <div class="col-sm-9">
                      <input type="url" class="form-control" autofocus id="inputName" placeholder="pdf" required name="pdf" value="{{ old('pdf') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Body</label>

                    <div class="col-sm-9">
                      <textarea name="body" id="bodyTextarea" required>{{ old('body') }}</textarea>
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
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/align.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/code_beautifier.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/code_view.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/draggable.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/image.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/image_manager.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/link.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/lists.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/paragraph_format.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/paragraph_style.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/table.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/video.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/url.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/admin_style/js/froala/plugins/entities.min.js') }}"></script>

  <script>
      $(function(){
        $('#bodyTextarea')
          .froalaEditor({enter: $.FroalaEditor.ENTER_P, placeholderText: "Write the content of the magazine..."})
      });
  </script>
@endsection
