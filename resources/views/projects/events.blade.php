@extends('layouts.layout')

@section('title')
	Events Project
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/projects/projects.css') }}">
@endsection

@section('body')

    <!-- type your code here -->
    <section class="projects-about">
        <div class="overlay">
            <h1>About The Events</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Opening Event</li>
                            This Event is for starting K’18 workshops, welcoming and motivating our Participants.
                            <li class="basic-item">Career launcher 5th edition</li>
                            We will do seminars that support our vision .We will deal with professional companies in every branch to give the applicants this seminars.
                        </ul>
                    </div>
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Juniors Day</li>
                            Event for showing the output of our Juniors' workshops.
                        </ul>
                    </div>
                    <div class="col-lg-4 box">
                        <ul class="list-unstyled">
                            <li class="basic-item">Career day</li>
                            Event for showing the output of our Academic’s workshops.
                            <li class="basic-item">Closing</li>
                            We will honor our members and participants and celebrating K vector 7th year anniversary.
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
                        <img class="card-img-top myImg" src="../images/projects/career launcher/1.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">K’15 family in career launcher 2<sup>nd</sup> edition </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/2.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">K’14 Family in Career launcher 1<sup>st</sup> edition </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/3.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">Some of K’17 family in career launcher 4<sup>th</sup> edition </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/4.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/5.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/6.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/7.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/8.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/career launcher/9.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">people of K’16 in career launcher 3<sup>rd</sup> edition .</p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/inside out/1.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">part of our attendees </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/inside out/2.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">Dr Nabil Farouk telling his careershifting story during his speech in “ InsideOut” event </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/inside out/3.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">One of our attendees during his conversation with one of our Speakers </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/inside out/4.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">K’17 family in “ inside out “</p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/innova/1.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">Our great attendees in one of our great events </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/innova/2.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">Our great attendees in one of our great events </p>
                        </div>
                    </div>

                    <div class="card" style="width: 100%;">
                        <img class="card-img-top myImg" src="../images/projects/innova/3.jpg" alt="This Is Caption">
                        <div class="card-body">
                            <p class="card-text">K’15 Family celebration photo after the success of  “ innova” </p>
                        </div>
                    </div>

            </div>


        </div>
    </section>

@endsection

@section('footer')
	<script src="{{ asset('/js/projects/projects.js') }}"></script>
@endsection