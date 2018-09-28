@extends('user.layouts.layout')

@section('title')
K'19 Workshops
@endsection

@section('head')

@endsection

@section('body')
<div class="container pt-5 pb-5">
	<h1 class="text-center" style="font-family: 'Courgette', cursive;"><span class="text-danger">K</span>'19 Workshops</h1>
	<div id="accordion">
		@foreach ($workshops as $workshop)
		  <div class="card">
		    <div class="card-header bg-dark" id="heading{{ $workshop->name }}">
			     <span class="mb-0">
		        	<div class="" data-toggle="collapse" data-target="#collapse{{ $workshop->name }}" aria-expanded="true" aria-controls="collapse{{ $workshop->name }}">
			          	<img src="{{ App\Helpers\Helpers::storage($workshop->image) }}" style="max-width: 40px;" alt="{{ $workshop->name }}">
			          	<span style="color: {{ $workshop->color or '#f00' }}; -webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #fff; font-size: 25px; font-weight: bolder;">  {{ $workshop->name }}</span>
			          	<span class="badge badge-primary float-right mt-3">{{ ucfirst($workshop->type) }}</span>
		        	</div>
			    </span>
		    </div>

		    <div id="collapse{{ $workshop->name }}" class="collapse 
				@if (!$loop->index)
					show
				@endif
				" aria-labelledby="heading{{ $workshop->name }}" data-parent="#accordion">
		      <div class="card-body">
		        {!! $workshop->description !!}
		      </div>
		    </div>
		  </div>
		@endforeach
	</div>
</div>
@endsection

@section('footer')

@endsection