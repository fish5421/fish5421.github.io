<!-- 
// define('DB_NAME', 'fcc_form');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'Ginger422737');
// define('DB_HOST', 'localhost');

// $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

// if (!$link) {
// 	die('Could not connect: ' . mysql_error());
// }

// $db_selected = mysql_select_db(DB_NAME, $link);

// if (!$db_selected) {
// 	die('Can\'t use' . DB_NAME . ': ' . mysql_error());
// }

// $value = $_POST[name2];
// $value2 = $_POST[email2];
// $value3 = $_POST[message2];


// $sql = "INSERT INTO test1 (name2, email2, message2) VALUES ('$value', '$value2', '$value3')";

// if (!mysql_query($sql)) {
// 	die('Error: ' . mysql_error());
// }

// mysql_close(); -->

<?php
$servername = "localhost";
$username = "root";
$password = " ";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>