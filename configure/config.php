<?php

$database_host = "localhost";
$database_name = "school_data";
$database_username = "root";
$database_password = "";

$db = mysqli_connect($database_host,$database_username,$database_password,$database_name);

if (mysqli_connect_errno()){

echo "Failed to connetct";

}

?>