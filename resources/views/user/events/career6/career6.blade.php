@extends('user.layouts.layout')

@section('title')
{{ $event->title }}
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/user_style/css/flipclock.css') }}">
@endsection

@section('body')

<img src="{{ asset('/user_style/images/career6/cover V2.png') }}" alt="" style="width: 100%" class="img-fluid">

<div class="container pt-3 pb-3">
	@if (Carbon\Carbon::now() < $event->start_date)
		<div class="col-12 col-md-8 text-center ml-auto mr-auto">
			<a href="#" id="apply-now" class="btn btn-outline-danger btn-lg">Apply now <i class="fa fa-arrow-down"></i></a>
			<br>
			<br>
			<br>
			<br>
			<div class="clock"></div>
			<div class="message"></div>
		</div>
	@endif
	<h1 class="mb-3 text-center text-danger">Overview</h1>
	<h3 class="text-center">From 4<sup>th</sup> of Feb 2019 to 7<sup>th</sup> of Feb 2019</h3>
	<p class="text-center">Career launcher is our annual mega event where several workshops in all department of engineering and non-engineering are held in cooperation with professional companies which help students and fresh-graduates to be more qualified to job market.</p>
</div>

<hr>

{{-- <div class="container pt-3 pb-3 text-center">
	<h1 class="mb-3 text-center text-danger">Sponsors</h1>
	<img src="{{ asset('/user_style/images/career6/speakers.png') }}" class="img-fluid" alt="">
</div>

<hr> --}}

<div class="container pt-3 pb-3 text-center">
	<h1 class="mb-3 text-center text-danger">Sessions</h1>
	<p class="">It is several workshops in all department of engineering and non-engineering are held in cooperation with professional companies which help students and fresh-graduates to be more qualified to job market</p>
	{{-- <img src="{{ asset('/user_style/images/career6/session.png') }}" class="img-fluid" alt=""> --}}
</div>

<hr>

<div class="container pt-3 pb-3 text-center">
	<h1 class="mb-3 text-center text-danger">Fair</h1>
	<p class="">Career fair is a new addition to our mega event "Career launcher" in its 6th edition. So we would to make fair for helping more students and fresh graduates to find job opportunities, internships, courses and explore if there are competitions to join in different field which are held in cooperation with professional companies.</p>
	{{-- <img src="{{ asset('/user_style/images/career6/fair.png') }}" class="img-fluid" alt=""> --}}
</div>

<div class="container">
	<h1 class="mb-3 text-center text-danger">Event Schedule</h1>
	<div class="row">
		<div class="col-md-6 mb-5">
			<ul class="list-group" style="box-shadow: 0 0 10px #ddd;">
			  <li class="list-group-item shadow rounded bg-danger text-center text-white" style="box-shadow: 0 0 4px #eee">
			    <h2>Mon 4/2</h2>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Self Driving cars - Valeo
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/valeo.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Solidworks - El Marakby
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/MKS.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    SAP - El Marakby
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/MKS.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Juniors Robotics - K Vector Foundation
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/k.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Juniors Soft Skills - K Vector Foundation
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/k.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Juniors Automotive - K Vector Foundation
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/k.png') }}" class="img-fluid" alt=""></span>
			  </li>
			</ul>
		</div>
		<div class="col-md-6 mb-5">
			<ul class="list-group" style="box-shadow: 0 0 10px #ddd;">
			  <li class="list-group-item shadow rounded bg-danger text-center text-white" style="box-shadow: 0 0 4px #eee">
			    <h2>Tue 5/2</h2>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    How to Brand Yourself Online - Bayt.com
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/bayt.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Cyber Security - CyberTalents
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/cyber.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Introduction to 5G - Mohamed abdel moneim
			    <span class="badge-pill"></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Fair <b>from 1 PM to 4 PM</b>
			    <span class="badge-pill"></span>
			  </li>
			</ul>
		</div>
		<div class="col-md-6 mb-5">
			<ul class="list-group" style="box-shadow: 0 0 10px #ddd;">
			  <li class="list-group-item shadow rounded bg-danger text-center text-white" style="box-shadow: 0 0 4px #eee">
			    <h2>Wed 6/2</h2>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Kotlin and Flutter - Google Developers Group
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/gdg.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    KNX - ABB
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/abb.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Virtual Reality and game development - Rumbling game studio
			    <span class="badge-pill"><img style="max-width: 70px; background: #000; border-radius: 100%;" src="{{ asset('/user_style/images/career6/logos/rumbling.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Fair <b>from 1 PM to 4 PM</b>
			    <span class="badge-pill"></span>
			  </li>
			</ul>
		</div>
		<div class="col-md-6 mb-5">
			<ul class="list-group" style="box-shadow: 0 0 10px #ddd;">
			  <li class="list-group-item shadow rounded bg-danger text-center text-white" style="box-shadow: 0 0 4px #eee">
			    <h2>Thu 7/2</h2>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Intro to construction management - El Sewedy Electric
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/elswedy.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    7 Ways to Pass a Job Interview and CV Writing Skills - El Sewedy Electric
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/elswedy.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    General overview on HV Substations - El Sewedy Electric
			    <span class="badge-pill"><img style="max-width: 70px;" src="{{ asset('/user_style/images/career6/logos/elswedy.png') }}" class="img-fluid" alt=""></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Embedded systems - Mohamed Tarek from Mentor Graphics
			    <span class="badge-pill"></span>
			  </li>
			  <li class="list-group-item d-flex justify-content-between align-items-center">
			    Biomedical Engineering Career Planning - Eng Ahmed El Seddawy
			    <span class="badge-pill"></span>
			  </li>
			</ul>
		</div>
	</div>
</div>

<hr>

<div class="container pt-3 pb-3 text-center" id="apply-now-section">
	<h1 class="mb-3 text-center text-danger">Apply for</h1>
	<div class="row">
		<a href="{{ route('events.career6.form', 'juniors') }}" class="text-white">
			<div class="card text-white bg-primary col-md-4">
				  	<div class="card-body row">
				  		<div class="col align-self-center">
				    	<h4 class="card-title">Juniors</h4>
				    	<p class="card-text">These sessions related to students in schools (<b>preparatory and secondary</b>).</p>
				    	<a href="{{ route('events.career6.form', 'juniors') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
				    </div>
			  	</div>
			</div>
		</a>
		<a href="{{ route('events.career6.form', 'civil') }}" class="text-white">
			<div class="card text-white bg-secondary col-md-4">
	  				<div class="card-body row">
	  					<div class="col align-self-center">
	    				<h4 class="card-title">Civil and Architecture Engineering</h4>
	    				<p class="card-text">These sessions related to civil and architecture engineering departement</p>
	    				<a href="{{ route('events.career6.form', 'civil') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
	    			</div>
  				</div>
			</div>
		</a>
		<a href="{{ route('events.career6.form', 'general') }}" class="text-white">
			<div class="card text-white bg-success col-md-4">
		  			<div class="card-body row">
		  				<div class="col align-self-center">
		    			<h4 class="card-title">General</h4>
		    			<p class="card-text">These sessions are non-engineering and <b>not</b> related to any specific deprtement (<b>any one from any faculty can attend it</b>).</p>
		    			<a href="{{ route('events.career6.form', 'general') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
		    		</div>
	  			</div>
			</div>
		</a>
		<a href="{{ route('events.career6.form', 'mech') }}" class="text-white">
			<div class="card text-white bg-danger col-md-4">
				  	<div class="card-body row">
				  		<div class="col align-self-center">
				    	<h4 class="card-title">Mechanical Engineering</h4>
				    	<p class="card-text">These sessions related to mechanical and aerospace engineering departement.</p>
				    	<a href="{{ route('events.career6.form', 'mech') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
				    </div>
			  	</div>
			</div>
		</a>
		<div class="col-md-4">
  			<img src="{{ asset('/user_style/images/career6/website.png') }}" alt="" style="max-height: 200px" class="img-fluid mb-3 mt-3">
		</div>
		<a href="{{ route('events.career6.form', 'elec') }}" class="text-white">
			<div class="card text-white bg-info col-md-4">
	  			<div class="card-body row">
	  				<div class="col align-self-center">
		    			<h4 class="card-title">Electrical Engineering</h4>
		    			<p class="card-text">These sessions related to electrical engineering departement.</p>
		    			<a href="{{ route('events.career6.form', 'elec') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
	    			</div>
	  			</div>
			</div>
		</a>
		<a href="{{ route('events.career6.form', 'bio') }}" class="text-dark">
			<div class="card bg-light col-md-4">
	  			<div class="card-body row">
	  				<div class="col align-self-center">
		    			<h4 class="card-title">Biomedical Engineering</h4>
		    			<p class="card-text">These sessions related to biomedical engineering departement.</p>
		    			<a href="{{ route('events.career6.form', 'bio') }}" class="text-dark">Apply now <i class="fa fa-arrow-right"></i></a>
	    			</div>
	  			</div>
			</div>
		</a>
		<a href="{{ route('events.career6.form', 'com') }}" class="text-white">
			<div class="card text-white bg-dark col-md-4">
	  			<div class="card-body row">
	  				<div class="col align-self-center">
		    			<h4 class="card-title">Communication and Computer Engineering</h4>
		    			<p class="card-text">These sessions related to communication and computer engineering departement.</p>
		    			<a href="{{ route('events.career6.form', 'com') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
	    			</div>
	  			</div>
			</div>
		</a>
		<a href="{{ route('events.career6.form', 'fair') }}" class="text-white">
			<div class="card text-white bg-warning col-md-4">
	  			<div class="card-body row">
	  				<div class="col align-self-center">
		    			<h4 class="card-title">Fair</h4>
		    			<p class="card-text">Career fair is a new addition to our mega event "<b>Career launcher</b>" in its 6th edition. So we would to make fair for helping more students and fresh graduates to find job opportunities and internships.</p>
		    			<a href="{{ route('events.career6.form', 'fair') }}" class="text-white">Apply now <i class="fa fa-arrow-right"></i></a>
	    			</div>
	  			</div>
			</div>
		</a>
	</div>
</div>

<hr>

<div class="container pt-3 pb-4 text-center">
	<h1 class="mb-3 text-center text-danger">Place</h1>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.725436569854!2d30.9874642146089!3d30.044733881882244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14585a27c5ae43bb%3A0x664482a9c551e86b!2sCIC+-+Canadian+International+College!5e0!3m2!1sen!2seg!4v1547909368108" allowfullscreen></iframe>
	</div>
</div>

@endsection

@section('footer')
	<script src="{{ asset('/user_style/js/flipclock.min.js') }}"></script>
	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {
			$('#apply-now').on("click", function(event) {
			    // Preventing default action of the event
			    event.preventDefault();
			    // Getting the height of the document
			    var n = $(document).height();
			    $('html, body').animate({ scrollTop: $("#apply-now-section").offset().top - $("nav.navbar").height() }, 500);
			});
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