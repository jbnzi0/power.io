<!DOCTYPE html>
<html lang="en">
<head>
<title>Power.io</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

 
	  
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}">Power.io<span>.</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="{{ url('/team') }}" class="nav-link"><span>Team</span></a></li>
	          <li class="nav-item"><a href="{{ url('/pb') }}" class="nav-link"><span>Publications</span></a></li>
	          <li class="nav-item"><a href="{{ url('/aw') }}" class="nav-link"><span>Awards</span></a></li>
              @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link"><span>Dashboard</span></a></li>
                    @else
	                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>Login</span></a></li>
              @endauth
              @endif
	        </ul>
	      </div>
	    </div>
</nav>

<section class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="/img/software_engineers.svg" alt="" >
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="text mt-5">
	        		<span class="subheading">TKU Research Lab</span>
		  				<h1>Power.io</h1>
						  <p>What if solving one problem could unlock solutions to thousands more?</p>
						  <form action="about.html">
							<input type="submit" value="Learn More..." class="btn btn-primary py-3 px-4"/>
						</form>
		  				
	          </div>
	        </div>
	    	</div>
      </div>
</section>


<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Work with us</h2>
            <p>Collaborating is the key of success so we are always up to work with new people !</p>
          </div>
        </div>
            
    
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

        </div>
      </div>
    </section>
    <br/>
<footer class="ftco-footer ftco-section">
</footer>

  

  <!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/js/client/jquery.min.js"></script>
  <script src="/js/client/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/client/popper.min.js"></script>
  <script src="/js/client/bootstrap.min.js"></script>
  <script src="/js/client/jquery.easing.1.3.js"></script>
  <script src="/js/client/jquery.waypoints.min.js"></script>
  <script src="/js/client/jquery.stellar.min.js"></script>
  <script src="/js/client/owl.carousel.min.js"></script>
  <script src="/js/client/jquery.magnific-popup.min.js"></script>
  <script src="/js/client/jquery.animateNumber.min.js"></script>
  <script src="/js/client/scrollax.min.js"></script>
  
<script src="/js/client/main.js"></script>

</body>
</html>



