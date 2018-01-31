@extends('layouts.layout')

@section('title')
	Juniors Project
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/projects/projects.css') }}">
@endsection

@section('body')

    <!-- type your code here -->
    <section class="projects-about">
        <div class="overlay">
            <h1>About The Juniors</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Workshops</li>
                            <li>
                                <ul>
                                    <li>Robotics</li>
                                    Juniors will learn basics of Electronics, Mechanics, Programming and Arduino.
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Workshops</li>
                            <li>
                                <ul>
                                    <li>Soft Skills</li>
                                    Juniors will learn Time Management, Problem solving and Communication Skills.
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Event</li>
                            This event is maked to attract jouniors 
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--        Start Of Gallery Section-->

    <!-- The Modal -->
    <div class="modal">
    
                <!-- The Close Button -->
                <span class="close" onclick="document.getElementsByClassName('modal').style.display='none'">&times;</span>
    
                <!-- Modal Content (The Image) -->
                <img class="modal-content">
    
                <!-- Modal Caption (Image Text) -->
                <div class="caption"></div>
            </div>
    
            <section class="gallery-section">
                <h1>Gallery</h1>
                <div class="container">

                        <div class="card-columns">

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-one" src="../images/projects/juniors/1.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-two" src="../images/projects/juniors/2.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">It  starts with lightening a led , and always Ends up with great inventions in the future </p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-three" src="../images/projects/juniors/3.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/4.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/5.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/7.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Our juniors couldn’t be happier after being motivated and thrilled with the new experience that  K vector offered them </p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/9.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">our future heroes learning some hardware </p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/11.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/12.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/13.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/14.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/juniors/15.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">to learn , you have to try new things by yourself and that’s what our heroes did </p>
                                </div>
                            </div>

                    </div>
    
    
                </div>
            </section>


@endsection

@section('footer')
	<script src="{{ asset('/js/projects/projects.js') }}"></script>
@endsection