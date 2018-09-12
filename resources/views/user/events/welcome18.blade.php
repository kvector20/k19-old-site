@extends('user.layouts.layout')

@section('title')
K'18 Welcome Party
@endsection

@section('head')
<link rel="stylesheet" href="{{ asset('/user_style/css/events/welcome.css') }}">
<link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
@endsection

@section('body')
<div class="welcome">
        <div class="container">
            <div class="text-center">
                <img src="{{ asset('/user_style/images/Welcome party/party.png') }}" alt="" class="img-fluid balloon" />
            </div>

            <div class="welcome-content bg-light">
                <div class="text-center heading"><h1>Welcome Party</h1></div>
                <div class="text-center"><img src="{{ asset('/user_style/images/Welcome party/party4.png') }}" alt="" class="img-fluid under-heading"></div>

                <div class="info">
                    <div class="row">
                        <div class="col-md-7">
                            <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            <span>TUE 1/8/2017</span>
                        </div>
                        <div class="col-md-5">
                            <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                            <span>بيت السناري</span>
                        </div>
                    </div>
                </div>

                <div class="time-plan">
                <div class="text-center">Time Plan</div>
                <table class="table bg-primary" >
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Event</th>
                            <th>Presenter</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-info">
                            <td>3:00</td>
                            <td>Starting Speech</td>
                            <td>President</td>
                        </tr>
                        <tr>
                            <td>3:15</td>
                            <td>Game</td>
                            <td>Events PM</td>
                        </tr>
                        <tr class="bg-info">
                            <td>4:00</td>
                            <td>Music Show</td>
                            <td>Band Team</td>
                        </tr>
                        <tr>
                            <td>4:30</td>
                            <td>Break</td>
                            <td></td>
                        </tr>
                        <tr class="bg-info">
                            <td>5:15</td>
                            <td>Icebreaking Activities</td>
                            <td>President</td>
                        </tr>
                        <tr>
                            <td>6:15</td>
                            <td>Committees’ Meeting</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                </div>

                <div class="video">
                    <div class="text-center">How We Welcome Vectorians</div>
                    <div class="embed-responsive embed-responsive-16by9" style="border: 10px solid #146b84; border-radius: 10px;">
                        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fkvectorfoundation%2Fvideos%2F1348924531903598%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                    </div>
                </div>

                <div class="gallery">
                    <div class="text-center">Vectorians Gallery</div>

                    <div class="card-columns" style="padding: 20px;">

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/1.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">President</h4>
                                <p class="card-text">President Ahmed Ramzy start speech and welcome the new participants</p>
                            </div>
                        </div>
  
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/2.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Events PM</h4>
                                <p class="card-text">Events Project Manager Gamila preparing the party and destriputimg the catring</p>
                            </div>
                        </div>
  
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/3.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">High Board and Board</h4>
                                <p class="card-text">High board and board listennig to president and participate in the party organization</p>
                            </div>
                        </div>
  
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/4.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Magazine Flyers</h4>
                                <p class="card-text">Magazine Flyers that destriputed on the participants in the party</p>
                                <p class="card-text">Magazine PM Salmaa and magazine Head Bassant</p>
                            </div>
                        </div>
  
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/5.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Music Band</h4>
                                <p class="card-text">Music Band that make a beautiful mood in the party with classic arabic music</p>  
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/6.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Participants</h4>
                                <p class="card-text">Our new participants how came early and read the flyers</p>                 
                            </div>
                        </div>
  
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/7.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Shirts</h4>
                                <p class="card-text">This year shirts new design with black color, our slogan and position of the members</p>   
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/8.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Place</h4>
                                <p class="card-text">This welcome party is organized at بيت السناري in السيده زينب and it was a good place</p>
                                
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/9.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Game</h4>
                                <p class="card-text">Team work game.</p>  
                                <p class="card-text">This game designed to make the participants feel the importace of the team work</p>                  
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/10.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Giveaways</h4>
                                <p class="card-text">Giveaways designed with a moral in the back of the sticks</p>
                                <p class="card-text">Designed by DCR Heads Mohammed El-Baz, Menna</p>
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/11.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Slogan</h4>
                                <p class="card-text">This year slogan "Strike The Glory"</p>
                                <p class="card-text">Hanged by DCR Heads</p>
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/12.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Gift</h4>
                                <p class="card-text">Symbolic gift that given to the winner in the game</p>
                                
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/13.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Giveaways</h4>
                                <p class="card-text">Giveaways designed with a moral in the back of the sticks</p>
                                <p class="card-text">Designed by DCR Heads Mohammed El-Baz, Menna</p>
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/14.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Participants</h4>
                                <p class="card-text">Our new participants lestinnig to the president Ahmed Ramzy</p> 
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/15.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Welcome</h4>
                                <p class="card-text">Welcome word that designed and hanged at the enterance of the participants by DCR Heads</p>
                                
                            </div>
                        </div>

                        <div class="card bg-dark text-white">
                            <img class="card-img" src="{{ asset('/user_style/images/Welcome party/16.JPG') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h4 class="card-title">Game</h4>
                                <p class="card-text">Team work game.</p>  
                                <p class="card-text">This game designed to make the participants feel the importace of the team work</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection

@section('footer')

@endsection