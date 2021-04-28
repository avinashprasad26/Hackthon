<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8549de214a.js" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
        $(".hamburger").click(function(){
          $(".wrapper").toggleClass("collapse");
        });
      });
    </script>

  </head>

  <body style="background-image: linear-gradient(to right, rgb(194, 194, 163), rgb(194, 214, 214));">

    <!-- <div class="wrapper">
      <div class="top_navbar">
        <div class="hamburger">
          <div></div>
          <div></div>
          <div></div>
        </div>

        <div class="top_menu">
          <div class="logo">
            <?php
              if(isset($_SESSION["user_name"])){
              echo"Welcome to DigiLearn ".$_SESSION["user_name"];}
            ?>
          </div>
        </div>
      </div> -->

      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">DIGILEARN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Admin_data1.php"><b>Profile</b><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Generations</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="elementary.html"><b>Elementary School Group</b></a>
                <a class="dropdown-item" href="middle.html"><b>Middle School Group</b></a>
                <a class="dropdown-item" href="high.html"><b>High School Group</b></a>
                <a class="dropdown-item" href="corporate.html"><b>Corporate Group</b></a>
                <a class="dropdown-item" href="elder.html"><b>Elder Group</b></a>
              </div>
            </li>
            <form action="Admin_login.php" method="post">
              <li class="nav-item">
                  <a class="nav-link" href="login.html"><b>LogOut</b></a>
              </li>
            </form>
              
            
          </ul>
        </div>
      </nav>

      <?php
             $conn = mysqli_connect('localhost','root','','hackathon');
             if (!$conn) {
               die('Connection Failed : '.mysqli_connect_error);
             }
             $v= $_SESSION['user_name'];
             $query ="select * from signup where username='$v'";

             $data=mysqli_query($conn,$query);
             $result=mysqli_fetch_assoc($data);
           ?>

<div class="container d-flex justify-content-center" style="margin-top:15px">
  <div class="item">
    <form class="form" action="index.html" method="post">
      <h1 style="text-align:center">User Profile</h1><br><br>
      <label for="" class="label" style="font-size:19px;"><b>Name :</b></label>
      <input type="text" class="form-control" style="width: 312px;" name="first_name" placeholder="<?php echo "   ".$result['name'] ?>"><br>
      <label for="" class="label" style="font-size:19px;"><b>Username :</b></label>
      <input type="text" class="form-control" style="width: 312px;" name="first_name" placeholder="<?php echo "   ".$result['username'] ?>"><br>
      <label for=""class="label" style="font-size:19px;"><b>E-Mail :</b></label>
      <input type="text" class="form-control" style="width: 312px;" name="first_name" placeholder="<?php echo "   ".$result['mail'] ?>"><br>
      <label for="" class="label" style="font-size:19px;"><b>DOB :</b></label>
      <input type="text" class="form-control" style="width: 312px;" name="first_name" placeholder="<?php echo "   ".$result['dob'] ?>"><br>
      <label for="" class="label" style="font-size:19px;"><b>Phone Number :</b></label>
      <input type="text" class="form-control" style="width: 312px;" name="first_name" placeholder="<?php echo "   ".$result['pnum'] ?>">

    </form>

  </div>

</div>











    </div>

  </body>
</html>
