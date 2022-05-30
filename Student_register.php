<?php

if(isset($_POST['S_name']) && isset($_POST['S_password'])){
	$S_name = $_POST['S_name'];
	$S_email = $_POST['S_email'];
	$S_password = $_POST['S_password'];
	$S_Id = $_POST['S_Id'];
	$college = $_POST['college'];
}
	// Database connection
	$conn = new mysqli('localhost','root','','registration');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into studentregister(S_name , S_email, S_password, S_Id, college) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $S_name, $S_email, $S_password, $S_Id, $college);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="login.css">
    <title>Student Registration</title>
</head>
<body>
<form action="" method="post">
    
      <div class="container">
        <div class="card">
          <div class="inner-box" id="card">
            <div class="card-front">
      <h2>Student Register</h2>
      <p>Please fill in this form to create an account.</p>
      
      <div class="signup-classic">    
      <form class="form-signin" method="POST" name="registration">
        <div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Student name</span>
	        <input type="text" name="S_name" id="S_name" class="form-control" placeholder="name" required>
	    </div>
		<br>
        <label for="inputEmail" class="sr-only">Student Email </label>
        <input type="email" name="S_email" id="S_email" class="form-control" placeholder="Email address" required autofocus>
        <br>
		<br>
        <label for="inputPassword" class="sr-only">Student Password</label>
        <input type="password" name="S_password" id="S_password" class="form-control" placeholder="Password" required>
        <br>
        <br>
		<div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Student Id</span>
	        <input type="text" name="S_Id" id="S_Id" class="form-control" placeholder="name" required>
	    </div>
		<br>
        <div class="input-group">
	    <span class="input-group-addon" id="basic-addon1">College name</span>
        <input type="text" name="college" id="college" class="form-control" placeholder="college" required>
        </div>
        <br>
        
      <input name="submit" type="submit" value="Register" />
      <p>Already have an account? <a href="Student_login.php">Sign in</a>.</p>
</form>
    </div>
    </div>
    </div>
    </div>
  </form>
</body>
</html>
<!--<html>
<head>
<title>Registration</title>
</head>
<body>
<div class="signup">
  <div class="signup-connect">
    <h1>Create your account</h1>    
  </div>
  <link rel="stylesheet" href="Styles1.css">
<div class="signup-classic">    
      <form class="form-signin" method="POST" name="registration">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Faculty register name</span>
	        <input type="text" name="F_name" id="F_name" class="form-control" placeholder="name" required>
	    </div>
        <label for="inputEmail" class="sr-only">Faculty Email </label>
        <input type="email" name="F_email" id="F_email" class="form-control" placeholder="Email address" required autofocus>
        <br>
		<br>
        <label for="inputPassword" class="sr-only">Faculty Password</label>
        <input type="password" name="F_password" id="F_password" class="form-control" placeholder="Password" required>
        <br>
		<div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Faculty Id</span>
	        <input type="text" name="F_Id" id="F_Id" class="form-control" placeholder="name" required>
	    </div>
		<br>
        <div class="input-group">
	    <span class="input-group-addon" id="basic-addon1">College name</span>
        <input type="text" name="college" id="college" class="form-control" placeholder="college" required>
        </div>
        <br>
        <input name="submit" type="submit" value="Register" />
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
</body>
</html>
-->