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

   <?
       
        $onnect=mysql_connect("localhost","root","Ginger422737") or die("Unable to Connect");
       
        mysql_select_db("fcc_form") or die("Could not open the db");
       
        $showtablequery="SHOW TABLES FROM fcc_form";
       
        $query_result=mysql_query($showtablequery);
       
        while($showtablerow = mysql_fetch_array($query_result))
        {
        echo $showtablerow[0]." ";
        } 
   ?>