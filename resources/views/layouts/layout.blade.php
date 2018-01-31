<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('layouts.head')
</head>
<body>
	
	@include('layouts.loader')
	@include('layouts.sidenav')

	<div class="pusher dimmed">
		<div style="margin-top: 55px;">
		
			@include('layouts.navbar')

			@section('body')
				@show

			@include('layouts.footer')

		</div>
	</div>
</body>

</html>