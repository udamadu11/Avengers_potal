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
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Avengers</h1>
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
   <table class="table table-striped table-hover">
   <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Ability</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($heroes as $hero)
    <tr>
      <td>{{$hero->name}}</td>
      <td>{{$hero->ability}}</td>
      <td><img src="{{asset('/storage/')}}/{{$hero->image}}" alt="Portfolio" style="width:150px;height:150px;"></td>
      <td><a href="/edit/{{$hero->id}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
      <td><a href="/delete/{{$hero->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
    </tr>
    @endforeach
  </tbody>
    </table>
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