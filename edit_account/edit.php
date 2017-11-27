
<?php
include_once("../configure/config.php");
$id = $_GET["id"];

$sql = "SELECT * FROM school_table_data WHERE id='$id'";

$edit = mysqli_query($db, $sql);
$data=mysqli_fetch_assoc($edit);

mysqli_close($db);
  ?>

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
	<div class="wrapper">
		<div class="sign_up_content">
			<h2>SIGN UP</h2>
			<form action="edit_handler.php" method="POST">
				<fieldset>
				<input type="text" name="firstname" value="<?php echo $data['first_name'] ?>" placeholder="First Name" required=""/>
				<input type="text" name="lastname" value="<?php echo $data['last_name'] ?>" placeholder="Last Name" required=""/>
				<input type="text" name="username" value="<?php echo $data['user_name'] ?>" placeholder="User Name" required=""/>
				<input type="email" name="email" value="<?php echo $data['email'] ?>" placeholder="User Email" required=""/>
				<input type="password" name="password" value="<?php echo $data['password'] ?>" placeholder="Password" required=""/>
      			<input type="hidden" id="lname" name="id" required="" value="<?php echo $data['id'] ?>"/>

			
				<div class="reg_btn">
<!-- 					<input type="submit" name="submit" value="Register"/>
 -->				<input type="submit" value="Update" name="submit" class="input-btn">

				</div>
				</fieldset>
				</form>
		</div>
	</div>
</body>
</html>

