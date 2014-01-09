<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body bgcolor="#CCCCCC">
<?php
	session_start();
	//cek apakah user sudah login
	if(!isset($_SESSION['userid'])){
		die("Anda belum login"); //jika belum login jangan dilanjt
	}
	//cek level user
	if($_SESSION['level'] != "Admin"){
		die("Anda bukan user1");
	}
?>
 <?php echo "<h3>Welcome ".$_SESSION['userid']."</h3>";
 ?><p>Menu:</p>
 	<a href="homeadmin.php">Home</a> |
	<a href="dftarnilai.php">Daftar Nilai</a> |
	<a href="input.php">Input</a> |
	<a href="log.php?op=out">Log Out</a>
</body>
</html>