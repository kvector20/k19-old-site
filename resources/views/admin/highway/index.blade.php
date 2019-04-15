@extends('admin.layouts.app')

@section('title')
Highway applicants
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
        Highway applicants
      </h1>
    </section>
	<section class="content">
	      <div class="row">
	        <div class="col-xs-12" style="overflow-x: scroll;">
    			<div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Highway applicants Table</h3>
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
	                  <th>National ID</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Facebook</th>
	                  <th>University</th>
	                  <th>Faculty</th>
	                  <th>Department</th>
	                  <th>Academic Year</th>
	                  <th>Session</th>
	                  <th>CV file</th>
	                  <th>Why?</th>
	                  <th>Added From</th>
	                </tr>
	                </thead>

	                <tbody>

	                @foreach ($applicants as $applicant)
	                	<tr>
	                		<td>{{ $loop->index + 1 }}</td>
	                		<td>{{ $applicant->name }}</td>
	                		<td>{{ $applicant->national_id }}</td>
	                		<td>{{ $applicant->email }}</td>
	                		<td>{{ $applicant->phone }}</td>
	                		<td><a target="_blank" href="{{ $applicant->facebook_link }}">{{ $applicant->name }}</a></td>
	                		<td>{{ $applicant->university }}</td>
	                		<td>{{ $applicant->faculty }}</td>
	                		<td>{{ $applicant->department }}</td>
	                		<td>{{ $applicant->academic_year }}</td>
	                		<td>{{ App\Models\CWorkshop::find($applicant->session)->name }}</td>
                            <td><a target="_blank" href="{{ App\Helpers\Helpers::storage($applicant->cv_file) }}">{{ $applicant->name }}</a></td>
                            <td>{{ $applicant->why }}</td>
	                		<td>{{ $applicant->created_at->diffForHumans() }}</td>
	                	</tr>
	                @endforeach

	                </tbody>

	                <tfoot>
	                <tr>
	                  <th>#</th>
	                  <th>Name</th>
	                  <th>National ID</th>
	                  <th>Email</th>
	                  <th>Phone</th>
	                  <th>Facebook</th>
	                  <th>University</th>
	                  <th>Faculty</th>
	                  <th>Department</th>
	                  <th>Academic Year</th>
	                  <th>Session</th>
	                  <th>CV file</th>
	                  <th>Why?</th>
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
