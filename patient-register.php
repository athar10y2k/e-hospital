<?php
require "check.php";

// register
// $sql = "INSERT INTO `patients`(`name`, `mobile`, `email`) VALUES ('{$_POST['name']}','{$_POST['mobile']}','{$_POST['password']}')";
// if ($con->query($sql) === TRUE) {
// echo "New record created successfully";
// } else {
// echo "Error: " . $sql . "<br>" . $con->error;
// }

// login
$sql1 = "SELECT * FROM `patients` WHERE `mobile`='{$_POST['mobile']}' AND `name`='Yash'";

$res = $con->query($sql1);
if ($res->num_rows > 0) {

    while($row = $res->fetch_assoc()) {
        echo $row['name'];
        echo "<br/>";
        echo $row['mobile'];
        echo "<br/>";
        // echo "11";
    }
}
// else error