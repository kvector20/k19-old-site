@extends('layouts.layout')

@section('title')
	Our Magazine
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/magazine/september_maga.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
@endsection

@section('body')

	<!-- start cover -->
    <div class="magazine-cover">
        <div class="magazine-overlay">
            <div class="container">
                <div class="wow bounce text-center the-head">
                    <h1 class="head"><span class="header">O</span>ur Magazine</h1>
                    <p>Enrich your knowledge and enjoy the beauty of words.</p>
                    <a href="../projects/Magazine.php" class="btn btn-outline-danger btn-lg" style="border-radius: 0;">About Our Magazine</a>
                </div>
                <div class="bottom-part">
                    <div class="magazine-arrow">

                        <span> <i class="fa fa-chevron-down" aria-hidden="true"></i> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cover -->
		<!--Section: Magazine v.3-->
		<div class="container text-center">
			<div class="magazine">
			<section class="section magazine-section multi-columns">
			    
			<!--Section heading-->
			<h2 class="section-heading h1 mt-5">Headlines</h2>

			<!--Grid row-->
			<div class="row text-left">

			<!--Grid column-->
			<div class="col-lg-4 mb-3 col-md-12 mb-r">

			    <!--Featured news-->
			    <div class="single-news">

			    <!--Image-->
			    <div class="view overlay hm-white-slight rounded z-depth-2 mb-3">
			        <img src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" class="img-fluid" alt="First sample image">
			        <a>
			        <div class="mask"></div>
			        </a>
			    </div>

			    <!--Badge-->
			    <div class="row mb-4 mt-0 pt-0">
			        <div class="col-12">
			        <a href="" class="orange-text mb-1">
			            <span class="badge pink">
			            <i class="fa fa-camera mr-1" aria-hidden="true"></i> Adventure</span>
			        </a>
			        </div>
			    </div>

			    <!--Title-->
			    <a>
			        <strong>This is title of the news</strong>
			        <i class="fa fa-angle-right"></i>
			    </a>

			    </div>
			    <!--/Featured news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>24 Food Swaps That Slash Calories.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>How to Make a Beet Cocktail?
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>8 Sneaky Reasons You're Always Hungry.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>5 Pressure Cooker Recipes You Need to Try.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-lg-4 mb-3 col-md-6 mb-r">

			    <!--Featured news-->
			    <div class="single-news">

			    <!--Image-->
			    <div class="view overlay hm-white-slight rounded z-depth-2 mb-3">
			        <img src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" class="img-fluid" alt="First sample image">
			        <a>
			        <div class="mask"></div>
			        </a>
			    </div>

			    <!--Badge-->
			    <div class="row mb-4 mt-0 pt-0">
			        <div class="col-12">
			        <a href="" class="orange-text mb-1">
			            <span class="badge deep-orange">
			            <i class="fa fa-plane mr-1" aria-hidden="true"></i> Travel</span>
			        </a>
			        </div>
			    </div>

			    <!--Title-->
			    <a>
			        <strong>This is title of the news</strong>
			        <i class="fa fa-angle-right"></i>
			    </a>

			    </div>
			    <!--/Featured news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>Trends in the blogosphere for 2016.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>Where you eat the best lunch in Warsaw?
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>What camera take for holidays?
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>Why you should visit Lisbon?
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-lg-4 mb-3 col-md-6 mb-r">

			    <!--Featured news-->
			    <div class="single-news">

			    <!--Image-->
			    <div class="view overlay hm-white-slight rounded z-depth-2 mb-3">
			        <img src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" class="img-fluid" alt="First sample image">
			        <a>
			        <div class="mask"></div>
			        </a>
			    </div>

			    <!--Badge-->
			    <div class="row mb-4 mt-0 pt-0">
			        <div class="col-12">
			        <a href="" class="orange-text mb-1">
			            <span class="badge success-color">
			            <i class="fa fa-leaf mr-1" aria-hidden="true"></i> Nature</span>
			        </a>
			        </div>
			    </div>

			    <!--Title-->
			    <a>
			        <strong>This is title of the news</strong>
			        <i class="fa fa-angle-right"></i>
			    </a>

			    </div>
			    <!--/Featured news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>Top models in Poland.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>London Fashion Week - see online.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>Best bags designers in Italy.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			    <!--Small news-->
			    <div class="single-news">
			    <a>Choose best swimsuit for summer.
			        <i class="fa fa-angle-right"></i>
			    </a>
			    </div>
			    <!--/Small news-->

			</div>
			<!--Grid column-->

			</div>
			<!--Grid row-->

		</section>
	</div>
	</div>
		<!--Section: Magazine v.3-->
            
@endsection

@section('footer')
	<script src="{{ asset('/js/magazine/magazine.js') }}"></script>
@endsection