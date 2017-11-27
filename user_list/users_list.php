<?php

include_once("../configure/config.php");


$sql = "SELECT id, first_name, last_name, user_name, email, password FROM school_table_data";
$result = $db->query($sql);

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>User Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<div class="wrapper">

<div class="tables">
	<h2>User List Form</h2>
  <div class="log_out_btn">
  <a href="../log_out/log_out.php">Log out</a>
</div>
<table>
  <tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>User Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

<tr>

<?php

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        echo '<tr><td>'.$row["id"] . '</td><td>' . $row["first_name"] . '</td><td>' . $row["last_name"] . '</td><td>' . $row["user_name"] . '</td><td>' . $row["email"] . '</td><td><a href="../edit_account/edit.php?id= '. $row ["id"].'">Edit</a></td><td><a href="../delete_account/index.php?id= '. $row["id"].' ">Delete</a></td></tr>';
    }
} else {
    echo "0 results";
}


?>
</tr>
  
</table>

</div>
</div>
</body>
</html>