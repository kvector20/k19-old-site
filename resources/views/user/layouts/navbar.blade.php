<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
	  	<button class="btn btn-dark navbar-toggler open-side">
	  		<i class="fa fa-bars" aria-hidden="true"></i>
	  	</button>
	  	<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('/user_style/images/logo.png') }}" alt="K Vector" style="width: 40px;" class="img-fluid"> Vector</a>
	  	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto">
		      	<li class="nav-item">
		        	<a class="nav-link" href="{{ url('/about') }}">About Us</a>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="{{ route('events') }}">Events</a>
		      	</li>
		      	<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          		Projects
		        	</a>
		        	<div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
		          		<a class="dropdown-item" href="{{ route('projects.academic') }}">Academic</a>
		          		<a class="dropdown-item" href="{{ route('projects.juniors') }}">Juniors</a>
		          		<a class="dropdown-item" href="{{ route('projects.events') }}">Events</a>
		          		<a class="dropdown-item" href="{{ route('projects.magazine') }}">Magazine</a>
		        	</div>
		      	</li>
		      	<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          		Magazine
		        	</a>
		        	<div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink2">
		          		<a class="dropdown-item" href="{{ route('k19.magazine.month', Carbon\Carbon::now()->month) }}">K'19 Magazine</a>
		          		<a class="dropdown-item" href="#">K'18 Magazine</a>
		        	</div>
		      	</li>
		      	<li class="nav-item">
		        	<a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
		      	</li>
		    </ul>
	  	</div>
	</div>
</nav>