<?php
// config.php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'bukutamu1';
$conn = mysqli_connect($dbhost, $dbuser , $dbpass) or die('Error connecting to mysql');
mysqli_select_db($conn, $dbname);
?>