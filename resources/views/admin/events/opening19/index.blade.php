@extends('admin.layouts.app')

@section('title')
Opening 19 Participants
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
        Opening 19 Participants
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12" style="overflow-x: scroll;">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Participants Table</h3>
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
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Facebook</th>
	                  <th>University</th>
	                  <th>Faculty</th>
	                  <th>Department</th>
	                  <th>Academic Year</th>
	                  <th>Added From</th>
	                </tr>
	                </thead>

	                <tbody>

	                @foreach ($participants as $participant)
	                	<tr>
	                		<td>{{ $loop->index + 1 }}</td>
	                		<td>{{ $participant->name }}</td>
	                		<td>{{ $participant->email }}</td>
	                		<td>{{ $participant->phone }}</td>
	                		<td><a href="{{ $participant->facebook_link }}">{{ $participant->name }}</a></td>
	                		<td>{{ $participant->university }}</td>
	                		<td>{{ $participant->faculty }}</td>
	                		<td>{{ $participant->department }}</td>
	                		<td>{{ $participant->academic_year }}</td>
	                		<td>{{ $participant->created_at->diffForHumans() }}</td>
	                	</tr>
	                @endforeach

	                </tbody>

	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Facebook</th>
	                  <th>University</th>
	                  <th>Faculty</th>
	                  <th>Department</th>
	                  <th>Academic Year</th>
	                  <th>Added From</th>
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
    $('#example1').parent('div').css('overflow-x', 'scroll');
  });
</script>

@endsection
