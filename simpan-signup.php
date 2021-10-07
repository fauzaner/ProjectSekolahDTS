<?php
//Include file koneksi ke database
include "Koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nm_user=$_POST["nm_user"];
$username=$_POST["username"];
$password=$_POST["password"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into tb_user (nm_user,username,password,level) values
		('$nm_user','$username','$password','user')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

  header("location: Index.php");  

?>