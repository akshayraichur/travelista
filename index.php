<?php
include "dbconnect.php";
require "dbconnect.php";

session_start();

if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!$connection)
    {
        echo "Error connecting with database....";
    }

    $sql = "INSERT INTO `contactus`(`ID`, `name`, `email`, `message`) VALUES ( 'NULL' ,'$name' , '$email' , '$message')";
    $result = mysqli_query($connection, $sql);

    if($result)
    {
        ?>
        <script>
            alert("Message Recorded...thank you...");
            document.location.href = "index.php";
        </script>

        <?php
    }
    else{
        echo "failed recording message..";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        
    <title>Travelista</title>
	
	    <!-- my google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

        <!-- social icons link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Bootstrap files-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <!-- Stylesheet link (css link) -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animate.css">

        <!-- Footer icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Google api key link -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" type="text/javascript"></script>

        <!-- Mapbox cdn -->
        <script src='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />

        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">



    

</head>
<body class="bg-white" >

    <!-- navigation bar -->
    <nav class="navbar navbar-dark bg-white navbar-expand-md navigation-clean fixed-top mb-4 pb-4"> <!-- add change-nav for transperant nav bar -->
        <div class="container"><a class="navbar-brand text-dark" href="#" >Travelista</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark" href="book.php" style="font-size:20px;">Book a Flight</a></li>
                    <?php
                    if(!isset($_SESSION['user'])){
                        echo "<li class='nav-item' role='presentation'><a class='nav-link text-dark' href='login.php' style='font-size:20px;'>Login</a></li>";
                        echo "<li class='nav-item' role='presentation'><a class='nav-link text-dark' href='#login' style='font-size:20px;'>SignUp</a></li>";
                    }
                    ?>
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark" href="#about" style="font-size:20px;">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-dark" href="#contact" style="font-size:20px;">Contact Us</a></li>
                    <?php
                        if(isset($_SESSION['user'])){
                            echo "<a href='logout.php'><button class='btn btn-secondary' style='font-color:black; text-decoration:none;'> Logout </button></a>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <!-- displayes welcome to travelista -->
        <div style="height: 430px;">
            <h1 class="type text-center display-4" style="font-size:70px; color: black; margin-top:20%; font-family: 'Shadows Into Light', cursive;"></h1>
        </div>

    <!-- trying out cards -->
    <div class=" pb-4 mb-4 bg-white" id="topd" >  <!-- style="background-image:url(img/i1.jpg); background-size: cover; background-attachment: fixed;" -->
            <div class="text-center display-4 mb-4 pb-4 text-dark " style="font-family: 'Rochester', cursive;"  >
                    Have a look at our top Destinations!
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="img/i8.jpg">
                                <div class="card-img-overlay">
                                    <h4 class="card-title">PARIS</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-3">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="img/i5.jpg">
                                <div class="card-img-overlay">
                                    <h4 class="card-title">NEW YORK</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-3">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="img/i10.jpg">
                                <div class="card-img-overlay">
                                    <h4 class="card-title">GREAT WALL OF CHINA</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-3">
                            <div class="card bg-dark text-white">
                                <img class="card-img" src="img/i6.jpg">
                                <div class="card-img-overlay">
                                    <h4 class="card-title">TAJ MAHAL</h4>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    
                                </div>
                            </div>
                        </div>
            
                    </div>
            
                </div>
    </div>
    <!-- Wanna login -->
    <div style="background-image: url(img/i2.jpg); background-size: cover; background-attachment: fixed; height: 400px; padding-top:10px; " class="" id="login">
        <?php
            if(!isset($_SESSION['user'])){

                echo "<div style='padding-top: 9%;'>
                     <center><h2 class='display-4 text-primary' style='font-size:30px;  ' >WELCOME TO TRAVELISTA<br>JOIN OUR COMUNITY NOW!!</h2></center>
                     <h2 class='type1 text-center display-4 img-fluid' style='color:whitesmoke;'></h2>
                     <center><a href = 'signup.php'><button class='btn btn-primary' id='button' style='width:150px; height:80px; border-radius:50px; color:black; '><h4 style='font-size:30px; font-family: PT Sans Narrow, sans-serif;'  class='display-4'>SignUp!!</h4></button></a></center>
                     </div> ";
            }
            else{
                echo "<div style='padding-top: 9%;'>
                      <h2 class='type2 text-center display-4 img-fluid' style='color:white;'></h2> 
                      </div> ";
            }
        ?>
    </div>


    <!-- Popular destinations -->
    <section id="gallery" class="py-5">
            <div class="container">
                <h1 class="text-center text-dark" id="works1" style="font-family: 'Rochester', cursive;">Popular Destinations in 2018</h1>
                <p class="text-center text-dark">Luxurious Places</p>
                <div class="row mb-4">
                    <div class="col md-3 " >
                        <a href="img/p1.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                            <div>
                                <img src="img/p1.jpg" alt="" class="img-fluid">
                                <h6 class="pop display-4 text-white" >Turkey</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col md-3">
                        <a href="img/p2.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                            <div>
                                <img src="img/p2.jpg" alt="" class="img-fluid">
                                <h6 class="pop display-4" >Hawai</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col md-3">
                        <a href="img/p3.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                            <div>
                                <img src="img/p3.jpg" alt="" class="img-fluid">
                                <h6 class="pop display-4" >Ireland</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col md-4">
                            <a href="img/p4.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                                <div>
                                    <img src="img/p4.jpg" alt="" class="img-fluid">
                                    <h6 class="pop display-4" >Thailand</h6>
                                </div>
                            </a>
                        </div>
                </div>

                <!-- next row -->
                <div class="row mb-4">
                        <div class="col md-3">
                            <a href="img/p5.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                                <div>
                                    <img src="img/p5.jpg" alt="" class="img-fluid">
                                    <h6 class="pop display-4" >Croatia</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col md-3">
                            <a href="img/p6.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                                <div>
                                    <img src="img/p6.jpg" alt="" class="img-fluid">
                                    <h6 class="pop display-4" >Bali</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col md-3">
                            <a href="img/p7.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                                <div>
                                    <img src="img/p7.jpg" alt="" class="img-fluid">
                                    <h6 class="pop display-4" >France</h6>
                                </div>
                            </a>
                        </div>
                        <div class="col md-3">
                                <a href="img/p8.jpg" data-toggle="lightbox" data-gallery="img-gallery">
                                    <div>
                                        <img src="img/p8.jpg" alt="" class="img-fluid">
                                        <h6 class="pop display-4" >Vietnam</h6>
                                    </div>
                                </a>
                            </div>
                    </div>
            </div>
        </section>

    <!-- Hotelroom views section -->
    <div class="container-fluid " style="padding-bottom:40px;">
            <div class="text-center display-4 text-dark  mt-4 pb-4 " style="font-family: 'Rochester', cursive;">Check out the scenery around our places!!!!</div>
            <div class="row">
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3">
                        <video src="video/v1.mp4" autoplay="autoplay" loop="true"></video>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3">
                        <video src="video/v2.mp4" autoplay="autoplay" loop="true"></video>
                        </div>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-6" >
                        <div class="embed-responsive embed-responsive-4by3">
                        <video src="video/v3.mp4" autoplay="autoplay" loop="true"></video>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-4by3">
                           <video src="video/v4.mp4" autoplay="autoplay" loop="true"></video>
                        </div> 
                    </div>
            </div>
    </div>


    <!-- TEstimonials -->
    <div class="testimonials-clean bg-white" id="test">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center text-dark" style="font-family: 'Rochester', cursive;">Testimonials </h2>
                    <p class="text-center text-dark " style="font-size:20px;">Our customers love us! Read what they have to say below.</p>
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Few things command more respect than hard work, integrity,dedication and the ability to follow through. These are among the many attributes
                                we experienced from start to finish when organsing our trip to india with travelista. This travel agent is an excellent listener and pays attention to detail, a lost quality in todays world.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="css/assets/img/1.jpg">
                            <h5 class="name text-white">Abhishek Tadkod</h5>
                            <p class="title">Google Employee</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Loved the overall experience with the travelista, great team and a great organiser. 5 stars for making my trip a memorable one.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="css/assets/img/3.jpg">
                            <h5 class="name text-dark">Anirudh Kulkarni</h5>
                            <p class="title">Microsoft Employee</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Its their hardwork and dedication towards the travel and customers that has brought them to this level.
                            really feels happy that I was a part of the beautiful journey that the company took me through.Couldnt expect anything else so meticulously planned  and organised.
                            Thank you for the wonderful memories I ever gathered.............</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="css/assets/img/2.jpg">
                            <h5 class="name text-dark">Akshata Herdaker</h5>
                            <p class="title">IBM Employee</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Maps -->
    <div class="mb-4 pb-4">
        <div class="text-center display-4 mt-4 pt-4 text-dark" style="font-size:50px; font-family: 'Amatic SC', cursive;">Locate us here!</div>
        <div id="map" style="width:100%; height: 450px;" ></div>
    </div>
    <!-- About the team -->
    <div class="team-clean bg-white" id="about">
        <div class="container">
            <div class="intro ">
                <h2 class="text-center text-dark">Meet the Creators</h2>
                <p class="text-center text-dark">We at Travelista provide the best travel experience to our customers. </p>
            </div>
            <div class="row people col-md-12">
                <div class="col-md-4 col-lg-4 item"><img class="rounded-circle" src="img/pp1.jpg">
                    <h3 class="name text-dark">Akshay Raichur</h3>
                    <p class="title text-dark">Co-founder and CEO</p>
                    <p class="description text-dark">After his friends calling him Raichur and not calling him by his first name, Akshay prefers to go by his somewhat simpler last name, Raichur. Raichur was raised in Belgaum, India. Now currently pursuing his degree and is passionate about photography, video production and football. In his free time he usually produces his own content for instagram and youtube.   </p>
                    <div class="social pb-4"><a href="#"><i class="fa fa-facebook-official pr-4"></i></a><a href="#"><i class="fa fa-twitter pr-4"></i></a><a href="#"><i class="fa fa-instagram pr-4"></i></a></div>
                </div>
                <div class="col-md-4 col-lg-4 item"><img class="rounded-circle" src="img/pp2.jpg">
                    <h3 class="name text-dark">Akshata Kulkarni</h3>
                    <p class="title text-dark">Co-founder and CEO</p>
                    <p class="description text-dark">While growing up, I lived in different parts of the country and I found out that travelling is what I love, that is what makes me happy, that is what makes me live the life to the fullest, and hence I came out with this Travelista. </p>
                    <div class="social pb-4"><a href="#"><i class="fa fa-facebook-official pr-3"></i></a><a href="#"><i class="fa fa-twitter pr-3"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Contact us -->
    <div class="container-fluid" >
        <div class="row">
                <div class=" col-md-6 bg-white" style=" padding-top:20px; margin-top: 30px;">
                        <div class="display-4 text-center text-dark " style="margin-bottom: 20px; font-size: 30px; font-weight: bold;" id="about">About Us</div>
                            <div class="text-dark" style=" margin-bottom: 10px;font-size: 20px;" class=" text-center " >
                            TRAVELISTA has earned the reputation for excellence and setting the performance standard for customer satisfaction by providing innovative travel web services for today's expanding ecommerce marketplace.
                            We become partners taking your business to the next level with the power of professionally-designed browser-based web interfaces. Your success and complete satisfaction is our number one priority. You will find that we are committed to nothing less than our absolute best!
                            Signature Travel Professionals share one objective: to serve the unique needs of discerning travelers. Signature Travel Network is a co-operative of the travel industry's leading retail travel agencies with more than 500 office locations who serve thousands of clients from around the world. This buying power is leveraged to deliver the best value to its clients.
                            Wherever you want to go, whatever you want to do, a Signature affiliated travel consultant will create travel experiences that are yours alone, shaped by your needs, tastes and dreams.
                            </div>
                        </div>
                <!-- Contact us form -->
                <div class="contact-clean col-md-6 bg-white "  id="contact">
            
                    <form action="#" method="POST">
                        <h2 class="display-4 text-center text-dark">Drop us a message here!!</h2>
                        <div class="form-group"><input class="form-control bg-white" type="text" name="name" placeholder="Name"></div>
                        <div class="form-group"><input class="form-control bg-white " type="email" name="email" placeholder="Email"></div>
                        <div class="form-group"><textarea class="form-control bg-white" rows="14" name="message" placeholder="Message"></textarea></div>
                        <div class="form-group"><center><button class="btn btn-primary" type="submit" name = "submit" style = "border-radius:20px; height:40px;width:70px;" > Send </button></center></div>
                    </form>
                </div>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        </div>
        </div>

    
    <!-- Footer -->
    <div class="footer-dark" >
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li><a href="#">Booking flights</a></li>
                                <li><a href="#">Booking Hotels</a></li>
                                <li><a href="#">Providing Guides</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Travelista</h3>
                            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Travelista © 2018</p>
                    <p class="copyright" style="color:whitesmoke; font-size:20px;">Made with <i class="fa fa-heart" aria-hidden="true"></i> by Akshay Raichur and Akshata Kulkarni.</p>
                </div>
            </footer>
        </div>

        


    

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/typed.js"></script>

    <!-- Script for maps -->
    <script>

        function initMap(){
            var location = {lat: 15.829934, lng: 74.48082 };
            var map = new google.maps.Map(document.getElementById("map"),{
                zoom: 4,
                center:location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    
    
    </script>

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY3gA9q_QJ_kEfwj4mbG58XP4cIC1Npxg&callback=initMap">
</script>



    
    <!-- Script for typed.js -->
    <script type="text/javascript">
        var typed = new Typed(".type"/* Write the class name for which it has to be applied */, {
            // Waits 1000ms after typing "First"
            strings: ["Welcome to Travelista", "A website every traveller needs...."],
            typeSpeed: 50,
            backSpeed: 50,
            loop: true
        });

        /* Wanna login */
        var typed = new Typed('.type2', {
            strings: ["Hello......", "Welcome back!"],
            typeSpeed: 60
        });

        var typed = new Typed('.type1', {
            strings: ["Wanna join our community??", "SignUp Now!!!!"],
            typeSpeed: 60
        });

    </script>
</body>

</html>