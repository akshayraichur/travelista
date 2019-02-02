<?php
include "dbconnect.php";
require "dbconnect.php";

if(!$connection){
    die("Connection failed" . mysqli_connect_error());
}


if(isset($_POST['submit'])){
    
    $username = $_POST['name'];
    $password = $_POST['password'];

  $query="select * from signup where email='$username' and password = '$password'";


  if(mysqli_query($connection, $query)){
    echo "Hi ";
    
  }

}


?>