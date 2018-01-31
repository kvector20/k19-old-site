@extends('layouts.layout')

@section('title')
	About Us
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/about/about.css') }}">
@endsection

@section('body')

	<!-- type your code here -->

	<div class="container" id="Tabs">
	    <div class=" board">
	        <div class="board-inner">
	            <ul class="nav  " id="myTab">
	                <div class="row">
	                    <div class="col-XS-12">
	                        <li class="nav-item nav-tab">
	                            <a class="nav-link active" href="#des" data-toggle="tab"><span class="round btn btn-danger ">Description</span></a>
	                        </li>
	                    </div>
	                    <div class="col-XS-12">
	                        <li class="nav-item nav-tab">
	                            <a class="nav-link" href="#vision" data-toggle="tab"><span class="round btn btn-danger">Vision & Mission</span></a>
	                        </li>
	                    </div>
	                    <div class="col-XS-12">
	                        <li class="nav-item nav-tab">
	                            <a class="nav-link " href="#obj" data-toggle="tab"><span class="round btn btn-danger">Objectives</span></a>
	                        </li>
	                    </div>
	                </div>
	            </ul>
	        </div>
	        <hr>

	        <div class="tab-content ">

	            <div class="tab-pane fade show active " id="des">
	                <div class="content">
	                    <h3 class="head text-center">kvector Committees</h3>
	                    <div class="row" id="committees">

	                    </div>
	                </div>
	            </div>

	            <div class="tab-pane fade " id="vision">

	                <div class=" row">
	                    <div class="col-md-5 content">
	                        <div id="first">
	                            <h3 class="head text-center">VISION</h3>
	                            <p class="text-center">
	                                Build strong generation that can build : <br>First cars’ factory in Egypt which manufactures cars from A to Z.
	                                <br>Make a change in R&D of artificial limbs and all medical devices.
	                                <br>Build the first skyscraper in Egypt.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="col-md-5 content">
	                        <div id="second">
	                            <h3 class="head text-center">MISSION </h3>
	                            <p class="text-center">Build a generation that makes industrial revolution through providing the coming generation with technicalities and skills needed.
	                            </p>
	                        </div>
	                    </div>

	                </div>
	            </div>
	            <div class="tab-pane fade " id="obj">
	                <div class="content">
	                    <h3 class="head text-center">OBJECTIVES</h3>
	                    <p class="text-center">
	                        <ul class="obj">
	                            <li> Deliver k vector's vision to members and make each one of them feel belonging to k-vector.</li>
	                            <li> Focus on team spirit.</li>
	                            <li> Grow inside members the concept of volunteering, self-confidence and their role in developing themselves and their community.</li>
	                            <li> Focus on Trainings for members.</li>
	                            <li> Focus on evaluating vices, heads, and members.</li>
	                            <li> Focus on communication between the high board, the board and the members.</li>
	                            <li> Focus on the Marketing for K.</li>
	                            <li> Working on First Hackathon for K-vector.</li>
	                            <li> Adding new workshops and focus on its output.</li>
	                            <li> Re-Correct the way of Automotive Workshop by making each part of it as an individual workshop.</li>
	                            <li> Adding advanced workshop of Robotics.</li>
	                            <li> Working on making a special edition of Career Launcher.</li>
	                            <li> Realistic outputs towards the vision.</li>
	                            <li> Working on the 4th edition of the magazine</li>
	                        </ul>
	                    </p>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
	<script src="{{ asset('/js/about/about.js') }}"></script>

@endsection