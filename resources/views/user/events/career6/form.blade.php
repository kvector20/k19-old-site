@extends('user.layouts.layout')

@section('title')
Career Launcher 6th edition
@endsection

@section('head')
<style>
	@keyframes space {
	  	0% {
	  		background-position: 0px 0px;
	  	}
	  	15% {
	  		background-position: 500px 500px;
	  	}
	  	30% {
	  		background-position: 1000px 0px;
	  	}
	  	60% {
	  		background-position: 1000px 1000px;
	  	}
	  	75% {
	  		background-position: 500px 500px;
	  	}
	  	90% {
	  		background-position: 0px 1000px;
	  	}
	  	100% {
	  		background-position: 0px 0px;
	  	}
	}
	.bg {
		animation: space 100s infinite ease-in-out;
	}
</style>
@endsection

@section('body')
<div class="text-white bg" style="background-image: url({{ asset('user_style/images/career6/space.png') }}); background-size: cover; background-attachment: fixed;">
	<div style="background-color: rgba(3,3,3,.9);">
<div class="container pt-5">
	<div class="row align-items-center 
		@if ($sessions->isEmpty())
		full
		@else
		pb-5
		@endif
		">
		@if ($sessions->isEmpty())
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
				<h1 style="font-family: 'Courgette', cursive;">Comming Soon</h1>
			</div>
		@else
		@php
			$departments = [
				'juniors' => 'Juniors',
				'civil' => 'Civil and Architecture Engineering',
				'general' => 'General',
				'mech' => 'Mechanical Engineering',
				'elec' => 'Electrical Engineering',
				'bio' => 'Biomedical Engineering',
				'com' => 'Computer and Communication Engineering',
				'juniors' => 'Juniors',
			];
		@endphp
		<div class="col-12 col-md-8 ml-auto mr-auto mb-3 border" style="background-image: url({{ asset('/user_style/images/career6/rocket.png') }}); background-repeat: no-repeat; background-position: center center;">
			<h2 class="text-center mt-3">Career Launcher 6<sup>th</sup> Edition</h2>
			<h4 class="text-center">{{ $departments[$form] }} Form</h4>
			@foreach ($errors->all() as $error)
				<div class="card bg-danger p-3 text-white">{{ $error }}</div>
			@endforeach
			@if (session('status'))
				<div class="card bg-success p-3 text-white">{{ session('status') }}</div>
			@endif
			<form action="{{ route('events.career6') }}" method="POST" class="mb-5">
				@csrf
				<div class="form-group">
					<label for="">Full Name</label>
					<input type="text" name="name" placeholder="Full Name" required value="{{ old('name') }}" class="form-control">
					<small class="text-muted">Write your full name</small>
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" name="email" placeholder="Email" required value="{{ old('email') }}" class="form-control">
					<small class="text-muted">Write valid email</small>
				</div>
				<div class="form-group">
					<label for="">Mobile Number</label>
					<input type="tel" name="phone" placeholder="Mobile Number" required value="{{ old('phone') }}" class="form-control">
					<small class="text-muted">Write valid mobile number</small>
				</div>
				<div class="form-group">
					<label for="">National ID</label>
					<input type="text" name="national_id" placeholder="National ID" required value="{{ old('national_id') }}" class="form-control" minlength="14" maxlength="14">
					<small class="text-muted">Write your national ID like: 12345678912345 <b>it must be 14 numbers</b></small>
				</div>
				<div class="form-group">
					<label for="">Facebook Link</label>
					<input type="url" name="facebook_link" placeholder="Facebook Link" required value="{{ old('facebook_link') }}" class="form-control">
					<small class="text-muted">Write link like this <a href="#">https://www.facebook.com/your.name</a></small>
				</div>
				<div class="form-group">
					<label for="">University</label>
					<input type="text" name="university" placeholder="University" required value="{{ old('university') }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Faculty</label>
					<input type="text" name="faculty" placeholder="Faculty" required value="{{ old('faculty') }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Department</label>
					<input type="text" name="department" placeholder="Department" required value="{{ old('department') }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Academic Year</label>
					<input type="text" name="academic_year" placeholder="Academic Year" required value="{{ old('academic_year') }}" class="form-control">
					<small class="text-muted">Academic year like first, second, perpratory ...etc.</small>
				</div>

				<div class="form-group">
					<label for="">Session</label>
					<select name="session" required class="form-control" id="">
						<option value="">Choose Session</option>
						@foreach ($sessions as $session)
							<option
							@if ($session->id == old('session'))
								selected
							@endif
							value="{{ $session->id }}">{{ $session->name }} - {{ $session->company }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="">You will come with our bus?</label>
					<div class="custom-control custom-radio">
					  <input type="radio" class="custom-control-input" name="bus" @if (old('bus') == 1)
					  	checked 
					  @endif value="1" id="customCheck1">
					  <label class="custom-control-label" for="customCheck1">Yes</label>
					</div>
					<div class="custom-control custom-radio">
					  <input type="radio" class="custom-control-input" @if (old('bus') == 0)
					  	checked 
					  @endif name="bus" value="0" id="customCheck11">
					  <label class="custom-control-label" for="customCheck11">No</label>
					</div>
					<small class="text-muted">If you will come with our buses.</small>
				</div>

			    <div class="blockquote-footer">
			        <small>
			          	Note that bus fees is <b>20 LE</b>.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	The location of the event is <a href="https://goo.gl/maps/BTAEA88qH6v">CIC Zayed branch Location is here</a>.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	For any questions go for <a href="https://www.facebook.com/kvectorfoundation/">our page</a> and ask us.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	You can also contact us and leave your feedback <a href="{{ route('contact') }}">contact us</a>.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	Make sure that all your data is correct before submitting the form.
			        </small>
			    </div>
				<button class="btn btn-primary">Submit</button>
			</form>
		</div>
		@endif
	</div>
</div>
</div>
</div>
@endsection

@section('footer')
	<script>
		$(function(){
			$(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
			$(window).on("resize", function() {
			    $(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
			});
		})
	</script>
@endsection