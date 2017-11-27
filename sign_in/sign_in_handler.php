<?php

include_once("../configure/config.php");


if (isset($_POST['submit'])){

$email = $_POST['E-mail'];
$password = $_POST['Pass-word'];

$query = "SELECT * FROM school_table_data WHERE email = '$email' AND password = '$password'";
// var_dump($query);
	$result = mysqli_query($db ,$query);
		if (mysqli_num_rows($result) > 0)
		{
			echo "User Log in Successfully";
    header("Location: ../user_list/users_list.php");
		} 
		else{
			echo "Errorr";
		}

}


?>



<!-- https://stackoverflow.com/questions/9475350/prevent-duplicate-email-address-in-php-sign-up-form -->