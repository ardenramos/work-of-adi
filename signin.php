<!doctype html>
<html>
  <head>
    <title>BSIS-APPDEV</title>	
		<link href="css/bootstrap.min.css" rel="stylesheet">
	
  </head>
 
  <style>
  html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: black;
}

.form-signin {
  max-width: 330px;
  padding: 15px;

}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
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
	.custom-button {
  background-color: #e8e4c9;

  color: black; 
 
}

.custom-button:hover {
  background-color: skyblue;

}
  </style>
  <div class="video-background">
      <video autoplay muted loop>
        <source src="large.mp4" type="video/mp4">
      </video>
    </div>
 
 <<body class="text-center">
    <main class="form-signin w-100 m-auto">
      <form>
        <img class="mb-4" src="applewhite.png" alt="" width="64" height="72">
        <h1 class="h3 mb-3 fw-normal" style="color: #FFFFFF; font-size: 24px; font-weight: bold;">Please sign in</h1>

        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="arden.ramos@neu.ph">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" placeholder="Password" value="•••••••">
          <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
          <label style="color: white;">	
            <input type="checkbox" value="remember-me" checked> Remember me
          </label>
        </div>
       <a href="index.php">
  <button class="w-100 btn btn-lg custom-button" type="button">Sign in</button>
</a>


        <div class="credits">
          <p>All products showcased are the property of Apple Inc.</p>
          <p>&copy; 2023 - eternity</p>
        </div>
      </form>
    </main>
  </body>
</html>
