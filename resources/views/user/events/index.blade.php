@extends('user.layouts.layout')

@section('title')
	Our Events
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/user_style/css/events/events.css') }}">
@endsection

@section('body')

	<div class="holder back">
      <div class="balloon"></div>
      <div class="balloon"></div>
      <div class="balloon"></div>
      <div class="balloon"></div>
      <div class="balloon"></div>
    </div>
    
        <header>
            <div class="container">
                <h1 class="text-center pt-5">Our Events</h1>
            </div>
        </header>
        <div class="container">
          <h2>K'18 Events</h2>
        </div>

        <section>
            <div class="container timeline">
                <div class="event">
                    <div class="event-head">
                        <div class="circle"><span class="number">1</span></div>
                        <p class="time">26:29 January 2018 10:00 AM</p>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Career Launcher 5</h5>
                        <p class="card-text">Celebrating the 5th year of " Career launcher" we decided that it should be greater, different and longer than any past version. We decided to provide you with the "beginning" in every field you may dreamed to work in. We provide you with the way you could be the dominant of your life and choose your own limits by your will.</p>
                        <a href="{{ url('events/career5') }}" class="btn btn-danger">Go to event <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="event">
                    <div class="event-head">
                        <div class="circle"><span class="number">2</span></div>
                        <p class="time">24th October 2017</p>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">The Opening</h5>
                        <p class="card-text">The event that we start the year with our great vectorians.</p>
                        <a href="{{ route('events.opening18') }}" class="btn btn-danger">Go to event <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="event">
                    <div class="event-head">
                        <div class="circle"><span class="number">3</span></div>
                        <p class="time">TUE 1st August 2017</p>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Welcome Party</h5>
                        <p class="card-text">The event we are celebrating with the our new amazing members who are this year vectorians.</p>
                        <a href="{{ route('events.welcome18') }}" class="btn btn-danger">Go to event <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- type your code here -->

        <div class="holder front">
  <div class="balloon"></div>
  <div class="balloon"></div>
  <div class="balloon"></div>
  <div class="balloon"></div>
  <div class="balloon"></div>
</div>

@endsection

@section('footer')
	<script src="{{ asset('/user_style/js/events/events.js') }}"></script>
@endsection