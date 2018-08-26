@extends('user.layouts.layout')

@section('title')
Contact Us
@endsection

@section('head')

@endsection

@section('body')
        <!-- 
        ================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Contact Us</h2>
                    <div class="text-center">Feel free to contact us</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Contact With Us</h2>
                    <div class="contact-form">
                        <form id="contact-form" method="#" action="#" role="form">
                
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".8s">
                                <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1s">
                                <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.2s">
                                <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>    
                            </div>
                            
                            <div id="success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>
                            
                            <div id="error" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>
                            
                            <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1.4s">
                                <button id="contact-submit" class="btn btn-default btn-danger">Send Message</button>
                            </div>                      
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">Find Us</h2>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.370370437249!2d31.209396414645823!3d30.02623058188892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458472fa8265ddb%3A0x282c4b44cdf7e83c!2sFaculty+of+Engineering%2C+Cairo+University!5e0!3m2!1sen!2seg!4v1535244054968" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

@endsection

@section('footer')

@endsection