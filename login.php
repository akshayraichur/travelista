<?php
session_start();
if(isset($_SESSION['user'])){
  header("Location :index.php");
}

include "dbconnect.php";
require "dbconnect.php";


if(isset($_POST['submit']))
{
  $username = $_POST['email'];
  $password = $_POST['password'];

  if(!$connection)
  {
    echo "Error connecting to the database";
  }

  $sql = 'SELECT * FROM signup WHERE email ="'.$username.'" AND password = "'.$password.'"'; 
  $result = mysqli_query($connection, $sql);
  $numrows = mysqli_num_rows($result);

  $_SESSION['user'] = $username;

  if($numrows > 0)
  {
    ?>
    <script>
      alert("Login successful!");
      document.location.href = 'index.php';
    </script>
    <?php
  }
  else{
    echo "Invalid username";
    ?>
    <!-- <script>
      alert("Invalid username or password!");
      document.location.href = 'login.php';
    </script> -->
    <?php
  }

}


?>



<!DOCTYPE html>
<html>
<head>
  <title>login to travelista</title>
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
  <script type="text/javascript" src="lvalidate.js"></script>

  <style>
    body{
      background: url(img/img01.jpeg);
      background-size: cover; 
      background-position: center center;
    }
    .card-img-top{
      height:200px;
      width:170px;
    }
    .card{
      opacity:0.8;
      background:rgba(255,255,230,0.9)
  }
   .form-control{
      text-decoration-color: solid black;
      border-bottom-color: black;
      border-top-color: aliceblue;
      border-left-color: aliceblue;
      border-right-color: aliceblue;

    }


  
  </style>
</head>
<body>
  <div class="main-section">
    <div class="start">
      <div class="container">
        <div class="row">
            <div class="col-sm-5 m-auto">
              <div class="card mt-5 bg-light text-dark ">
               
                <div class="card body p-4 red">
                    <img src="img/lo4.png" class="card-img-top align-self-center">
                  <h1 class="display-4 align-self-center mb-3">Log in</h1>
                  <p class=" h4 align-self-center">Hello,Get on board </p>
                  <form  name="loginform" method="POST">
                    <div class="form-group text-dark">
                      <input type="email" class="form-control" placeholder="Email id" name="email">
                    </div>
                    <div class="form-group text-dark">
                      <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="checkbox text-dark">
                     <label for="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block " name="submit">Log in</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>