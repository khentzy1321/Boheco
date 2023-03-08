
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap2.min.css">
    
    <!-- Style -->
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link rel="stylesheet" href="css/register.css">


    
    <link rel = "stylesheet" href = "{{asset ('resources/Magnific-Popup-master/dist/magnific-popup.css')}}">
    <link rel = "stylesheet" href = "{{asset('resources/animate.css-main/animate.css')}}">

    <title>Register Form</title>
  </head>
  <body>
    <main>
      <div class="box">
          <div class="form-wraps">
          <form method="POST" action="{{ route('register') }}">
                        @csrf
          <a href="/">
              <div class="logo">
                  <img src="./images/logo.png"  alt="logo">
                            <h3>BOHECO I</h3>
                           
                        </div>
                        </a>
                        <div class="heading">
                            <h2 class="text-center">Sign Up</h2>
                        </div>
                        <div class="register-form">
                            <div class="input-wrap"> 
                                <input type="text" 
                                class="inp-field form-control" 
                                id="name" name="name" 
                                required>
                                <label><i class="fas fa-user"></i> Username</label>
                            </div>
                            <div class="input-wrap">
                                <input type="email" 
                                class="inp-field form-control" 
                                id="email" name="email"
                                required>
                                <label> <i class="fas fa-envelope"></i> Email</label>
                           </div>
                            <div class="input-wrap">
                                <input type="password" 
                                class="inp-field form-control" 
                                id="password" name="password"
                                required>
                                <label> <i class="fas fa-lock"></i> Password</label>
                           </div>
                            <div class="input-wrap">
                                <input type="password" 
                                class="inp-field form-control" 
                                id="passwword-confirm" name="password_confirmation"
                                required>
                                <label> <i class="fas fa-unlock"></i> Confirm Password</label>
                           </div>
                           <div class="btn-sub">
                           <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                           </div>
                        </div>
                         <div class="bot">
                            <h6>already have an account?</h6>
                            <a href="{{ route('login') }}" class="toggle">Click here</a>
                            <div>
                                <div class="or">
                                <p>visit us on</p>
                                </div>
                           
                            <div class="icons">
                            <a href="https://www.facebook.com/BOHECO1officialpage/" class="fb">
                               <img src="/images/icons/facebook.png" alt="facebook">
                                </a>
                                <a href="#" class="yt">
                                <img src="/images/icons/youtube.png" alt="youtube">
                                </a>
                                <a href="https://boheco1.com/" class="goog">
                                    <img src="/images/icons/google.png" alt="google">
                                </a>
                              </div>    
                            </div>
                         </div>
                    </form>
              </div>
           </div>
        <div class="carousel">
          <div class="con">
            <div class="container wow animate__animated animate__fadeInLeft animate__slow">
              <h3 class="text-center text-warning">MISSION</h3>
              <p><h6 class="text-light text-center">
                To deliver quality electric services consistent
               with our core values,  <br> taking
                advantage of the latest technologies of the  resources 
                <br> for member-consumer-owner-satistfaction
              </h6></p>
            </div>
            <div class="container wow animate__animated animate__fadeInRight animate__slow">
              <h3 class="text-center text-warning">VISION</h3>
              <p><h6 class="text-light text-center">The premier electric power 
                provider improving the lives of every  <br> BOHOLANO</h6></p>
            </div>
          </div>
      </div>
    </main>
    <script src="js/main.js"></script>
    <script src = "{{asset('resources/WOW-master/dist/wow.js')}}"></script>
  </body>
  <style>
    .con{
      margin-top:200px;
      align-items:center;
    }
    h6{
      font-size: 1.0rem;
    }
  
  </style>
</html>
