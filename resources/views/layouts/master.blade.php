<!DOCTYPE html>
 <html lang="en-us">
  <head>
   <meta charset="utf-8">
   <title>Assignment-19</title>
 
   <!-- mobile responsive meta -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="This is meta description">
  
 
   <!-- plugins -->
   
   <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('assets/plugins/themify-icons/themify-icons.css')}}">
   <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
 
   <!-- Main Stylesheet -->
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" media="screen">

 
   <meta property="og:title" content="simple Blog" />
   <meta property="og:description" content="This is meta description" />
   <meta property="og:type" content="website" />
   <meta property="og:url" content="" />
   <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
 
 <!-- axios -->
   <script src="{{asset('assets/js/axios.min.js')}}"></script>


  </head>
 
 <body>
   
 <div class="container-fluid">

    <!-- navigation -->
    <section>
        @include('components._navbar')
    </section>
    <!-- /navigation -->

<br><br><br><br>

  <!-- main container -->

  <section>
    <div id="main-container" class="container-fluid">
        @yield('content')
    </div>
  </section>

  

  <!-- main container -->

<br><br><br>

  <!-- footer -->

  <section>
    @include('components._footer')
  </section>
    
<!-- footer ends here -->

  <!-- JS Plugins -->
  <script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>

<script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>

<script src="{{asset('assets/plugins/instafeed/instafeed.min.js')}}"></script>


<!-- Main Script -->
<script src="{{asset('assets/js/script.js')}}"></script>

 </div>


 </body>

 </html>