<?php
require 'koneksi.php';

if(isset($_POST['Daftar'])){
$nama = $_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$password=$_POST['password'];
$telpon=$_POST['telpon'];
$kelamin=$_POST['kelamin'];
$kelompok=$_POST['kelompok'];
 
$nama_photo=$_FILES['foto']['name'];
$type = $_FILES['foto']['type'];
$ukuran=$_FILES['foto']['size'];

if(empty($nama) || empty($alamat) || empty($email) || empty($password) || empty($telpon)||empty($kelamin)||empty($kelompok)){
		echo "Maaf, Form belum lengkap!! <a href=index.php> Silahkan ulangi</a>";
		header('Location:daftar2.php')
	}
else{  
		$query_email=mysql_query("select * from peserta where email='$email'");
		$cek=mysql_num_rows($query_email);
		if($cek>0){
			echo "Maaf, Email sudah dipakai!! <a href=index.php> Silahkan ulangi</a>";
			header('Location:daftar2.php');
	}	else{
			if($type != "image/gif"  &&  $type != "image/jpg"  && $type != "image/jpeg" && $type != "image/png") {
				echo "File Yang Di izinkan Hanya jpg,jpeg,png,gif!! <a href=index.php> Silahkan ulangi</a>";
				header(Location:'daftar2.php')
			}else{
				if($ukuran>1000000){
					echo "File Yang Di izinkan Hanya berukuran kurang dari 1MB!! <a href=index.php> Silahkan ulangi</a>";
				}else{
					$uploaddir='./photo/';
					$rnd=date(His);				
					$nama_file_upload=$rnd.'-'.$nama_photo;
					$alamatfile=$uploaddir.$nama_file_upload;

}
$sql="INSERT INTO peserta (nama, alamat, email, password, telpon, kelamin, kelompok, foto)
VALUES
('$nama','$alamat','$email','$password','$telpon','$kelamin','$kelompok', '$nama_file')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error($conn));
  
  }
else{
header("Location: sukses-reg.php"); 
}
mysql_close($conn);
exit;
}

?>
