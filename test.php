<?php
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost","root","", "gudang");
if($host){
      echo "koneksi host berhasil.<br/>";
}else{
      echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan 
?>