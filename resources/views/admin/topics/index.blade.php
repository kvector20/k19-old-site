@extends('admin.layouts.app')

@section('title')
Topics
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/admin_style/css/dataTables.bootstrap.css') }}">
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
	              <h3 class="box-title">Topics Table</h3>
	              @can('topics.create', Auth::user())
	              	<a type="button" href="{{ route('topics.create') }}" class="btn btn-success btn-flat pull-right">Add New Topic</a>
	              @endcan
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	            	@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif
	              <table id="example1" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Title</th>
	                  <th>Headline</th>
	                  <th>Writer</th>
	                  <th>Views</th>
	                  <th>Published</th>
	                  <th>Controls</th>
	                  <th>Added From</th>
	                  <th>Updated From</th>
	                </tr>
	                </thead>

	                <tbody>

	                @foreach ($topics as $topic)
	                	<tr>
	                		<td>{{ $loop->index + 1 }}</td>
	                		<td>{{ $topic->title }}</td>
	                		<td>{{ $topic->headline->name }}</td>
	                		<td>{{ $topic->writer->name }}</td>
	                		<td>{{ $topic->views }}</td>
	                		<td>
								@if ($topic->publish !== null)
									@can('topics.delete', Auth::user())
			                			<a 
											href="#" 
											class="btn btn-success btn-xs"
											onclick="
				                  					event.preventDefault();
				                  					if(confirm('Are you sure you want to unpublish this topic?')) {
				                  						$(this).siblings('form').submit();
				                  					}"
										>Unpublish</a>
										<form action="{{ route('topics.publish',$topic->id) }}" method="POST">
									        {{ csrf_field() }}
									    </form>
									@endcan
								@else
									@can('topics.delete', Auth::user())
			                			<a 
											href="#" 
											class="btn btn-danger btn-xs"
											onclick="
				                  					event.preventDefault();
				                  					if(confirm('Are you sure you want to publish this topic?')) {
				                  						$(this).siblings('form').submit();
				                  					}"
										>Publish</a>
										<form action="{{ route('topics.publish',$topic->id) }}" method="POST">
									        {{ csrf_field() }}
									    </form>
									@endcan
								@endif
	                		</td>
	                		<td>
	                			@can('topics.update', Auth::user())
	                				<a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
	                			@endcan

	                			@can('topics.delete', Auth::user())
		                			<a 
										href="#" 
										class="btn btn-danger btn-xs"
										onclick="
			                  					event.preventDefault();
			                  					if(confirm('Are you sure you want to delete this account?')) {
			                  						$(this).siblings('form').submit();
			                  					}"
									><i class="fa fa-times"></i></a>
									<form action="{{ route('topics.destroy',$topic->id) }}" method="POST">
								        {{ csrf_field() }}
								        {{ method_field('DELETE') }}
								    </form>
								@endcan
	                		</td>
	                		<td>{{ $topic->created_at->diffForHumans() }}</td>
	                		<td>{{ $topic->updated_at->diffForHumans() }}</td>
	                	</tr>
	                @endforeach

	                </tbody>

	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Title</th>
	                  <th>Headline</th>
	                  <th>Writer</th>
	                  <th>Views</th>
	                  <th>Published</th>
	                  <th>Controls</th>
	                  <th>Added From</th>
	                  <th>Updated From</th>
	                </tr>
	                </tfoot>
	              </table>
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

<script src="{{ asset('/admin_style/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/admin_style/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
  	$("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

@endsection
