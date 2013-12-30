<?php
session_start();
require 'koneksi.php';
if(!isset($_POST['emaillogin'])&&!isset($_POST['passwordlogin'])){
	header("Location:login.html");
}
if(isset($_POST['login'])){
	$email=$_POST['emaillogin'];
	$password=$_POST['passwordlogin'];	

	
	
	$sql="SELECT * FROM peserta WHERE email='$email' AND password='$password'";
    $result = mysql_query($sql);
  	$rowcount = mysql_num_rows($result);
  	$data = mysql_fetch_array($result, MYSQL_ASSOC);
  		if ($rowcount == 1) {
  			session_regenerate_id();
			$_SESSION['nomer'] = $data['nomer'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['alamat'] = $data['alamat'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['password'] = $data['password'];
			$_SESSION['telpon'] = $data['telpon'];
			$_SESSION['kelamin'] = $data['kelamin'];
			$_SESSION['kelompok'] = $data['kelompok'];
			$_SESSION['sekolah'] = $data['sekolah'];
			$_SESSION['id'] = $data['id'];
			$_SESSION['foto'] = $data['foto'];
			
			session_write_close();
			header('Location: home.php');
			}
		else
			{
			header('Location: fail.php');
			}
}
?>