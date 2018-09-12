@extends('user.layouts.layout')

@section('title')
K'18 Opening
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/user_style/css/events/opening.css') }}">
<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
@endsection

@section('body')
<header class="open">
    <div class="overlay" >
        <h1 style=" text-align:center; ">OPENING <span>K</span>'18</h1>
        <div class="text-center loc">
        <i class="fa fa-map-marker fa-2x " style="color:red" aria-hidden="true"></i>
        <span>مسرح النهار </span>
        <p>24th October 2017 </p>
        </div>
    </div>
</header>

<div class="opening">
    <div class="overlay">
<div class="container ">


        <div class="time-plan" >
            <div class="text-center time"><h3 style="color:white; padding:50px;">Schedule</h3></div>
            <ul class="nav  nav-tabs"  id="myTab">
                <div class="row m-auto">
                    <div >
                        <li class="nav-item ">
                            <a class="nav-link active" href="#one" data-toggle="tab"><span style="color:red"> @ 3:00pm</span></a>
                        </li>
                    </div>
                    <div >
                        <li class="nav-item ">
                            <a class="nav-link" href="#two" data-toggle="tab"><span style="color:red"> @ 3:30pm</span></a>
                        </li>
                    </div>
                    <div >
                        <li class="nav-item ">
                            <a class="nav-link " href="#three" data-toggle="tab"><span style="color:red">@ 4:30pm</span></a>
                        </li>
                    </div>
                    <div >
                        <li class="nav-item ">
                            <a class="nav-link " href="#four" data-toggle="tab"><span style="color:red">@ 5:00pm</span></a>
                        </li>
                    </div>
                    <div >
                        <li class="nav-item ">
                            <a class="nav-link " href="#five" data-toggle="tab"><span style="color:red">@ 6:00pm</span></a>
                        </li>
                    </div>
                    <div >
                        <li class="nav-item ">
                            <a class="nav-link " href="#six" data-toggle="tab"><span style="color:red">@ 7:00pm</span></a>
                        </li>
                    </div>


                    <div >
                        <li class="nav-item ">
                            <a class="nav-link " href="#seven" data-toggle="tab"><span style="color:red">@ 8:00pm</span></a>
                        </li>
                    </div>
                </div>
            </ul>

            <div class="tab-content "style="margin:50px">

                <div class="tab-pane fade show active " id="one">
                    <div class="content" >
                        <div class="row " style="color:white" >
                    
                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/DSC_0005.JPG') }}" style="background-position:center">
                        
                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Speaker 1 : Ramzii</h5>
                                <h6> Topic : Welcome Speach </h6>
                                <p>the welcome speach from the presedent to all who attend our oppening'18.
                                    The one who will build the first cars' factory or the skyscrapers not must be one of k's family, we just build the idea and the anyone can do it.</p>
                            </div>

                        
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="two">

                    <div class="content">
                        <div class="row" style="color:white">
                    
                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/DSC_0013.JPG') }}" style="background-position:center">
                    
                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Speaker 2 : Ahmed El Gebally</h5>
                                <h6> Topic : Scholarships </h6>
                                <p>Not neccessary to be accepted in a schoolarship, to get high marks. 
                                    There are alot of scholarships that interest more in personal skills than the GPA </p>
                            </div>

                        
                        </div>
                    </div>
                </div>


                
                <div class="tab-pane fade " id="three">
                    <div class="content">
                        <div class="row" style="color:white">
                        
                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/DSC_0056.JPG') }}" style="background-position:center">
                    
                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Yasser Shaker</h5>
                                <h6> Topic : Emotional Intelligence </h6>
                                <p>When you feel you are afraid, say welcome to him and ask about the reason. 
                                    The last thing that you have to have system of action.  </p>
                            </div>
                        </div>
                    </div>    
                </div>


                <div class="tab-pane fade " id="four">

                    <div class="content">
                        <div class="row" style="color:white">

                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/IMG_2899.JPG') }}" style="background-position:center">

                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Break</h5>
                                <p>Our sponsers are Quickie , Sakalans , Bonjourno , Gato </p>
                            </div>

                        
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="five">
                    <div class="content">
                        <div class="row" style="color:white">
                        
                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/DSC_0013.JPG') }}" style="background-position:center">
                    
                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Speaker 3: Raaf Ayman</h5>
                                <h6> Topic : Entrepreneurship </h6>
                                <p>No need to achieve your success, to fail at least once.
                                     Planning well and efforts will make you succeed from the first time. 
                                </p>
                            </div>
                        </div>
                    </div>  
                
                </div>

                <div class="tab-pane fade " id="six">
                    <div class="content">
                        <div class="row" style="color:white">
                        
                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/DSC_0109.JPG') }}" style="background-position:center">
                    
                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Speaker 4: Ahmed Ezz</h5>
                                <h6> Topic : Music </h6>
                                <p> Beautiful music makes us feels happy.</p>
                            </div>

                        </div> 
                    </div>
                    
                </div>

                <div class="tab-pane fade " id="seven">
                    <div class="content">
                        <div class="row" style="color:white">
                        
                            <img class="d-block w-50 h-50" src="{{ asset('/user_style/images/opening/IMG_3036.JPG') }}" style="background-position:center">
                    
                            <div class="col-md-6  m-auto">
                                <h5 class="head ">Speaker 5: Yasser Ghalab</h5>
                                <h6> Topic : Be a joker </h6>
                                <p>How to manage your life and be a joker. </p>
                            </div>

                        </div> 
                    </div>
                    
                </div>

            </div>
        </div>

          
    <div class="slider" style="padding:50px ">

        <h2 class="moments"style="padding:30px; text-align:center; ">Gallary</h2>
        <div class="row">
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img s class="img-fluid" " src="{{ asset('/user_style/images/opening/IMG_3015.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_3026.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_2920.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_2952.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_5896.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_2965.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_5907.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_3050.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_5878.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/DSC_0057.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/DSC_0061.JPG') }}">
            </div>
            <div class="col-md-3 wow fadeInDown" style="margin: 30px auto; visibility: hidden; animation-name: none;">
                <img class="img-fluid" src="{{ asset('/user_style/images/opening/IMG_3011.JPG') }}">
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@section('footer')
	<script src="{{ asset('/user_style/js/events/opening.js') }}"></script>
@endsection