<!DOCTYPE HTML>
<html>
<head>
	<title>SIGN UP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>

<?php
include_once("../configure/config.php");
?>

<?php
// define variables and set to empty values

// $nameErr = $emailErr = $PassErr = "";
// $name = $email = $PassErr = "";

$firstname = $lastname = $usernameErr = $emailErr = $passwordErr = "";
$email = $error = "";

if(isset($_POST['submit'])){

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

 // if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
 //      echo '<b>Please fill out all fields.</b>';
 //    }

  if (empty($_POST["firstname"])) {
    $firstname = "First Name is Required";
  } else {
    $fname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $firstname = "Only letters and white space allowed"; 
    }
  }


    if (empty($_POST["lastname"])) {
    $lastname = "Last Name is Required";
  } else {
    $lname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lastname = "Only letters and white space allowed"; 
    }
  }


  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed"; 
    }
  }


    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }



    if(empty($error)){


 $query_verify_email = "SELECT * FROM school_table_data  WHERE email ='$email'";


    $result_verify_email = mysqli_query($db, $query_verify_email);

    if (mysqli_num_rows($result_verify_email) == 0) { // IF no previous user is using this email .



$sql = "INSERT INTO school_table_data (first_name, last_name, user_name, email, password) VALUES ('$fname', '$lname', '$uname', '$email','$password')";


        if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../sign_in/index.php");

} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

}

else{
	echo "Email Already logged in";
}

mysqli_close($db);
}

}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>

	<div class="wrapper">
		<div class="sign_up_content">
			<h2>SIGN UP</h2>
			<form action="" method="POST">

				<fieldset>
				<input type="text" name="firstname" placeholder="First Name" />
				<span class="error">* <?php echo $firstname;?></span>
				<input type="text" name="lastname" placeholder="Last Name" />
				<span class="error">* <?php echo $lastname;?></span>
				<input type="text" name="username" placeholder="User Name" value="" />
				<span class="error">* <?php echo $usernameErr;?></span>
				<input type="email" name="email" placeholder="User Email" />
     			<span class="error">* <?php echo $emailErr;?></span>
				<input type="password" name="password" placeholder="Password" />
				<input type="hidden" id="id" name="id" required="" value="">

			
				<div class="reg_btn">
<!-- 					<input type="submit" name="submit" value="Register"/>
 -->				<input type="submit" value="Register" name="submit" class="input-btn">

				</div>
				</fieldset>
				</form>
		</div>
	</div>
</body>
</html>

