<!doctype html>
<html>

<head>
    <title>BSIS-APPDEV</title>	

    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    



    <style>
	html, body {
  overflow-x: hidden;
  background-color: #e8e4c9;
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
.container {
  width: 100%;
  max-width: 960px;
}

.bg-body-tertiary {
  background-size: cover;
  background-repeat: no-repeat;
  height: 600px;
  width: 100%;
}

.bg-body-tertiary .shadow-sm {
  width: 80%;
  height: 300px;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

.b-example-divider {
        width: 100%;
        height: 1rem;
        background-color:#F0EAD6;
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
	  .container {
  max-width: 960px;
}

/*
 * Custom translucent site header
 */

.site-header {
  background-color: rgba(0, 0, 0, .85);
  -webkit-backdrop-filter: saturate(180%) blur(20px);
  backdrop-filter: saturate(180%) blur(20px);
}
.site-header a {
  color: #8e8e8e;
  transition: color .15s ease-in-out;
}
.site-header a:hover {
  color: #fff;
  text-decoration: none;
}

/*
 * Dummy devices (replace them with your own or something else entirely!)
 */

.product-device {
  position: absolute;
  right: 10%;
  bottom: -30%;
  width: 300px;
  height: 540px;
  background-color: #333;
  border-radius: 21px;
  transform: rotate(30deg);
}

.product-device::before {
  position: absolute;
  top: 10%;
  right: 10px;
  bottom: 10%;
  left: 10px;
  content: "";
  background-color: rgba(255, 255, 255, .1);
  border-radius: 5px;
}

.product-device-2 {
  top: -25%;
  right: auto;
  bottom: 0;
  left: 5%;
  background-color: #e5e5e5;
}


/*
 * Extra utilities
 */

.flex-equal > * {
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    flex: 1;
  }
}
.text-bg-custom {
  position: relative;
}

.text-bg-custom::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #e8e4c9;
  z-index: -1;
}

.content {
  position: relative;
  z-index: 1;
}

    </style>

    
  
  </head>
  <body>
    

  

    
 <header class="p-3 mb-3 border-bottom-0">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="apple.png" alt="Apple" width="32" height="32" class="me-2">
      </a>
      <a href="product.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none ml-auto">
        <img src="bag.png" alt="Shopping Bag" width="30" height="30" class="me-2">
      </a>
    </div>
  </div>
</header>

 <div class="b-example-divider"></div>
<main>
 
  <div class="bg-body-tertiary shadow-sm mx-auto" style="background-image: url('macads4.jpg'); background-size: cover;  background-repeat: no-repeat; height: 760px; width: 100%;"></div>


   
  

 <div class="b-example-divider"></div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="text-bg-custom me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Unleash Your Creative Genius with Apple's Powerhouse.</h2>
      </div>
    <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('macads1.jpg'); background-size: cover;  background-repeat: no-repeat; height: 900px; width: 100%;"></div>

    </div>
	
  </div>
 <div class="b-example-divider"></div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    
     <div class="text-bg-custom me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Designed for Effortless Productivity.</h2>	
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('macads3.jpg'); background-size: cover;  background-repeat: no-repeat; height: 700px; width: 100%;"></div>
    </div>
  </div>
 <div class="b-example-divider"></div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    
     <div class="text-bg-custom me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Where Innovation Meets Inspiration.</h2>
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('macads2.jpg'); background-size: cover;  background-repeat: no-repeat; height: 700px; width: 100%;"></div>
    </div>
  </div>

 <div class="b-example-divider"></div>
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    
     <div class="text-bg-custom me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Stay Powered On-The-Go</h2>
      </div>
      <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0; background-image: url('macads.jpg'); background-size: cover;  background-repeat: no-repeat; height: 700px; width: 100%;"></div>
    </div>
  </div>
</main>

 <div class="bottom-right">
  <p>All products showcased are the property of Apple Inc.</p>
  <p>&copy; 2023 - eternity</p>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
