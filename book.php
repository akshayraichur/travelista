<?php

require "dbconnect.php";
include "dbconnect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $flight = $_POST['flight'];
    $from = $_POST['from'];
    $dates = $_POST['date'];
    $destinations = $_POST['destination'];

	$query="INSERT INTO `bookflight`(`name`, `flight`, `place`, `destination`, `date`) VALUES ('$name','$flight','$from','$destinations','$dates' )";

	$result = mysqli_query($connection, $query);
	if(!$result){
		echo "Not recorded buddy try again";
	}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book a flight</title>

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
    <link rel="stylesheet" href="css/flight.css">
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
</head>
<body>

    <!-- navigation bar -->
    <nav class="navbar navbar-light bg-dark navbar-expand-md navigation-clean fixed-top mb-4 pb-4"> <!-- add change-nav for transperant nav bar -->
        <div class="container"><a class="navbar-brand text-white" href="index.php" >Travelista</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active text-white" href="#topd" style="font-size:20px;">Top destinations</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="flight.html" style="font-size:20px;">Book a Flight</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#test" style="font-size:20px;">Testimonials</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#" style="font-size:20px;">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#" style="font-size:20px;">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>



    
    <!-- Booking -->
	<header id="gtco-header" class="gtco-cover gtco-cover-md bg-dark" role="banner">
		<div class="overlay bg-dark"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box bg-dark" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World?</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Book Your Trip</h3>
											<form action="book.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Your Name</label>
														<input type="text" id="fullname" class="form-control" name="name">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Flights</label>
														<select name="flight" id="activities" class="form-control">
															<option value="">Jet Airways</option>
															<option value="">IndiGo</option>
															<option value="">SpiceJet</option>
															<option value="">AirIndia</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="from">From</label>
														<input type="text" id="from" class="form-control" name="from" >
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Destination</label>
														<select name="destination" id="destination" class="form-control">
															<option value="">Mumbai</option>
															<option value="">New Delhi</option>
															<option value="">Bangalore</option>
                                                            <option value="">Chennai</option>
                                                            <option value="">New York</option>
                                                            <option value="">Dubai</option>
                                                            <option value="">Singapore</option>
                                                            <option value="">Paris</option>
                                                            <option value="">Turkey</option>
														</select>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date Travel</label>
														<input type="date" id="date-start" class="form-control" name="date">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit" onclick="alert('Your Flight has been confirmed, please check your mail for further payment details')" name="submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

    
</body>
</html>