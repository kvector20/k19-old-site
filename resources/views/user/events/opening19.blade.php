@extends('user.layouts.layout')

@section('title')
Opening 19
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/user_style/css/flipclock.css') }}">
@endsection

@section('body')
<div class="container pt-5">
	<div class="row align-items-center 
		@if (Carbon\Carbon::now() > $event->end_date)
		full
		@else
		pb-5
		@endif
		">
		@if (Carbon\Carbon::now() < $event->start_date)
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
				<h1 style="font-family: 'Courgette', cursive;">Opening <span style="color:red">19</span> Starts in</h1>
				<br>
				<div class="clock"></div>
				<div class="message"></div>
			</div>

		<div class="col-12 col-md-8 ml-auto mr-auto border">
			@foreach ($errors->all() as $error)
				<div class="card bg-danger p-3 text-white">{{ $error }}</div>
			@endforeach
			<form action="{{ route('events.opening19') }}" method="POST" class="mb-5">
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

			    <div class="blockquote-footer">
			        <small>
			          	The location of the event is <a href="https://goo.gl/maps/tdVwYvwywkP2">Alhosabir Theater Location is here</a>.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	The event starts at 3:30 PM</a>.
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
		@elseif (Carbon\Carbon::now() > $event->end_date)
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
				<h1 style="font-family: 'Courgette', cursive;">Opening 19 has been ended</h1>
			</div>
		@endif
	</div>
</div>
@endsection

@section('footer')
	<script src="{{ asset('/user_style/js/flipclock.min.js') }}"></script>
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			var clock;

			clock = $('.clock').FlipClock({
		        clockFace: 'DailyCounter',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.clock').hide()
		        	}
		        }
		    });

		    clock.setTime(Math.abs(new Date("{{ $event->start_date }}").getTime() - new Date().getTime()) / 1000);
		    clock.setCountdown(true);
		    clock.start();

		    $(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
			$(window).on("resize", function() {
			    $(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
			});

		});
	</script>
@endsection