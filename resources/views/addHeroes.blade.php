<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
   <title>Avengers Potal</title>


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
                <a href="index.html">Avengers Potal</a>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Add Avengers</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Welcome to the Team</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Contact section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Let's work together!</h1>
			<div class="contact-form">
				<form id="contact-form" method="post" enctype="multipart/form-data">
					@csrf
					<input name="name" type="text" class="form-control" placeholder="Avenger Name" required>
					<input name="image" type="file" class="form-control" placeholder="Add Image" required>
                    <input name="ability" type="text" class="form-control" placeholder="Ability" required>
					<textarea name="description" class="form-control" placeholder="Description" rows="4" required></textarea>
					<div class="contact-submit">
						<input type="submit" class="form-control submit" value="Add Avenger">
					</div>
				</form>
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
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright ?? 2016 Web Solutions - Designed by udara</p>
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

<!-- Javascript 
================================================== -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}"></script>
<script src="{{asset('js/isotope.js')}"></script>
<script src="{{asset('js/imagesloaded.min.js')}"></script>
<script src="{{asset('js/wow.min.js')}"></script>
<script src="{{asset('js/custom.js')}"></script>

</body>
</html>