
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
    
    <section id="loginform">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="wrapper">
              <form action="login_ac.php" method="post">       
                  <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
                  <hr class="colorgraph"><br>
                  
                  <input type="text" class="form-control" name="username" placeholder="Username" required="" autocomplete="OFF" />
                  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>          
                 
                  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>        
              </form>     
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