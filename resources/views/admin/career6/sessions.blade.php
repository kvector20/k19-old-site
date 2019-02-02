@extends('admin.layouts.app')

@section('title')
Career Launcher 6th Sessions
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/admin_style/css/dataTables.bootstrap.css') }}">
	{{-- <script src="{{ asset('/admin_style/css/bootstrap-toggle.min.css') }}"></script> --}}
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('content')


	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Career Launcher 6<sup>th</sup> Sessions
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Career Launcher 6<sup>th</sup> Sessions Table</h3>
	              @can('career6.session', Auth::user())
	              	<a type="button" href="{{ route('career6.session.create') }}" class="btn btn-success btn-flat pull-right">Add New session</a>
	              @endcan
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	            	@if (session('status'))
					    <div class="alert alert-success">
					        {{ session('status') }}
					    </div>
					@endif
					@if (session('error'))
				    <div class="alert alert-danger col-sm-9 col-sm-offset-3">
				        {{ session('error') }}
				    </div>
				@endif
	              <table id="example1" class="table table-bordered table-striped">
	                <thead>
	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
	                  <th>Company</th>
	                  <th>Category</th>
	                  <th>Description</th>
	                  <th>Controls</th>
	                  <th>Added From</th>
	                  <th>Updated From</th>
	                </tr>
	                </thead>

	                <tbody>

	                @foreach ($sessions as $session)
	                	<tr>
	                		<td>{{ $loop->index + 1 }}</td>
	                		<td>{{ $session->name }}</td>
	                		<td>{{ $session->company }}</td>
	                		<td>{{ $session->category }}</td>
	                		<td>{{ $session->description }}</td>
	                		<td>
								<form action="{{ route('career6.session.status', $session->id) }}" id="status-form" method="POST">
									@csrf
		                            <input name="status" required value="{{ $session->status }}" id="status" type="checkbox" {{ ($session->status) ? 'checked' : '' }} data-toggle="toggle" data-onstyle="success"  data-offstyle="danger">
		                        </form>
	                			<a href="{{ route('career6.session.edit', $session->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
	                		</td>
	                		<td>{{ $session->created_at->diffForHumans() }}</td>
	                		<td>{{ $session->updated_at->diffForHumans() }}</td>
	                	</tr>
	                @endforeach

	                </tbody>

	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
	                  <th>Company</th>
	                  <th>Category</th>
	                  <th>Description</th>
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
{{-- <script src="{{ asset('/admin_style/js/bootstrap-toggle.min.js') }}"></script> --}}
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("input#status").on('change', function() {
        $(this).parents("form#status-form").submit();
    });
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
