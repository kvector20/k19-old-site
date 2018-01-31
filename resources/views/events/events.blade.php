@extends('layouts.layout')

@section('title')
	Our Events
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/events/events.css') }}">
@endsection

@section('body')

	<header>
	    <div class="container">
	        <h1>Events</h1>
	        <hr>
	    </div>
	</header>

	<section>
	    <div class="container timeline">
	        <div class="event">
	            <div class="event-head">
	                <div class="circle"><span class="number">1</span></div>
	                <p class="time">21/10/2017 00:10:00 PM</p>
	            </div>
	            <div class="jumbotron event-content">
	                <h2>Event header</h2>
	                <hr>
	                <p>event description</p>
	            </div>
	        </div>
	        <div class="event">
	            <div class="event-head">
	                <div class="circle"><span class="number">2</span></div>
	                <p class="time">21/10/2017 00:10:00 PM</p>
	            </div>
	            <div class="jumbotron event-content">
	                <h2>Event header</h2>
	                <hr>
	                <p>event description</p>
	            </div>
	        </div>
	        <div class="event">
	            <div class="event-head">
	                <div class="circle"><span class="number">3</span></div>
	                <p class="time">21/10/2017 00:10:00 PM</p>
	            </div>
	            <div class="jumbotron event-content">
	                <h2>Event header</h2>
	                <hr>
	                <p>event description</p>
	            </div>
	        </div>
	        <div class="event">
	            <div class="event-head">
	                <div class="circle"><span class="number">4</span></div>
	                <p class="time">21/10/2017 00:10:00 PM</p>
	            </div>
	            <div class="jumbotron event-content">
	                <h2>Event header</h2>
	                <hr>
	                <p>event description</p>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- type your code here -->
@endsection

@section('footer')
	<script src="{{ asset('/js/events/events.js') }}"></script>
@endsection