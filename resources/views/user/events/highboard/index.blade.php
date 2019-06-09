@extends('user.layouts.layout')

@section('title')
K'20 {{ $event->title }}
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/user_style/css/flipclock.css') }}">
@endsection

@section('body')
<div class="container pt-5">
	<div class="row align-items-center 
		@if (Carbon\Carbon::now() < $event->start_date || Carbon\Carbon::now() > $event->end_date)
		full
		@else
		pb-5
		@endif
		">
		@if (Carbon\Carbon::now() < $event->start_date)
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
				<h1 style="font-family: 'Courgette', cursive;"><span style="color:crimson">K'20</span> {{ $event->title }} Starts in</h1>
				<br>
				<div class="clock"></div>
				<div class="message"></div>
			</div>
		@elseif (Carbon\Carbon::now() > $event->end_date)
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
				<h1 style="font-family: 'Courgette', cursive;"><span style="color:crimson">K'20</span> {{ $event->title }} has been ended</h1>
			</div>
		@else

		<div class="col-12 col-md-8 ml-auto mr-auto border">
			<h1 class="text-center" style="font-family: 'Courgette', cursive;"><span style="color:crimson">K'20</span> {{ $event->title }}</h1>
			@foreach ($errors->all() as $error)
				<div class="card bg-danger p-3 text-white">{{ $error }}</div>
			@endforeach

			@if (session('status'))
				<div class="card bg-success p-3 text-white">{{ session('status') }}</div>
			@endif
			<form action="{{ route('events.highboard20') }}" method="POST" class="mb-5">
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
				@php
					$positions = [
						"Academic PM",
						"Juniors PM",
						"Events PM",
						"Magazine PM",
						"Academic Vice",
						"Automotive Vice",
						"Marketing Vice",
						"OC Vice",
						"ER Vice",
						"IT Vice"
					];
				@endphp
				<div class="form-group">
					<label for="">Position</label>
					<select name="position" required class="form-control" id="">
						<option value="">Choose your position</option>
						@foreach ($positions as $position)
							<option
							@if ($position == old('position'))
								selected
							@endif
							value="{{ $position }}">{{ $position }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="">Previous experience</label>
					<textarea name="experience" placeholder="Previous experience" class="form-control">
						{{ old('experience') }}
					</textarea>
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