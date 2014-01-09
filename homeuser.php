<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['userid'])){
die("Anda belum login");}
//cek level user
if($_SESSION['level']!="user"){
die("Anda bukan user");}
?>

<html>
<head><title>Halaman User</title></head>
<body style="background-color:#CCCCCC">
<?php 
echo "<h3>Welcome ".$_SESSION['userid']."</h3>";
?>
<h1 style="text-align:center>"Menu :</h1>
<a href=daftarnilaiuser.php>Tampil</a> |
<a href=log.php?op=out>Log Out</a>
</body>
</html>
