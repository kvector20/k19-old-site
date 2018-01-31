<footer class="text-center">
    <div class="copy-rights">&copy; 2017-{{ Carbon\Carbon::now()->year }} K vector</div>
    <div class="social">
        <a href="https://www.facebook.com/kvectorfoundation/" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
        <a href="https://www.twitter.com/foundation_k?lang=ar" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
        <a href="https://www.instagram.com/kvectorfoundation/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
    </div>
</footer>


<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- js files -->
<script src="{{ asset('/js/wow.min.js') }}"></script>
<script src="{{ asset('/js/sidebar.min.js') }}"></script>
<script src="{{ asset('/js/sidebar.js') }}"></script>
<script src="{{ asset('/js/popper.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

@yield('footer')