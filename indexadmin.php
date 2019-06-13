<?php
session_start(); //untuk membuat tampilan awal untuk login pada indeks
if(!isset($_SESSION['user']))
	header('location:login.php');

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Camp Of Thinker</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/screenstyle.css">
	<link rel="stylesheet" type="text/css" href="css/homestyle.css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="icon" type="image/png" href="img/cot.png"/>
</head>
<body>
	<nav>
		<?php include('page/navigasi_3.php'); ?>
	</nav>
	<article>
		<section class="satu-dua">
			<?php include('page/page_home.php'); ?>
		</section>
	</article>
</body>
</html>
