<?php
$servername = "babangmimin.com";
$database = "u7788296_babangmimin";
$username = "u7788296_ucp";
$password = "yoyoyo123321yoyoyo";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}else{
//echo "Connected successfully";
}

?>