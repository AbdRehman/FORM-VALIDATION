<?php 

include_once("../configure/config.php");

if ($_POST['submit'] == 'Update') {	

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];
var_dump($fname);
/*echo "My name is $name and My email is $email";*/
$sql="UPDATE school_table_data SET first_name = '$fname', last_name = '$lname' , user_name = '$uname', email= '$email', password = '$password ' WHERE id = '$id'";

if (mysqli_query($db, $sql)) {

    header("Location: ../user_list/users_list.php");

} else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($db);
    echo "Eror";
}

mysqli_close($db);
}

 ?>