@extends('user.layouts.layout')

@section('title')
Magazine Project
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/projects/projects.css') }}">
@endsection

@section('body')

<!-- type your code here -->
<section class="projects-about">
    <div class="overlay">
        <h1>About The Magazine</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 box">
                    <ul class="list-unstyled">
                        <li class="basic-item">Vision</li>
                        Enhancing the perspective of remote learning for technical and non-technical tracks throughout written output.
                    </ul>
                </div>
                <div class="col-lg-4 box">
                    <ul class="list-unstyled">
                        <li class="basic-item">Mission</li>
                        Setting an intellectual individual aware of as much aspects a variables around him as possible and capable of being the core of change.
                    </ul>
                </div>
                <div class="col-lg-4 box">
                    <ul class="list-unstyled">
                        <li class="basic-item">Objectives</li>
                        <li>
                            <ul>
                                <li>Setting online magazine for keeping respectable articles in general knowledge generally and technical specially.</li>
                                <li>Providing a hard copy magazine with a special theme serving k vector’s vision.</li>
                            </ul>
                        </li>
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
                            <img class="card-img-top myImg img-one" src="../images/projects/Magazine/1.jpg" alt="This Is Caption">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>

                        <div class="card" style="width: 100%;">
                            <img class="card-img-top myImg img-two" src="../images/projects/Magazine/2.jpg" alt="This Is Caption">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>

                        <div class="card" style="width: 100%;">
                            <img class="card-img-top myImg img-three" src="../images/projects/Magazine/3.jpg" alt="This Is Caption">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>

                        <div class="card" style="width: 100%;">
                            <img class="card-img-top myImg img-four" src="../images/projects/Magazine/5.png" alt="This Is Caption">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>

                        <div class="card" style="width: 100%;">
                            <img class="card-img-top myImg img-four" src="../images/projects/Magazine/4.jpg" alt="This Is Caption">
                            <div class="card-body">
                                <p class="card-text"></p>
                            </div>
                        </div>

                </div>


            </div>
        </section>

@endsection

@section('footer')
	<script src="{{ asset('/js/projects/projects.js') }}"></script>
@endsection