<!doctype html>
<html>
  <head>
    <title>BSIS-APPDEV</title>	
			<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>	
			<script src="js/jquery.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	

		
	

		
  </head>
  <body>
  
  <style>
  html, body {
  overflow-x: hidden;
}
 .custom-button {
  background-color: #e8e4c9;

  color: black; 
 
}

.custom-button:hover {
  background-color: skyblue;

}
  body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #e8e4c9;
}
  .b-example-divider {
        width: 100%;
        height: 1rem;
        background-color:#F0EAD6;
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
	  .form-control-dark {
	border-color: var(--bs-gray);
}
.feature-icon {
  width: 4rem;
  height: 4rem;
  border-radius: .75rem;
}

.icon-square {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
}

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.feature-icon-small {
  width: 3rem;
  height: 3rem;
}



.dropdown-menu {
  display: none;
  position: absolute;
  z-index: 1;
  background-color: #f9f9f9;
  min-width: 15px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
}
.dropdown-menu::after {
  border-bottom-color: white !important;
}

.dropdown:hover .dropdown-menu {
  display: block;
  background-color: white;
}
  
  .bottom-right {
    position: bottom;
    bottom: 0;
    right: 0;
    text-align: right;
    color: black;
    background-color: transparent;
    padding: 10px;
    font-size: 14px;
  }
  .video-background {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: -1;
        overflow: hidden;
      }

      .video-background video {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
	  .credits {
      text-align: center;
      margin-top: 20px;
      color: #FAFAFA;
    }
	.white-bold {
    color: black;
    font-weight: bold;
  }
  .white-black {
    color: #F5F5DC;
    font-weight: bold;
  }
  .transparent-text {
    opacity: 0.7; /* Adjust the opacity value as needed */
  }
  header {
  background-color: transparent;
}
.link-dark {
  color: black !important;
}
.custom-button {
  background-color: #F7F8E0;

  color: black; 
 
}

.custom-button:hover {
  background-color: skyblue;

}
  
  </style>

<main>

 
	
 <header class="p-3 mb-3 border-bottom-0 ">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="apple.png" alt="Apple" width="32" height="32" class="me-2">
      </a>

     <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
  <li><a href="iphone.php" class="nav-link px-2 link-body-emphasis white-bold">Iphone</a></li>
  <li><a href="airpods.php" class="nav-link px-2 link-body-emphasis white-bold">Airpods</a></li>
  <li><a href="mac.php" class="nav-link px-2 link-body-emphasis white-bold">Mac</a></li>
  <li><a href="ipad.php" class="nav-link px-2 link-body-emphasis white-bold">Ipad</a></li>
</ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>

      <div class="dropdown text-end">
        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="profilepix.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li><a class="dropdown-item" href="timeline.php">Timeline</a></li>
          <li><a class="dropdown-item" href="settings.php">Settings</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="signin.php">Sign out</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>

	
   <div class="b-example-divider"></div>
 
 

<div class="container-fluid px-4 py-5">
    <h2 class="pb-2 text-center fw-bold white-bold">Step into a world of innovation and craftsmanship.</h2>

    <div class="row row-cols-1 row-cols-lg-4 align-items-stretch g-5 py-5">
     


	 <div class="col">
    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="max-width: 100%; height: auto;">
      <video autoplay muted loop id="background-video" style="position: relative; width: 100%;">
        <source src="iphone.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1 text-center">
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
         
            <div class="text-center">
              <img src="apple.png" alt="Bootstrap" width="32" height="32" class="mx-auto">
            </div>
          </li>
		     <span style="font-size: larger; font-weight: bold; color: black;"><small>Iphone</small></span>
        </ul>
      </div>
    </div>
  </div>
	  
	  <div class="col">
    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="max-width: 100%; height: auto;">
      <video autoplay muted loop id="background-video" style="position: relative; width: 100%;">
        <source src="airpods.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1 text-center">
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
          
            <div class="text-center">
              <img src="apple.png" alt="Bootstrap" width="32" height="32" class="mx-auto">
            </div>
          </li>
		    <span style="font-size: larger; font-weight: bold; color: black;"><small>Airpods</small></span>
        </ul>
      </div>
    </div>
  </div>
	  

     <div class="col">
    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="max-width: 100%; height: auto;">
      <video autoplay muted loop id="background-video" style="position: relative; width: 100%;">
        <source src="mac.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1 text-center">
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
            
            <div class="text-center">
              <img src="apple.png" alt="Bootstrap" width="32" height="32" class="mx-auto">
            </div>
          </li>
		  <span style="font-size: larger; font-weight: bold; color: black;"><small>Mac</small></span>
        </ul>
      </div>
    </div>
  </div>
	  
	  

      
     <div class="col">
    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg" style="max-width: 100%; height: auto;">
      <video autoplay muted loop id="background-video" style="position: relative; width: 100%;">
        <source src="ipad.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <div class="d-flex flex-column h-100 p-5 pb-3 text-dark text-shadow-1 text-center">
      
        <ul class="d-flex list-unstyled mt-auto">
          <li class="me-auto">
      
            <div class="text-center">
			
              <img src="apple.png" alt="Bootstrap" width="32" height="32" class="mx-auto">
            </div>
			      
          </li>
		  <span style="font-size: larger; font-weight: bold; color: black;"><small>Ipad</small></span>
        </ul>
      </div>
    </div>
  </div>

    </div>
  </div>

   
   
  






 <div class="b-example-divider"></div>
<br>
<br>
<br>

<br>

<br>


 <div class="container">

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="carousel slide" data-ride="carousel" id="slider">
				<ol class="carousel-indicators">
					<li data-target="#slider" data-slide-to="0" class="active"></li>
					<li data-target="#slider" data-slide-to="1"></li>
					<li data-target="#slider" data-slide-to="2"></li>
					<li data-target="#slider" data-slide-to="3"></li>	
					<li data-target="#slider" data-slide-to="4"></li>		
					<li data-target="#slider" data-slide-to="5"></li>						
				</ol>		
			
				<div class="carousel-inner">
					<div class="item active">
						<img src="mypic1.jpg"/>
					</div>
					<div class="item">
						<img src="mypic22.jpg"/>
					</div>
					<div class="item"> 
						<img src="mypic1.png"/>
					</div>
					<div class="item">
						<img src="mypic33.jpg"/>
					</div>
					<div class="item">
						<img src="mypic38.jpg"/>
					</div>
					<div class="item">
						<img src="mypic45.jpg"/>
					</div>
					
				</div>
				<a href="#slider" data-slide="prev" class="left carousel-control">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a href="#slider" data-slide="next" class="right carousel-control">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		</div>
</div>

<br>
<br>
<br>

<br>

<br>

 <div class="b-example-divider"></div>


  <div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="signin.php" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="iphone.php" class="nav-link p-0 text-body-secondary">Iphone</a></li>
          <li class="nav-item mb-2"><a href="airpods.php" class="nav-link p-0 text-body-secondary">Airpods</a></li>
          <li class="nav-item mb-2"><a href="mac.php" class="nav-link p-0 text-body-secondary">Mac</a></li>
          <li class="nav-item mb-2"><a href="ipad.php" class="nav-link p-0 text-body-secondary">Ipad</a></li>
        </ul>
      </div>

     <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="signin.php" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="iphone.php" class="nav-link p-0 text-body-secondary">Iphone</a></li>
          <li class="nav-item mb-2"><a href="airpods.php" class="nav-link p-0 text-body-secondary">Airpods</a></li>
          <li class="nav-item mb-2"><a href="mac.php" class="nav-link p-0 text-body-secondary">Mac</a></li>
          <li class="nav-item mb-2"><a href="ipad.php" class="nav-link p-0 text-body-secondary">Ipad</a></li>
        </ul>
      </div>

       <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="signin.php" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="iphone.php" class="nav-link p-0 text-body-secondary">Iphone</a></li>
          <li class="nav-item mb-2"><a href="airpods.php" class="nav-link p-0 text-body-secondary">Airpods</a></li>
          <li class="nav-item mb-2"><a href="mac.php" class="nav-link p-0 text-body-secondary">Mac</a></li>
          <li class="nav-item mb-2"><a href="ipad.php" class="nav-link p-0 text-body-secondary">Ipad</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn custom-button type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
 <div class="bottom-right">
  <p>All products showcased are the property of Apple Inc.</p>
  <p>&copy; 2023 - eternity</p>
</div>
  </footer>
</div>
 

 <script>
 document.addEventListener("DOMContentLoaded", function() {
  var dropdownToggle = document.querySelector('.dropdown-toggle');

  dropdownToggle.addEventListener('click', function() {
    var dropdownMenu = this.nextElementSibling;
    dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
  });
});

 
 </script>

      
  </body>
</html>
