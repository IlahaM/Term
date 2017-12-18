
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">	
    <title>Signin</title>	
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
<?php include '../connect.php';?>

    <div class="container">
<a href="../index.php"> Home</a> 
</div>
<div class = "container">
<a href="../register/register.php"> Register</a>
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input autocomplete="off" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label  for="inputPassword" class="sr-only">Password</label>
        <input autocomplete="off" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
