<?php

include "dbconnect.php";
require "dbconnect.php";
session_start();

if(!$connection){
    die("Connection failed" . mysqli_connect_error());
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

	$query="INSERT INTO `signup`( `Name`, `email`, `phoneno`, `password`) VALUES ('$name','$username','$phone', '$password')";

    $result = mysqli_query($connection, $query);

}



?>



<!DOCTYPE html>
<html>
<head>

    
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">


  <title>Sign up to travelista</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"   
        crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"   
          crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
          crossorigin="anonymous"></script>
  <script   src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
          crossorigin="anonymous"></script>
  <style>
    body{
        margin: 0;
        padding: 0;
        position: relative;
        font-family: 'Poor Story', cursive;
    }
  </style>








</head>
<body class="bg-dark">

        <!-- navigation bar -->
        <nav class="navbar navbar-light bg-dark navbar-expand-md navigation-clean fixed-top "> <!-- add change-nav for transperant nav bar -->
        <div class="container"><a class="navbar-brand text-white" href="index.php" >Travelista</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-white" href="#topd" style="font-size:20px;">Top destinations</a></li>
                    <?php 
                        if(isset($_SESSION['user'])){
                            echo "<li class='nav-item' role='presentation'><a class='nav-link text-white' href='login.php' style='font-size:20px;'>Login</a></li>";
                        }
                    ?>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="index.php/#test" style="font-size:20px;">Testimonials</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="blogs.html" style="font-size:20px;">Blogs</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#meet" style="font-size:20px;">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#about" style="font-size:20px;">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
            <div class="row">
                    <div class="col-lg-8">
                        <div id="slider1" class="carousel slide " data-ride="carousel">
                            <ol class="carousel-indicator">
                
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"> 
                                    <img class="d-block img-fluid"
                                        src="img/ss7.jpg" alt="first image">
                                </div>
                            <div class="carousel-item"> 
                                <img class="d-block img-fluid"
                                    src="img/ss3.jpg" alt="second image">
                                </div>
                            <div class="carousel-item"> 
                                <img class="d-block img-fluid"
                                    src="img/ss4.jpg" alt="third image">
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block img-fluid"
                                    src="img/ss9.jpeg" alt="fourth image">
                            </div>
                            <div class="carousel-item"> 
                                <img class="d-block img-fluid"
                                    src="img/ss8.jpg" alt="fourth image">
                            </div>
                        </div>
                            <a href="#slider1" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                            <a href="#slider1" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                        </div>
        
                    </div>
                    <div class="col-lg-4">
                            <div class="card mt-3 bg-dark border-dark" style="padding-bottom:04px;">
                                    <div class="card-body" style="padding-top:80px;">
                                        <div class="card-title">
                                            <h3 class="display-4 text-primary pb-3 ">Sign Up Today!</h1>
                                            <p class="text-white">Pleae fill up all the details to get started!!</p>
                                        </div>
                                        <form action="signup.php" method="post" name="signup"  >
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-dark text-white" placeholder="Name" name="name">
                                            </div>
                                            <div class="form-group">
                                                    <input type="email" class="form-control  bg-dark text-white" placeholder="Email id" name="email">
                                            </div>
                                            <div class="form-group">
                                                    <input type="text" class="form-control bg-dark text-white " placeholder="Phone Number" name="phone">
                                            </div>
                                            <div class="form-group" >
                                                    <input type="password" class="form-control  bg-dark text-white" placeholder="Password" name="password">
                                            </div>
                                            <div class="form-group">
                                                    <input type="password" class="form-control  bg-dark text-white " placeholder="Confirm Password" name="cpassword">
                                            </div>
                                            <button type="submit" class="btn btn-outline-primary btn-block" name="submit" href="login.php">Sign up</button>
                                        </form>
                                    </div>
                            </div>
                    </div>
                </div>
    
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
        $('.carousel').carousel({
      interval:3000,
      keyboard: true,
      pause:'hover',
      wrap:true
    });
    
    </script>                                
</body>
</html>




