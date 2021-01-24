<?php
include 'inc/koneksi.php';


$con = mysqli_connect($servername, $username, $password, $database);

$username = $_POST['username'];
$password = md5($_POST['password']);

$a = "select * from admin where username = '$username' and password = '$password'";
$query = mysqli_query($con, $a);
$cek = mysqli_num_rows($query);

if($cek > 0){
    //echo "true";
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
	header("location:admin/index.php"); 
            }
            else {
                 header("location:index.php");

                }
?>