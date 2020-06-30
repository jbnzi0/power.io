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

	 
	
	<section class="ftco-section ftco-no-pt" id="testimonial-section">
    	<div class="container">
    		<div class="row justify-content-center py-5 mt-5">
          		<div class="col-md-5 heading-section text-center ftco-animate">
          			<span class="subheading">Current researches</span>
            		<h2 class="mb-4">Publications</h2>
         		</div>
       		</div>
    		<div class="row" id="publication">
			
			</div>
    	</div>
	</section>
	

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
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="/js/client/main.js"></script>
	
  <script>
	document.body.onload = createDiv
	var uex = "flaticon-user-experience"
	async function createDiv(){
		div = document.getElementById("publication")
	
		publications = await getPublications()
			
			for (const i in publications) {
		
				
				var component = document.createElement("div")
				iconDiv = document.createElement("div")
				span = document.createElement("span")
				changeableDiv = document.createElement("div")
				title = document.createElement("h3")
				icon = document.createElement("i")
				description = document.createElement("p")
				component.classList.add("col-md-4")  
				component.classList.add("text-center")
				component.classList.add("d-flex")
				component.classList.add("ftco-animate")	
				iconDiv.classList.add("services-1")
				iconDiv.classList.add("bg-light")
				span.classList.add("icon")
				icon.classList.add("flaticon-innovation")
				changeableDiv.classList.add("desc")
				title.classList.add("mb-5")
				//title.setAttribute("id", "publication_title")
				//description.setAttribute("id", "publication_desc")
			
				
				title.innerHTML = publications[i].title
				content = publications[i].content
				content = content.slice(0, 300)
				console.log();
				
				
				
				description.innerHTML = content
				span.appendChild(icon)
				iconDiv.appendChild(span)

				changeableDiv.appendChild(title)
				changeableDiv.appendChild(description)
				iconDiv.appendChild(changeableDiv)
				component.appendChild(iconDiv)
				
				div.appendChild(component)
			}
	}
	

	async function getPublications(){
		const response = await axios.get('api/publications').then(({ data }) => (publications = data.data ))
		return response	
	}

 </script>
  </body>
</html>
