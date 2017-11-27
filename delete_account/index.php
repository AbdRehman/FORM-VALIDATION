<?php
include_once("../configure/config.php");

$id=$_GET['id'];
//echo "$id";

// sql to delete a record
$sql = "DELETE FROM school_table_data WHERE id=$id";

if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
    header('location: ../user_list/users_list.php');
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

?>