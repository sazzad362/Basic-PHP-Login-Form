<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Demo  Trial Form </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
<?php 

//User login kora ache kina ta dekhlam
include ('sesson_check.php');

//Database conntect korlam
include ('config.php');

//Get data from Sesson
$ses_username = $_SESSION["username"];

//Session er username er malik er sob data niye aslam

$user_data  = mysqli_query($dbcon, "SELECT * FROM users WHERE username = '$ses_username' ");

//Data gula k ekta array te dukailam
$userinfo = mysqli_fetch_array($user_data);

//Array theke info ber kore variable a nilam
$username = $userinfo["username"];
$name = $userinfo["name"];

?>
    <section id="loginform">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="wrapper">
              <h1>Well come ! <span><?php echo $username ; ?></span></h1>    
              <h1>Name : <?php echo $name ; ?></h1>
              <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>