<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form in PHP and Mysql, Sign up Form with PHP and Mysql</title>
<meta name="description" content="This tutorial explains that how to create a simple registration form in PHP and mysql with Javascript validation for input and store input data in database."/>
<meta name="keywords" content="Registration Form in PHP and Mysql with Javascript validation, Registration Form with Javascript validation, Sign up, Registration Form, Sign up Form with Javascript validation, Registration Form in PHP"/>
 

</head>
<body>
<?php  

include "dbCOnfig.php";

$link = mysqli_connect("localhost", "root", "", "testdb");

if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO BS_MEMBERS (name, email, password) VALUES (?, ?, ?)";

if($stmt = mysqli_prepare($link, $sql))
{
	// binding variables
	mysqli_stmt_bind_param($stmt, "sss", $name1, $email1, $password1);
	
	// set parametrs
	$name1 = $_REQUEST['name'];
	$email1 = $_REQUEST['email'];
	$password1 = $_REQUEST['password'];
	
	if(mysqli_stmt_execute($stmt)){
		echo "Inserted !!!";
	}else {
		echo "Error!!!" . mysqli_error($link);
	}
}else{
	echo "Could not prepare query !!: $sql. " . mysqli_error($link);
}

mysqli_stmt_close($stmt);

mysqli_close($link);


?>

<div class="thanks-text">

<div class="tut"> <a href="../signin/signin.php"> -> Go to the Sign In page <- </a> </div>
</div>
<div class="tut"> <a href="../index.php"> -> Go to the Home Page <- </a> </div>
</div>

</body>
</html>

