<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('user.layouts.head')
</head>
<body>
	
	@include('user.layouts.loader')
	@include('user.layouts.sidenav')

	<div class="pusher dimmed">
		<div style="margin-top: 55px;">
		
			@include('user.layouts.navbar')

			@section('body')
				@show

			@include('user.layouts.footer')

		</div>
	</div>
</body>

</html>