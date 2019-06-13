
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!--<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="../js/jquery-1.10.2.min.js"></script>

<link href="../css/zein.css" rel='stylesheet' type='text/css' />
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
														
																<form action="" method="post">
																		<input type="text" class="text" placeholder="username" value="" name="username">
																		<input type="password" placeholder="Password" name="password" value="">
																		<div class="submit"><input type="submit" name="login" value="Login" ></div>
																		<div class="clearfix"></div>
																		
																		
																	</form>
																	<?php
																	include ('koneksi.php');
																	if (isset($_POST['login'])) {
																		$user=$_POST['username'];
																		$pass=md5($_POST['password']);
																		$query=mysql_query("SELECT * FROM user WHERE username ='$user' AND password='$pass'");
																			$hasil=mysql_num_rows($query);
																			$data=mysql_fetch_array($query);
																			if ($hasil==1) {
																					session_start();
																					$_SESSION['user']=$data['username'];
																					$_SESSION['level']=$data['level'];
																					header('location:index.php');
																			}
																			else
																				echo "<script>alert('Username dan Password Tidak Valid')</script>";
																	}
																	?>
														</div>

														
													</div>
													
												<!--//login-top-->
										   </div>
						
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
															<a class="read fourth" href="../index.php">Return to Home</a>
															</div>
										   <p>&copy 2017 CampOfThinker . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">GZeinNumer</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>