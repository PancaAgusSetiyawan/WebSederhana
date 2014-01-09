
<body>
<?php
	session_start();
include "koneksi.php";

$userid = $_POST['userid'];
$psw = $_POST['psw'];
$op = $_GET['op'];

	if($op=="in"){
		$cek = mysql_query("select * from tb_user where userid='$userid' and pass = '$psw'");
		if(mysql_num_rows($cek)==1){
			$c = mysql_fetch_array($cek);
				$_SESSION['userid']=$c['userid'];
				$_SESSION['level']=$c['level'];
			if($c['level']=="Admin"){
				header("location:homeadmin.php");
			}else if ($c['level'] == "user"){
				header("location:homeuser.php");
			}
		}else{
			die("Password salah <a href=\"javascript:history.back()\">kembali</a>");
		}
	}else if($op=="out"){
		unset($_SESSION['userid']);
		unset($_SESSION['level']);
		header("location:index.php");
	}
?>
</body>
</html>
