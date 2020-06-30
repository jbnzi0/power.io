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


      <section class="ftco-about img ftco-section" id="about-section">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(https://media-exp1.licdn.com/dms/image/C4E1BAQFjsNcKEb6a5w/company-background_10000/0?e=2159024400&v=beta&t=kKObCgFD-AwMk0lji7h_hzso7w26V81s28OPd1fSZcQ);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-md-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">About Us</h2>
		            <p>Expanding Our Knowledge, Finding New Answers</p>
		            <div class="text-about">
						Several diverse groups are tied into the Design Research Lab network: As a team, we investigate future perspectives for a digital society, its ramifications, and policies for inclusive and sustainable development. 
						We believe in participatory design and invite different groups of people to join our research endeavors in order to reflect on their individual experiences, hopes, and constraints. Furthermore, we work with interventions, cultural hacking and design explorations as research methods to address today’s challenges in a different way. 
						Besides the professorship for design research at the College of Architecture, Media and Design at the Berlin University of the Arts, The Weizenbaum Institute investigates the current changes in all aspects of society occurring in response to digitalization. 
						The goals are to develop a comprehensive understanding of these changes based on rigorous academic analysis and to offer informed strategies to address them at a political and economic level.
						The Design Research Lab is involved with two research groups. Within the Einstein Center Digital Future Prof. Dr. Gesche Joost is principal investigator for the topic of digital humanities and society. 
						For the DFKI the Interactive Textiles research group builds on extensive expertise in the field of concept development for electronic textiles and wearable technology and is dedicated to the design and analysis of portable interfaces based on textile materials and production techniques. 
						Using the methods of interdisciplinary and participative design research, projects are developed around human-machine interaction with wearables and soft interfaces. 
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
        </div>

        <br />
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
            <div class="container">
                    <div class="row d-md-flex align-items-center align-items-stretch">
              
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                  <div class="text">
                    <strong class="number" data-number="50">0</strong>
                    <span>Partners</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                  <div class="text">
                    <strong class="number" data-number="100">0</strong>
                    <span>Open Source Projects</span>
                  </div>
                </div>
              </div>
              <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 bg-light">
                  <div class="text">
                    <strong class="number" data-number="200">0</strong>
                    <span>Awards</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
            
    </section>


    <footer class="ftco-footer ftco-section">
    
    </footer>
    
  

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/js/clientgoogle-map.js"></script>
  
<script src="/js/client/main.js"></script>
  </body>
</html>