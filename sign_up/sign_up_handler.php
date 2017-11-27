<?php

include_once("../configure/config.php");
?>


<?php

if ($_POST['submit'] == 'Register')
{

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

/*echo "My name is $name and My email is $email";*/

$sql = "INSERT INTO school_table_data (first_name, last_name, user_name, email, password) VALUES ('$fname', '$lname', '$uname', '$email','$password')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: ../sign_in/index.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

mysqli_close($db);

}
?>