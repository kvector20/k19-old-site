<footer class="text-center">
    <div class="copy-rights">&copy; 2017-{{ Carbon\Carbon::now()->year }} K Vector</div>
    <div class="social">
        <a href="https://www.facebook.com/kvectorfoundation/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
        <a href="https://www.twitter.com/foundation_k?lang=ar" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
        <a href="https://www.instagram.com/kvectorfoundation/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
        <a href="https://www.youtube.com/channel/UCoq-3QCbHG9pXSGysbOyu5g" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
    </div>
</footer>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- js files -->

	<!-- Form Validation -->
    <script src="{{ asset('/user_style/plugins/form-validation/jquery.form.js') }}"></script> 
    <script src="{{ asset('/user_style/plugins/form-validation/jquery.validate.min.js') }}"></script>
	<!-- owl carouserl js -->
	<script src="{{ asset('/user_style/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('/user_style/plugins/bootstrap/popper.min.js') }}"></script>
	<script src="{{ asset('/user_style/plugins/bootstrap/bootstrap.min.js') }}"></script>
	<!-- wow js -->
	<script src="{{ asset('/user_style/plugins/wow-js/wow.min.js') }}"></script>
	<!-- slider js -->
	<script src="{{ asset('/user_style/plugins/slider/slider.js') }}"></script>
	<!-- Fancybox -->
	<script src="{{ asset('/user_style/plugins/facncybox/jquery.fancybox.js') }}"></script>
	<!-- template main js -->
	<script src="{{ asset('/user_style/js/main.js') }}"></script>

	<script src="{{ asset('/user_style/js/sidebar.min.js') }}"></script>
	<script src="{{ asset('/user_style/js/sidebar.js') }}"></script>
@yield('footer')