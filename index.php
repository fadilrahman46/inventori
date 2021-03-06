<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Barang yang menjadi Milik Negara</title> </head>

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

</head>

<body>

<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0" style="background-color: #6751b7">
        <div class="py-3 text-center" style="margin-top: 15px; color: white;">
                    <h3>Aplikasi Barang Yang Menjadi Miliki Negara</h3>
                     
                </div>
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                
                <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="icon.png" height="270" width="300" style="border-radius: 5px"> </div>
                </div>
            </div>
            <div class="col-lg-6 py-5" style="margin-top: -30px;">
                <div class="card2 card border-0 px-4 py-5">
                    <form action="login.php" method="post">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username</h6>
                        </label> <input class="mb-4" type="text" name="username" placeholder="Masukkan Username"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Masukkan Password"> </div><br>
               
                    <div class="row mb-3 px-3"> <input type="submit" class="btn btn-blue text-center" name="login" value="Login" style="background-color: #28156f; color: white"></div>
                    
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
include 'inc/koneksi.php';
?>