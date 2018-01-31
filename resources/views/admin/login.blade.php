@extends('layouts.layout')
@section('title')
    Admin Login
@endsection

@section('head')

@endsection

@section('body')

	<div class="container">
		<div class="row align-items-center full">
			<div class="col-md-5 ml-auto mr-auto">
				@if (session('status'))
					<div class="card text-white bg-info mb-3">
				  		<div class="card-header">{{ session('status') }}</div>
					</div>
			  	@endif
			  	@if ($errors->has('status'))
					<div class="card text-white bg-danger mb-3">
				  		<div class="card-header">{{ $errors->first('status') }}</div>
					</div>
			  	@endif
				<h2 class="text-center">Admins Login</h2>
				<form method="POST" action="{{ route('admin.login') }}">
					{{ csrf_field() }}
					<div class="md-form{{ $errors->has('email') ? ' has-error' : '' }}">
					    <label for="form9">Email</label>
					    <input type="email" required id="form9" class="form-control validate" name="email" value="{{ old('email') }}" placeholder="Email">
					    @if ($errors->has('email'))
							<small class="text-danger">{{ $errors->first('email') }}</small>
						@endif
					</div>

					<div class="md-form{{ $errors->has('password') ? ' has-error' : '' }}">
					    <label for="form10" data-error="
					    " data-success="right">Password</label>
					    <input type="password" required id="form10" class="form-control validate" name="password" placeholder="Password">
						@if ($errors->has('password'))
							<small class="text-danger">{{ $errors->first('password') }}</small>
						@endif
					</div>
					
                    <div class="form-check">
					    <label class="form-check-label">
					      <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
					      Remember Me
					    </label>
					  </div>

					<a href="{{ route('admin.password.request') }}">Forget your password</a>

					<div class="text-center">
						<button type="submit" class="btn btn-danger">
							<i class="fa fa-sign-in" aria-hidden="true"></i> 
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection

@section('footer')

	<script>
		$(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
		$(window).on("resize", function() {
		    $(".full").height($(window).height() - $("footer").height() - $('nav').height() - 29);
		});
	</script>

@endsection