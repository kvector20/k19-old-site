@extends('user.layouts.layout')

@section('title')
	Academic Project
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/projects/projects.css') }}">
@endsection

@section('body')
<!-- type your code here -->
    <section class="projects-about">
        <div class="overlay">
            <h1>About The Academic</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Robotics</li>
                            This year we will make basics level like the previous year but we will add advanced level (Embedded Systems) as a new workshop.
                            <li>
                                <ul>
                                    <li>Basic Level</li>
                                    <ul>
                                        <li>Basics Level will consist of basics of Electronics, Mechanics, Programming and Arduino.</li>
                                    </ul>
                                    <li>Advanced Level</li>
                                    <ul>
                                        <li>Advanced Level will consist of Embedded C programming, Basics of Mechanics and AVR.</li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="basic-item">Automotive</li>
                            This year we will make this workshop as 3 separate workshops to avoid last year problems.<br> Each workshop will be from 4 to 6 sessions.
                            <ul>
                                <li>Engine & Transmission Workshop.</li>
                                <li>Suspension & Steering & Breaks workshop.</li>
                                <li>Aero Dynamics Workshop.</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Android</li>
                            One of the new workshops and the output of this workshop will be K vector’s mobile application.
                            <li>
                                <ul>
                                    <li>Participants will learn java and Android Studio.</li>
                                </ul>
                            </li>
                            <li class="basic-item">Web Design</li>
                            This workshop is aim to prepare calibers for IT committee to work on K’s Website.
                            <li>
                                <ul>
                                    <li>Participants will learn CSS, HTML and JavaScript.</li>
                                </ul>
                            </li>
                            <li class="basic-item">Soft Skills</li>
                            The first workshop of non-technical part of k’18 academic project.
                            <li>
                                <ul>
                                    <li>The workshop consist of Presentations Skills, Communications Skills, Problem Solving and Time management.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Photoshop</li>
                            The second workshop of non-technical part of k’18 academic project.
                            <li>
                                <ul>
                                    <li>Participants will learn basics of graphic design concepts, basics of tool & commands, Typography, Retouching and Logo designing.</li>
                                </ul>
                            </li>
                            <li class="basic-item">Artifical limbs Seminars</li>
                            The first step on biomedical part of our vision.<br> During the year we will provide seminars in topics related to artificial limbs.
                            <li class="basic-item">Civil Engineer Seminars</li>
                            The aim of this Seminars is to work on skyscraper part of our vision and to put the first step in this track again.
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
                                <img class="card-img-top myImg img-one" src="../images/projects/career day/1.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Our super Robotics Moderators with their great participants and their challenging Projects ( the auto parking cars and the  Robotic Hands) in K’17 career day</p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-two" src="../images/projects/career day/2.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Ibraheem yousry one of our great Automotive participants during his final presentation .</p>
                                </div>
                            </div>
    
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-three" src="../images/projects/career day/3.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Our K’17 Robotics team </p>
                                </div>
                            </div>
    
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/career day/4.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">preparation before the final presentation </p>
                                </div>
                            </div>

                            
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/sessions/2.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Participants Registration at the first day of our K’17 sessions </p>
                                </div>
                            </div>

                            
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/sessions/3.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Our Robotics participants during one of the sessions</p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/sessions/4.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Our Automotive session </p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/sessions/5.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/sessions/6.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text"></p>
                                </div>
                            </div>

                            <div class="card" style="width: 100%;">
                                <img class="card-img-top myImg img-four" src="../images/projects/sessions/7.jpg" alt="This Is Caption">
                                <div class="card-body">
                                    <p class="card-text">Robotics family of K'17 </p>
                                </div>
                            </div>



                    </div>
    
    
                </div>
            </section>

@endsection

@section('footer')
	<script src="{{ asset('/js/projects/projects.js') }}"></script>
@endsection