<?php require_once('../Connections/connection.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO bahasac_page3 (`no`, nama, email, komentar, tanggal, website) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['no'], "int"),
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['komentar'], "text"),
                       GetSQLValueString($_POST['tanggal'], "int"),
                       GetSQLValueString($_POST['website'], "text"));

  mysql_select_db($database_connection, $connection);
  $Result1 = mysql_query($insertSQL, $connection) or die(mysql_error());

  $insertGoTo = "bahasac_page3.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_connection, $connection);
$query_bahasac_page3 = "SELECT * FROM bahasac_page3";
$bahasac_page3 = mysql_query($query_bahasac_page3, $connection) or die(mysql_error());
$row_bahasac_page3 = mysql_fetch_assoc($bahasac_page3);
$totalRows_bahasac_page3 = mysql_num_rows($bahasac_page3);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Camp Of Thinker</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<link rel="stylesheet" href="../css/screenstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/asidestyle.css"/>
	<link href="css/font-awesome.min.css" rel="../stylesheet"/>
	<link rel="icon" type="image/png" href="../img/cot.png"/>
</head>
<body>
	<nav>
		<?php include('../page/navigasi.php'); ?>
	</nav>
	<article>
		<?php include('../page/visited_bahasac.html'); ?>
		<section class="satu-dua">
   	  		<section class="isi">
				<?php include('../part/bahasac_page3_isi.html'); ?>
                <?php include('../part/bahasac_page3_komentar.php'); ?>
            </section>
                <?php include('../page/new_2.html'); ?>
		
	</article>
</body>
</html>
<?php
mysql_free_result($bahasac_page3);
?>
