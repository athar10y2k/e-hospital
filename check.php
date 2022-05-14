<?php

//         $mysql_hostname = "localhost";
// 		$mysql_user = "root";
// 		$mysql_password = "";
// 		$mysql_database = "ehospital";
// 		// Create connection
// 		// $con = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)or die("Could not connect database");
// 			// mysql_select_db($mysql_database, $con) or die("Could not select database");

//             $conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
//    if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
            

// // $sql = "INSERT INTO `appointments`(`doc_name`, `status`, `amount`, `patient_id`) VALUES ('abc','confirm','250','0')";
// // $sql = "INSERT INTO `patients`(`name`, `mobile`, `email`) VALUES ('{$_POST['name']}','{$_POST['mobile']}','{$_POST['password']}')";

// // if ($conn->query($sql) === TRUE) {
// //     echo "New record created successfully";
// //   } else {
// //     echo "Error: " . $sql . "<br>" . $conn->error;
// //   }


//

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ehospital');

// connect with database
function connect()
{
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // if (mysqli_connect_errno($connect)) {
    if (mysqli_connect_errno()) {
        die("Failed to connect:" . mysqli_connect_error());
    };

    mysqli_set_charset($connect, 'utf8');
    return ($connect);
}

$con = connect();