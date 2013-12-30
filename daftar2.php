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
					<?php 
					$state=false;
					if(isset($_POST['requ'])){
						$emailn=$_POST['emailn'];
						$state=true;

					}

					?>
						<div class="menu">
						    <ul>
						    	<li><a href="#home" class="scroll">Home</a></li>
						    	<li><a href="#dashboard" class="scroll">About Us</a></li>
								<li><a href="#features" class="scroll">Try Out</a></li>
								<li><a href="#dashboard" class="scroll">UGL Schedule</a></li>
								<li><a href="#customers" class="scroll">Support</a></li>				    
								<li class="login" >
									<div id="loginContainer"><a href="#" id="loginButton"><span>Masuk</span></a>
						                <div id="loginBox">                
						                    <form id="loginForm">
						                        <fieldset id="body">
						                            <fieldset>
						                                <label for="email">Email Address</label>
						                                <input type="text" name="email" id="email">
						                            </fieldset>
						                            <fieldset>
						                                <label for="password">Password</label>
						                                <input type="password" name="password" id="password">
						                            </fieldset>
						                            <input type="submit" id="login" value="Sign in">
						                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						                        </fieldset>
						                        <span><a href="#">Forgot your password?</a></span>
						                    </form>
						                </div>
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
            		<h2>Pendaftaran Peserta Try Out Nusantara 2014</h2>
            		<hr></hr>
            		
            		<FORM enctype="multipart/form-data" ACTION="register.php" METHOD="POST" NAME="input"> 
            	<table cellpadding="10"cellspacing="10">
					 
					  <tr>
					    <td>Nama Lengkap</td>
					    <td></td>
					    <td><input name="nama" type="text" value="Nama Lengkap" onfocus="if (this.value == 'Nama Lengkap') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Nama Lengkap';}"></td>
					  </tr>
					  <tr>
					    <td>Alamat</td>
					    <td></td>
					    <td><input name="alamat" type="text" value="Alamat Lengkap" onfocus="if (this.value == 'Alamat Lengkap') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Alamat Lengkap';}"></td>
					  </tr>
					  <tr>
					    <td>Email</td>
					    <td></td>
					    <td><input name="email" type="text" value=<?php if($state==true) {echo $emailn;} else echo "E-mail"; ?> onfocus="if (this.value == 'E-mail') {this.value = '';}" onblur="if (this.value == '') {this.value = 'E-mail';}"></td>
					  </tr>
					  <tr>
					    <td>Password Login</td>
					    <td></td>
					    <td><input name="password" type="password" value="Password Login" onfocus="if (this.value == 'Password Login') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password Login';}"></td>
					  </tr>
					  <tr>
					    <td>No. Telepon/HP</td>
					    <td></td>
					    <td><input name="telpon" type="text" value="No. Telepon" onfocus="if (this.value == 'No. Telepon') {this.value = '';}" onblur="if (this.value == '') {this.value = 'No. Telepon';}"></td>
					  </tr>
					  <tr>
					    <td>Jenis Kelamin</td>
					    <td></td>
					    <td><select name="kelamin">
					    		<option value="Laki-Laki">Pilih</option>
							  <option value="Laki-Laki">Laki-Laki</option>
							  <option value="Perempuan">Perempuan</option>
							 </select>
						</td>
					  </tr>
					  <tr>
					    <td>Kelompok Ujian</td>
					    <td></td>
					    <td><select name="kelompok">
					    			<option value="IPA">Pilih</option>
								  <option value="IPA">IPA</option>
								  <option value="IPS">IPS</option>
								  <option value="IPC">IPC</option>
							</select>
						</td>
					  </tr>
					  <tr>
					    <td>Foto</td>
					    <td></td>
					    <td><input name="foto" type="file"></td>
					  </tr>
					
					   
					  <tr>
					    <td></td>
					    <td></td>					
					    <td><input type="submit" name="Daftar" value="Daftar"/></td>
					    </div>
					  </tr>


				</table>
			</FORM>
		</div>

 					
           	
            		
                </div>  
                     <div class="ipad">
            		     <img src="images/ipad2.png" alt="" />
            	     </div>
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

