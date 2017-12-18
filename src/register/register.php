<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form in PHP and Mysql, Sign up Form with PHP and Mysql</title>
<meta name="description" content="This tutorial explains that how to create a simple registration form in PHP and mysql with Javascript validation for input and store input data in database."/>
<meta name="keywords" content="Registration Form in PHP and Mysql with Javascript validation, Registration Form with Javascript validation, Sign up, Registration Form, Sign up Form with Javascript validation, Registration Form in PHP"/>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="validate.js"></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../signin/signin.css" rel="stylesheet"> <!-- signin fodlerini deyismisem -->

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<style >
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>
</head>
<body>



 <div class="container">
<a href="../index.php"> Home</a>
      <form class="form-signin" name="frmregister" action="registerAction.php" method="post" onSubmit="return validate();">
        <h2 class="form-signin-heading">Register</h2>


		<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="name" id="name">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email" id="email">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password" id="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <div class="btn-group" role="group" aria-label="...">
        <button class="btn btn-lg btn-primary " type="submit" name="signUp" value="Submit" alt="Submit">Sign Up</button>
	
        <button class="btn btn-lg btn-secondary " type="submit">Reset</button>
</div>

      </form>

    </div> 
    


	
</body>
</html>



<!DOCTYPE html>
<html lang="en">
  <head>
  </head>


  <body>

