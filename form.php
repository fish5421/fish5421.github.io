<?php
define('DB_NAME', 'fcc_form');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Ginger422737');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use' .DB_NAME . ':' .mysql_error());
}

$value = $_POST[name2];

$sql = "INSERT INTO test1 (Name) VALUES ('$value')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

$value2 = $_POST[email2];

$sql2 = "INSERT INTO test1 (Email) VALUES ('$value2')";

if (!mysql_query($sql2)) {
	die('Error: ' . mysql_error());
}

$value3 = $_POST[message2];

$sql3 = "INSERT INTO test1 (Message) VALUES ('$value3')";

if (!mysql_query($sql3)) {
	die('Error: ' . mysql_error());
}


mysql_close();
?>