<!DOCTYPE html>
<html lang="en">
    @include('inc.__frontend_head')
  <body>
    <!-- Google Tag Manager (noscript) -->
  
    <!-- End Google Tag Manager (noscript) -->
    <!-- wrapper Start -->
    <div class="wrapper">
      <!-- header Start -->
    @include('inc.__frontend_home_nav')
    
      <!-- header end -->
        @yield('frontend_content')
      <!-- footer Start -->
     @include('inc.__frontend_footer')
      <!-- footer end -->
    </div>
    <!-- wrapper end -->

    <!-- to-top Start -->
    <div class="to-top"></div>
    <!-- to-top end -->
    <!-- jQuery libs -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.js')}}"></script>
    <!-- jQuery Plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/viewportchecker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/slick.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/anitabs.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/mask.js')}}"></script>
    <!-- Scripts  -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/scripts.js')}}"></script>
  </body>

</html>
