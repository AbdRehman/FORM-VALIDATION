<!DOCTYPE HTML>
<html>
<head>
	<title>LOG IN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
	<div class="wrapper">
		<div class="sign_in_content">
			<h2>Please identify yourself</h2>
			<form action="sign_in_handler.php" method="POST">
			<fieldset>
				<label>User Email</label>
				<input type="email" name="E-mail" placeholder="" required=""/>
				<label>Password</label>
				<input type="password" name="Pass-word" placeholder="" required=""/>				
				<div class="log_in_btn">
					<input type="submit" name="submit" value="Log In"/>
				</div>
            </fieldset>
		    </form>

		</div>
	</div>
</body>
</html>

