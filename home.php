<?php
session_start();
if(!isset($_SESSION['nomer'])||trim($_SESSION['nama'])==''){
	header('Location:login.html');
	exit();
}
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Himala - UI | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700,500,900' rel='stylesheet' type='text/css'>
<link class="cssdeck" rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-responsive.min.css" class="cssdeck">

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>	
</head>
<body>
  <div class="header" id="home">
  	  <div class="header_top">
	   <div class="wrap">
		 	     <div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" /></a>
					</div>	
						<div class="menu">
						    <ul>
						    	<li><a href="#home" class="scroll">Home</a></li>
						    	<li><a href="#dashboard" class="scroll">About Us</a></li>
								<li><a href="#features" class="scroll">Try Out</a></li>
								<li><a href="#dashboard" class="scroll">UGL Schedule</a></li>
								<li><a href="#customers" class="scroll">Support</a></li>				    
								<li class="login" >
									<div id="loginContainer"><a href="logout.php?redirect_to=<?=$index.php?>"><span>Log Out</span></a>
						               </div>
								   </li>
								<div class="clear"></div>
							</ul>
						</div>							
	    		 <div class="clear"></div>
	        </div>
	    </div>
	 </div>			      	
     <div class="main">
	 	<div class="content">	
	 		 <div class="content_top">  
	 		     <div class="wrap">                                  		
            	   <div class="banner_desc">
            		<h2>Selamat Datang, <?php echo " ".$_SESSION['nama']?></h2>
            		<hr></hr>
            		<h3>Informasi Profil</h3>
            		<table>
            			 <tr>
					    <td>Nama Lengkap</td>
					    <td><?php echo ": ".$_SESSION['nama']?></td>
					     </tr>
					  <tr>
					    <td>Alamat</td>
					    <td><?php echo ": ".$_SESSION['alamat']?></td>
					  </tr>
					  <tr>
					    <td>Email</td>
					    <td><?php echo ": ".$_SESSION['email']?></td>
					 </tr>
					   <tr>
					    <td>No. Telepon/HP</td>
					    <td><?php echo ": ".$_SESSION['telpon']?></td>
					  </tr>
					  <tr>
					    <td>Jenis Kelamin</td>
					    <td><?php echo ": ".$_SESSION['kelamin']?></td>
				  </tr>
					  <tr>
					    <td>Kelompok Ujian</td>
					    <td><?php echo ": ".$_SESSION['kelompok']?></td>
				  </tr>
				  	  <tr>
					    <td>Asal Sekolah</td>
					    <td><?php echo ": ".$_SESSION['sekolah']?></td>
				  </tr>	
				    <tr>
					    <td>No. Peserta</td>
					    <td><?php if(is_null($_SESSION['id'])){echo ": Anda belum terverifikasi";}else {echo ": ".$_SESSION['id'];}?></td>
				  </tr>
            		</table>
            		<hr></hr>
            		<input type='submit' value='Edit Profil'>
            		<?php
            		if(is_null($_SESSION['id'])){echo 
            		"<h4></br>*No. Peserta akan muncul setelah Admin berhasil memverifikasi pembayaran Anda.</h4>";
            			} else {
            				echo "<form action=tuto5.php method='POST' name='cetak'><input type='submit' value='Download Kartu Peserta' ></form>";
            			}
            		?>
            	</br>
            		</div>
            		<table border="10">
            		<tr>
                     <div class="ipad">
            		     <img src="gambar/fan.png" alt="" height='300px' width="200px" />
            	     </div>
            	 </tr>
            	     </table> 
             <div class="clear"></div>
        </div>
     </div>
          
   <div class="footer">
   	 <div class="wrap">
   	 <div class="section group example">
				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Overview</h3>
				   <ul>
				   	<li><a href="#">About Us</a></li>
				   	<li><a href="#">About TryOut</a></li>
				   	<li><a href="#">UI Goes To Lamongan</a></li>
				   	<li><a href="#">Link</a></li>
				   </ul>				   
 				</div>
 				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Partners</h3>
				   <ul>
				   	<li><a href="http://www.ui.ac.id">Universitas Indonesia</a></li>
				   	<li><a href="http://ayomasukui.com">Ayo Masuk UI</a></li>
				   	<li><a href="https://www.facebook.com/adkesmabemui">Adkesma BEM UI</a></li>
				   	<li><a href="https://www.facebook.com/groups/paguyubannusantara/">Paguyuban Nusantara</a></li>
				   				   
				   </ul>				   
 				</div>
				<div class="col_1_of_4 span_1_of_4 list">
				   <h3>Contact Us</h3>
				   <ul>
				   	<li><a href="#">085-853-002-219</a></li>
				   	<li><a href="#">himalaui@gmail.com</a></li>				   
				   	</div>	
   	 			<div class="social-icons">
					<h3><a href="#">Stay in touch</a></h3>
					   		  <ul>
							      <li><a href="https://www.facebook.com/groups/himala/" target="_blank"> <img src="images/facebook.png" alt="" /> Facebook</a></li>
							      <li class="twitter"><a href="https://twitter.com/Himala_UI" target="_blank"> <img src="images/twitter.png" alt="" /> Twitter</a></li>
							      <li class="googleplus"><a href="http://www.himalaui.webs.com" target="_blank"><img src="images/googleplus.png" alt="" />  Website</a></li>
							      <div class="clear"></div>		   
 				</div>
				<div class="clear"></div>
		    </div>
		  </div> 
       </div> 
		     <div class="copy_right">
		     	<div class="wrap">
				    <p>© 2014 IT Divison Himala - UI. All Rights Reserved</p>
		     	</div>
		   	</div>

	</body>
</html>

