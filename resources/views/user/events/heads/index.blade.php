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

		<div class="col-12 col-md-8 ml-auto mr-auto">
			<h1 class="text-center" style="font-family: 'Courgette', cursive;"><span style="color:crimson">K'20</span> {{ $event->title }}</h1>
			@foreach ($errors->all() as $error)
				<div class="card bg-danger p-3 text-white">{{ $error }}</div>
			@endforeach

			@if (session('status'))
				<div class="card bg-success p-3 text-white">{{ session('status') }}</div>
			@endif
			<div class="accordion" id="accordionExample">
                @foreach ($headsDescription as $head)
                    <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-{{ $loop->index }}" aria-expanded="true" aria-controls="collapseOne">
                            <img src="{{ App\Helpers\Helpers::storage($head->image) }}" class="img-responsive" style="width: 50px; border-radius: 100%" alt="">&nbsp;&nbsp;&nbsp;&nbsp;{{ $head->name }}
                        </button>
                        </h2>
                    </div>
                
                    <div id="collapseOne-{{ $loop->index }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                        {!! $head->description !!}
                        </div>
                    </div>
                    </div>
                @endforeach
            </div>
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