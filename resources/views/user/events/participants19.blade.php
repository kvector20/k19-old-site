@extends('user.layouts.layout')

@section('title')
K'19 Participants Recruitment
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
				<h1 style="font-family: 'Courgette', cursive;">K'19 Participants Recruitment Starts in</h1>
				<br>
				<div class="clock"></div>
				<div class="message"></div>
			</div>
		@elseif (Carbon\Carbon::now() > $event->end_date)
			<div class="col-12 col-md-8 text-center ml-auto mr-auto">
				<h1 style="font-family: 'Courgette', cursive;">K'19 Participants Recruitment has been ended</h1>
			</div>
		@else

		<div class="col-12 col-md-8 ml-auto mr-auto border">
			<h1 class="text-center" style="font-family: 'Courgette', cursive;">K'19 Participants Recruitment</h1>
			@foreach ($errors->all() as $error)
				<div class="card bg-danger p-3 text-white">{{ $error }}</div>
			@endforeach
			<form action="{{ route('events.participants19') }}" method="POST" class="mb-5">
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
				<div class="form-group">
					<label for="">First Preference</label>
					<select name="first" required class="form-control" id="">
						<option value="">Choose your first preference workshop</option>
						<optgroup label="Academic">
							@foreach ($academic as $workshop)
								<option
								@if ($workshop->id == old('first'))
									selected
								@endif
								value="{{ $workshop->id }}">{{ $workshop->name }}</option>
							@endforeach
						</optgroup>
						<optgroup label="Automotive">
							@foreach ($automotive as $workshop)
								<option
								@if ($workshop->id == old('first'))
									selected
								@endif
								value="{{ $workshop->id }}">{{ $workshop->name }}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<label for="">Why did you choose that? (objective)</label>
					<textarea name="why_first" id="" required placeholder="Why did you choose that? (objective)" class="form-control">{{ old('why_first') }}</textarea>
				</div>
				<div class="form-group">
					<label for="">Second Preference</label>
					<select name="second" required class="form-control" id="">
						<option value="">Choose your second preference workshop</option>
						<optgroup label="Academic">
							@foreach ($academic as $workshop)
								<option
								@if ($workshop->id == old('second'))
									selected
								@endif
								value="{{ $workshop->id }}">{{ $workshop->name }}</option>
							@endforeach
						</optgroup>
						<optgroup label="Automotive">
							@foreach ($automotive as $workshop)
								<option
								@if ($workshop->id == old('second'))
									selected
								@endif
								value="{{ $workshop->id }}">{{ $workshop->name }}</option>
							@endforeach
						</optgroup>
					</select>
				</div>

				@php
					$days = array(
						'THU 18/10',
						'FRI 19/10',
						'SAT 20/10',
						'SUN 21/10',
						'MON 22/10',
						'TUE 23/10',
						'WED 24/10',
						'THU 25/10',
					);
					$hours = array(
						'3:00 PM',
						'3:30 PM',
						'4:00 PM',
						'4:30 PM',
						'5:00 PM',
						'5:30 PM',
						'6:00 PM',
						'6:30 PM',
					);
				@endphp

				<div class="form-group">
					<label for="">IQ Test</label>
					<div class="row">
						<div class="col-md-6 mt-3">
							<select name="iq_test_day" required class="form-control" id="">
								<option value="">Choose your IQ Test Day</option>
								@foreach ($days as $day)
									<option
									@if ($day == old('iq_test_day'))
										selected
									@endif
									value="{{ $day }}">{{ $day }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 mt-3">
							<select name="iq_test_hour" required class="form-control" id="">
								<option value="">Choose your IQ Test Hour</option>
								@foreach ($hours as $hour)
									<option
									@if ($hour == old('iq_test_hour'))
										selected
									@endif
									value="{{ $hour }}">{{ $hour }}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>

				<div class="blockquote-footer">
			        <small>
			          	Note That IQ test is half an hour in max.
			        </small>
			    </div>
			    <div class="blockquote-footer">
			        <small>
			          	The location of the IQ Test is سنتر ديوان في الدقي خلف شاورما الريم.
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
			          	To get more information about workshops <a href="{{ route('about.workshops') }}">Click Here</a>.
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