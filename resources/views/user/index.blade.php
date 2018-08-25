@extends('user.layouts.layout')

@section('title')
 K Vector Foundation
@endsection

@section('head')

@endsection

@section('body')
	<section id="hero-area" style="background-image: url({{ asset('/user_style/images/intro2.jpg') }});">
		<div class="container">
	    	<div class="row">
	        	<div class="col-md-12 text-center">
	            	<div class="block wow fadeInUp" data-wow-delay=".3s">
	                	<!-- Slider -->
	                	<section class="cd-intro">
	                    	<h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
		                    	<span>Towards Infinity</span><br>
			                    <span class="cd-words-wrapper text-danger">
			                        <b class="is-visible">We</b>
			                        <b>Are</b>
			                        <b>Vectorians</b>
			                    </span>
	                    	</h1>
	                    </section> <!-- cd-intro -->
	                    <!-- /.slider -->
	                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" style="color: black">
	                        <p>K-vector is a student activity at Cairo university , Faculty of Engineering.</p>
                    		<p>We have a certain vision to build a generation that can build first car’s factory in Egypt which manufacture cars from A to Z , Make a change in R&D of artificial intelligence development & Build the first skyscraper in Egypt.</p>
	                    </h2>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
	<!--/#main-slider-->

	<!-- ==================================================
	About Section Start
	================================================== -->
	<section id="about">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-6 col-sm-6">
	                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
	                    <h2>
	                    Vision
	                    </h2>
	                    <p>
	                        Build generation that can build first cars’ factory in Egypt which manufactures cars from A to Z.<br> Make a change in R&D of artificial limbs and all medical devices.<br> Build the first skyscraper in Egypt.
	                    </p>
	                    <h2>Mission</h2>
	                    <p>
	                        Build a generation that makes industrial revolution through providing the coming generation with technicalities and skills needed.
	                    </p>
	                </div>
	                
	            </div>
	            <div class="col-md-6 col-sm-6">
	                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
	                    <img src="{{ asset('/user_style/images/about/about.jpg') }}" alt="">
	                </div>
	            </div>
	        </div>
	    </div>
	</section> <!-- /#about -->

	<!-- ==================================================
	Magazine Section Start
	================================================== -->
	<section id="about">
	    <div class="container">
	        <div class="row">
	        	<div class="col-md-6 col-sm-6">
	                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
	                    <img src="{{ asset('/user_style/images/magazine.png') }}" alt="">
	                </div>
	            </div>
	            <div class="col-md-6 col-sm-6">
	                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
	                    <h2>
	                    Magazine
	                    </h2>
	                    <p>
	                        A project for K’19 with a specific vision, mission and objectives.
	                    </p>
	                    <p>
	                    	Our Vision is Enhancing the perspective of remote learning for technical and non-technical tracks throughout written output.
	                    </p>
	                    <a href="" class="btn btn-outline-danger">Read Our Magazine</a>
	                </div>
	                
	            </div>
	        </div>
	    </div>
	</section> <!-- /#Magazine -->

	<section id="about">
	    <div class="container">
	        <div class="row">
	        	
	            <div class="col-md-6 col-sm-6 align-self-center">
	                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
	                    <h2>
	                    Events
	                    </h2>
	                    <p>
	                        k vector foundation is honored to organize events that provide our events' attendees with the latest updates in all fields that help our vision to create a pioneering generation.
	                    </p>
	                    <a href="" class="btn btn-outline-danger">See Our Events</a>
	                </div>
	                
	            </div>

	            <div class="col-md-6 col-sm-6">
	                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
	                    <img src="{{ asset('/user_style/images/upcoming-events2.png') }}" alt="">
	                </div>
	            </div>
	        </div>
	    </div>
	</section> <!-- /#Events -->

	<section id="feature">
	    <div class="container">
	        <div class="section-heading">
	            <h1 class="title wow fadeInDown" data-wow-delay=".3s">Main Projects</h1>
	            <p class="wow fadeInDown" data-wow-delay=".5s">
	                In order to spread our vision and develop it, <br>we aim to reach all the students with all their different interests through our different projects. <br>our events, academic, juniors and the magazine.
	            </p>
	        </div>
	        <div class="row">
	            <div class="col-md-6 col-lg-6 col-xs-12">
	                <div class="media wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
	                    <div class="media-left">
	                        <div class="icon bg-danger">
	                            <i class="fa fa-graduation-cap"></i>
	                        </div>
	                    </div>
	                    <div class="media-body">
	                        <h4 class="media-heading">Academic</h4>
	                        <p>
	                        	Academic project is for providing some technical workshops of university students.
	                        </p>
	                        <a href="#">Go for Academic Project &gt;</a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-6 col-xs-12">
	                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="600ms">
	                    <div class="media-left">
	                        <div class="icon bg-danger">
	                            <i class="fa fa-child"></i>
	                        </div>
	                    </div>
	                    <div class="media-body">
	                        <h4 class="media-heading">Juniors</h4>
	                        <p>
	                        	Juniors project for providing some technical workshops for juniors from age 14 to 17 years old.
	                        </p>
	                        <a href="#">Go for Juniors Project &gt;</a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-6 col-xs-12">
	                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="900ms">
	                    <div class="media-left">
	                        <div class="icon bg-danger">
	                            <i class="ion-ios-lightbulb-outline"></i>
	                        </div>
	                    </div>
	                    <div class="media-body">
	                        <h4 class="media-heading">Events</h4>
	                        <p>
	                        	Events project working on preparing every event that K Vector make every year.
	                        </p>
	                        <a href="#">Go for Events Project &gt;</a>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-6 col-xs-12">
	                <div class="media wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="1200ms">
	                    <div class="media-left">
	                        <div class="icon bg-danger">
	                            <i class="ion-ios-book-outline"></i>
	                        </div>
	                    </div>
	                    <div class="media-body">
	                        <h4 class="media-heading">Magazine</h4>
	                        <p>
	                        	Magazine project for writing in various topics which most people care about.
	                        </p>
	                        <a href="#">Go for Magazine Project &gt;</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section> <!-- /#feature -->

	<section id="call-to-action" class="bg-danger">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h2>
                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Tell Us What You Feel <br>
						Feel Free To Contact Us Any Time.</p>
                        <a href="#" class="btn btn-default btn-contact text-danger wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


@endsection

@section('footer')

@endsection