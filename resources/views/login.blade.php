<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IBO Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('css/login.css')}}" rel="stylesheet">

</head>

<body>
    
  <div class="container" id="container">


    <div class="form-container sign-in-container ">
      <form action="#">
        <h1>Sign in</h1>

        <span>Or use your account</span>
        <input type="email" placeholder="Email" class="signin"> 
        <input type="password" placeholder="Password" class="signin">
        <button>Sign In</button> 
      </form>
    </div>

    <div class="overlay-container ">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcomeback Back! </h1>
          <p>To keep connected with Us  please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>

        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend! </h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>

    <div class="form-container sign-up-container ">
      <form action="#">
        <h1>Create Account</h1>

        <span>Or use your email for registeration</span>
        <input type="text" placeholder="Name" class="signup">
        <input type="email" placeholder="Email" class="signup"> 
        <input type="password" placeholder="Password" class="signup"> 
        <button>Sign Up</button>
      </form>
    </div>
  </div>

  <!-- Template Main JS File -->
  <script src="{{asset('js/login.js')}}" ></script>

</body>

</html>