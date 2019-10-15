<?php

if(   isset(    $_SESSION['name']   )   )
header("Location: dash.php");

?>

<!DOCTYPE html>
<html>

<head>
  <title>Cosmo-Learn</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/login.css">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.html">Cosmo-Learn</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#downloads">Downloads</a></li>
          <li><a href="#instructions">Instructions</a></li>
          <li><a href="#register" style="width:auto;">Sign up</a></li>
         
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

         <!-- Slide 1 -->
         <div class="item active">
            <div class="carousel-background"><img src="img/home/1.jpg" alt="" ></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Cosmo-Learn</h2>
                <p class="animated fadeInUp">Learn to Understand.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Begin</a>
                <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="btn-get-started animated fadeInUp">Login</a>
                <a href="#register" class="btn-get-started animated fadeInUp">Sign Up</a>
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          

        </div>

      </div>
    </div>
  </section><!-- #intro -->
  <div id="id01" class="modal">
  
      <form class="modal-content animate" action="abeslog.php" method="post">
          <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>
        <div class="container">
          <label style="float:left;" for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="name" required>
    
          <label style="float:left;" for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
            
          <button type="submit">Login</button>

        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" style="width: auto;
          padding: 10px 18px; background-color: lightgrey;float:left">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
    <!-- About -->
    <section id="about" class="home-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="section-heading">
              <h2>About</h2>
              <div class="heading-line"></div>
              <p>This project aims for a better model of education.</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-md-6 about-img">
            <img src="img/about.jpg" alt="">
          </div>
   
          <div class="col-md-6 content">
            <h2>Concept
            </h2>
            <h3>The students shall use an application to scan images related to their concerned topic and the images shall come alive and teach about themselves.
  </h3>
  <h2>Better way of learning</h2>
  <h3>The students would have a better approach to learning as this initiative makes learning a much more intersting process, and they would not feel that education is a burden rather they would enjoy it. 
  </h3>
          </div>
        </div>
      </div>
    </section><!-- #about-->

      <!-- Instructions -->
  <section id="instructions" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Instructions</h2>
            <div class="heading-line"></div>
            <p>How to use the application:A guide</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide"> 
              <div class="carousel-inner">
                  <div class="item active">
                    <div class="row">
                      <div class="col-sm-12 col-md-offset-1 col-md-6">
                        <div class="wow bounceInLeft">
                          <h4>Point your camera on the images you want to see live.</h4>
                          <p>Check the tutorial below:</p>
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-5">
                        <div class="screenshot wow bounceInRight">
                          <video>

                          </video>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h2>Scan the images below to test the application.</h2>
                  <br>
<br>
<br>
<br>
<br>
                  <div class="col-sm-6 col-md-3 wow fadeInLeft">
                      <div class="block">
                          <img src="img/1.jpeg" alt="" style="height:300px;width:250px; ">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 wow fadeInLeft">
                      <div class="block">
                      <img src="img/3.jpeg" alt="" style="height:300px;width:250px; ">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 wow fadeInLeft">
                      <div class="block">
                      <img src="img/4.jpeg" alt="" style="height:300px;width:250px; ">
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                      <div class="block">
                          <img src="img/2.jpg" alt="" style="height:300px;width:250px; ">
                      </div>
                  </div>
                  
                  </div>
              </div>
          </div>
          </div><!-- .container close -->
            <!-- Instructions -->
            
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            <div id="register" style="width:1200px;">
                <form action="login.php" method="POST" style="border:1px solid #ccc"  onSubmit = "return checkPassword(this)">
                  <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                
                    <label style="float:left;" for="full_name"><b>Full Name</b></label>
                    <input type="text" placeholder="Enter Full Name" name="name" required>

                    <label style="float:left;" for="user_name"><b>Username Name</b></label>
                    <input type="text" placeholder="Enter UserName" name="username" required>
          
          
                     <label style="float:left;" for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                
                    
                    <label style="float:left;" for="phone"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Mobile Number" name="phone" required> 
          
                    <label style="float:left;" for="birthday"><b>Date of Birth</b></label>
                    <input type="date" name="dob" required> 
          
                    <label style="float:left;" for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password1" required>
                
                    <label style="float:left;" for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="password2" required>
                    
                    
                    
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                
                    <div class="clearfix">
                      <button type="button" class="cancelbtn">Cancel</button>
                      <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                  </div>
                </form>
              </div>
            
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
   <script src="js/custom.js"></script>
   <script src="js/validatepass.js"></script>
   <script>
   var modal = document.getElementById('id01');

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
       if (event.target == modal) {
           modal.style.display = "none";
       }
   }
  </script>
  </body>
  </html>