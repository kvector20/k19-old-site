@extends('layouts.layout')

@section("title")
    K vector Foundation
@endsection

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}" />

@endsection

@section('body')

    <!--Introo-->

    <header class="intro" id="home-section">
        <div class="overlay">
            <div class="container" id="Intro">
                <div class="wow bounce">
                    <h1 class="head"><span class="header">S</span>trike The Glory</h1>
                    <p>K-vector is a student activity at Cairo university , Faculty of Engineering.</p>
                    <p>We have a certain vision to build a generation that can build first car’s factory in Egypt which manufacture cars from A to Z , Make a change in R&D of artificial intelligence development & Build the first skyscraper in Egypt.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- start about sec -->
    <div class="about" id="about-section">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-white bg-info mb-3 the-card wow fadeInDown">
                            <div class="card-header card-title">
                                <h3 class="text-center">VISION</h3>
                            </div>
                            <div class="card-body">
                                <br>
                                <p class="card-text">Build generation that can build first cars’ factory in Egypt which manufactures cars from A to Z.<br> Make a change in R&D of artificial limbs and all medical devices.<br> Build the first skyscraper in Egypt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-white bg-info mb-3 the-card wow fadeInDown" data-wow-duration="2s">
                            <div class="card-header">
                                <h3 class="card-title text-center">MISSION</h3>
                            </div>
                            <div class="card-body">
                                <br>
                                <p class="card-text">Build a generation that makes industrial revolution through providing the coming generation with technicalities and skills needed.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a class="btn btn-outline-danger btn-lg about-btn" href="{{ url('/about') }}" role="button">MORE ABOUT US</a>
            </div>
        </div>
    </div>
    <!-- end about sec -->
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- start magazine sec -->
    <div class="magazine" id="magazine-section">
        <div class="overlay">
            <div class="container text-center wow fadeInDown">
                <br>
                <br>
                <h1 class="text-center magazine-h">MAGAZINE</h1>
                <div style="width:70%; margin:30px auto;">
                    <p style="color:#ccc; font-size:20px;">A project for K’18 with a specific vision, mission and objectives.</p>
                    <p style="color: #ccc; font-size:20px;">Our Vision is Enhancing the perspective of remote learning for technical and non-technical tracks throughout written output.</p>
                </div>
                <a href="dec_magazine/dec_maga.php" role="button" class="btn btn-outline-danger btn-lg magazine-btn">READ OUR MAGAZINE</a>
            </div>
        </div>
    </div>

    <!-- end magazine sec -->


    <!--Start Of Projects Section-->

    <div class="projects-photo" id="projects-section">
        <div class="overlay">
            <div class="container">
                <div>
                    <div class="head-cont">
                        <h1><span>K</span>'18 Main projects</h1>
                    </div>
                    <p>In order to spread our vision and develop it, we aim to reach all the students with all their different interests through our different projects.our events, academic, juniors and the magazine.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--End Of Projects Photo Section-->

    <!--Start Of Projects Icons Section-->


    <div class="projects-icons">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="item-box">
                        <img src="images/one.jpg" />
                        <button class="btn btn-outline-dark btn-lg btn-block"><h3><a href="{{ url('/projects/juniors') }}">Juniors</a></h3></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="item-box">
                        <img src="images/two.jpg" />
                        <button class="btn btn-outline-dark btn-lg btn-block"><h3><a href="{{ url('/projects/magazine') }}">Magazine</a></h3></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="item-box">
                        <img src="images/three.jpg" />
                        <button class="btn btn-outline-dark btn-lg btn-block"><h3><a href="{{ url('/projects/academic') }}">Academic</a></h3></button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="item-box">
                        <img src="images/four.jpg" />
                        <button class="btn btn-outline-dark btn-lg btn-block "><h3><a href="{{ url('/projects/events') }}">Events</a></h3></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container-->
    </div>

    <!--End Of Projects Icons Section-->
    <!-- start of EVENTS section -->

    <section class="events-section" id="events-section">
        <div class="container">
            <h1><span class="k">K</span> Upcoming Events... </h1>
            <p>k vector foundation is honored to organize events that provide our events' attendees with the latest updates in all fields that help our vision to create a pioneering generation.</p>
            <button class="btn btn-outline-danger btn-lg"><a href="{{ url('events') }}" style="color: inherit; text-decoration: none;">See Our Events</a></button>
        </div>
    </section>

    <!-- start of EVENTS section -->




    <section class="contact-us" id="contact-section">
        <div class="overlay">
            <div class="container">
                <div class="header">
                    <i class="fa fa-4x fa-phone"></i>
                    <h2>Tell Us What You Feel</h2>
                    <p>Feel Free To Contact Us Any Time</p>
                </div>
                <form class="input-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="row form-group">
                        <div class="col-md-6">

                            <input type="text" class="form-control" maxlength="64" id="inputUserName" title="At least 3 letters, no special characters" pattern=".{3,}[a-zA-Z]" placeholder="name"  name="name"/>

                            <input type="email" class="form-control" maxlength="254" id="inputEmail" title="Valid email address" placeholder="email@example.com" name="email"/>

                            <input type="tel" class="form-control" maxlength="15" id="inputTelephone" title="Telephone number can contain only digits from 0-9" pattern=".{8,}[0-9]" placeholder="Telephone" name="telephone"/>

                        </div>
                        <div class="col-md-6">
                            <textarea id="message" class="form-control" placeholder="Your Message" pattern=".{20,}" name="massege"></textarea>

                            <button type="submit" class="btn btn-defualt">Contact Us</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection


@section('footer')
    <script src="{{ asset('/js/home.js') }}"></script>
@endsection