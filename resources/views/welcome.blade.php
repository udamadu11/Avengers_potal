<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Avengers Potal</title>

       <!-- Site title
   ================================================== -->
	<title>Pure Mix - HTML CSS Template</title>

    <!-- Bootstrap CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!-- Animate CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

    <!-- Font Icons CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

    <!-- Main CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


      
    </head>
    <body>


<!-- Navigation section
================================================== -->
<div class="nav-container">
<nav class="nav-inner transparent">

  <div class="navbar">
     <div class="container">
        <div class="row">

          <div class="brand">
            <a href="#">Avengers Potal</a>
          </div>
        </div>
     </div>
  </div>

</nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-one">
<div class="container">
    <div class="row">

        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
      <div class="header-thumb">
          <h1 class="wow fadeIn" data-wow-delay="1.6s">MAVEL CHARACTERS</h1>
          <h3 class="wow fadeInUp" data-wow-delay="1.9s">Get hooked on a hearty helping of heroes and villains from the humble House of Ideas!</h3>
      </div>
        </div>

    </div>
</div>		
</section>

<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="#" class="opc-main-bg" data-filter=".graphic">News</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".template">Comics</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Tv Shows</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".branding">Movies</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">
                  @foreach($heroes as $hero)
                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('/storage/')}}/{{$hero->image}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>{{$hero->name}}</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>
                  @endforeach
                            </div>
                        </div>
               </div>      
         </div>
      </div>
     
   </div>
</section>

<!-- Footer section
================================================== -->
<footer>
<div class="container">
    <div class="row">

        <div class="col-md-12 col-sm-12">
            <p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2021 Web Solutions - Designed by udara</p>
            <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-dribbble"></a></li>
                <li><a href="#" class="fa fa-behance"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
        </div>
        
    </div>
</div>
</footer>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}"></script>
<script src="{{asset('js/isotope.js')}"></script>
<script src="{{asset('js/imagesloaded.min.js')}"></script>
<script src="{{asset('js/wow.min.js')}"></script>
<script src="{{asset('js/custom.js')}"></script>

    </body>
</html>
