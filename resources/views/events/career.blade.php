@extends('layouts.layout')

@section('title')
	Career Launcher 5
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/events/career.css') }}">
@endsection

@section('body')
	<div class="container">
            
            <div class="book">
                
                <div class="row">
                    <div class="col-1 clearPadding left-wedgit">
                        <div class="bookLeft"></div>    
                    </div>
                    
                    <div class="col-11 clearPadding">
                        <div class="bookRight">
                            
                            <h1>Career Launcher 5.0</h1>
                            <div class="overview">
                                <div class="triangle"></div>
                                <p>Celebrating the 5th year of " Career launcher" we decided that it should be greater, different and longer than any past version. We decided to provide you with the " beginning " in every field you may dreamed to work in. We provide you with the way you could be the dominant of your life and choose your own limits by your will.</p>



                                <div class="details">    
                                    <div class="detail">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Egyptian Chinese University</span>
                                    </div>
                                    <div class="detail">
                                        <i class="fa fa-briefcase"></i>
                                        <span>17 Companies</span>
                                    </div>
                                    <div class="detail">
                                        <i class="fa fa-calendar"></i>
                                        <span>26:29 January 2018</span>
                                    </div>
                                    <div class="detail">
                                        <i class="fa fa-users"></i>
                                        <span>700 Students attend</span>
                                    </div>  
                                </div>
                            </div>
                
                            <!-- START CALENDER -->

                            <div class="calenderSection">
                                <h2>Our Time Table Was</h2>
                                <div class="calenders">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 padding20">
                                            <div class="calender">
                                                <h3>26 Jan</h3>

                                                <div class="workshop">
                                                    <p>Project Management By "Weatherford"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Green Building and Contractor VS Consultant By "ECG"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Medical Equipment & Marketing By "Siemens Healthineers"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>SOLIDWORKS By "El Marakby Steel"</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-md-6 padding20">
                                            <div class="calender">
                                                <h3>27 Jan</h3>
                                                <div class="workshop">
                                                    <p>Medical Equipment & Marketing By "Siemens Healthineers"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Load Estimation, Equipment Sizng and SLD By "ECG"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Project Management in construction projects By "EMAAR"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Introduction to 2G, 3G, 4G and SG By "VODAFONE EGYPT"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Marketing & how to start your career By "ORACLE"</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-md-6 padding20">
                                            <div class="calender">
                                                <h3>28 Jan</h3>
                                                <div class="workshop">
                                                    <p>ABB Grid Automation Solutions "ABB"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>WIFI Planning By "SYSTEL"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Project Management in construction projects By "ORANGE"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>How to Start your Creer in Mettalurgical Engineering By "ORACLE"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Project Procedures and Statical Systems By "ECG"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Supply Chain By "CAREER ADVANCERS"</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12 col-md-6 padding20">
                                            <div class="calender">
                                                <h3>29 Jan</h3>
                                                <div class="workshop">
                                                    <p>Voice Over IP Essentials By "ORANGE"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Introduction About Machine Learning and Machine Vision "DEVISIONX"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Substations and Protection By "ELSEWEDY ELCTRIC"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Project Management By "ELSEWEDY ELCTRIC"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>7 Ways to Pass a Job Interview and CVWriting Skills By "ELSEWEDY ELCTRIC"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Real Estate Development By "ALFUTTAIM"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>Fundamentals of Lighting By "FAGERHULT"</p>
                                                </div>
                                                <div class="workshop">
                                                    <p>HVAC By "SAMSUNG"</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- END CALENDER -->

                            <div class="clear"></div>

                            <!-- START GALLERY -->

                            <div class="gallery">
                                <h2>Our Gallery</h2>
                                <div class="row">
                                    <?php for ($i=0; $i < 18; $i++) { 
                                        echo '<div class="col-12 col-md-6 col-xl-4 image"><div class="hoverEffect"><div class="img"></div></div></div>';
                                    }?>
                                </div>
                            </div>

                            <!-- END GALLERY -->
                        </div>
                    </div>
                </div>
                    
            </div>
                    
            <div class="book mb-5">
                <div class="row">
                    <div class="col-1 clearPadding left-wedgit">
                        <div class="bookLeft"></div>
                    </div>
                    <div class="col-11 clearPadding">
                        <div class="bookRight">

                            <!-- START SPONSORS -->

                            <div class="sponsorsSection">
                                <h2>Powered By</h2>
                                <div class="sponsors">
                                    <div class="row">
                                        <?php $brands = array(
                                                'abb.png',
                                                'alfatim.png',
                                                'divisionx.png',
                                                'ECG.png',
                                                'elsewedy.png',
                                                'fagerhult.png',
                                                'Layer-a.png',
                                                'mks.png',
                                                'oracle.png',
                                                'orange.png',
                                                'vodafone.png',
                                                'samsung.png',
                                                'siemens.png',
                                                'systel.png',
                                                'weatherford.png',
                                                'emaar.png',
                                            ); ?>
                                        @foreach ($brands as $brand)
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-2"><img class="img-fluid" src="/images/brands/{{ $brand }}"></div>
                                        @endforeach
                                    </div>
                                </div>

                            </div>

                            <!-- END SPONSORS -->


                        </div>
                    </div>
                </div>
            </div>
            
        </div>

@endsection

@section('footer')
@endsection