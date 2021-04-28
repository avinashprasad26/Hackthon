<?php

//Database Connectio//
$conn = mysqli_connect('localhost','root','','hackathon');
if (!$conn) {
  die('Connection Failed : '.mysqli_connect_error);
}


if(isset($_POST['SignUp']))
{ 
  $name = $_POST['name'];
  $username = $_POST['username'];
  $mail = $_POST['mail'];
  $date_of_birth = $_POST['dob'];
  $pnum = $_POST['pnum'];
  $password = $_POST['password'];
  $query = "insert into signup values('$name','$username','$mail','$date_of_birth','$pnum','$password')";
  if(mysqli_query($conn,$query))
  {
    header('Location: success.html');
  }
  else{
    echo "Error: " .$sql."".mysqli_error($conn);
  }

}
  mysqli_close($conn);


 ?>
