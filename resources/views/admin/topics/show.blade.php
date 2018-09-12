@extends('admin.layouts.app')

@section('title')
{{ $topic->title }}
@endsection

@section('head')
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
	              <h3 class="box-title">{{ $topic->title }}</h3>
                <div class="badge bg-primary pull-right">
                  {{ $topic->headline->name }}
                </div>
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
                
                <div class="text-right">
                  {!! $topic->body !!}
                </div>
                
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
