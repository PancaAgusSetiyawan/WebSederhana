<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$makul = $_POST['makul'];
$nilai = $_POST['nilai'];

$query = "Insert into tb_nilai(nim,nama,jurusan,makul,nilai)VALUES('$nim','$nama','$jurusan','$makul','$nilai')";
$result = mysql_query($query);
if ($result) {
header("location:dftarnilai.php");
}
else {
echo "proses simpan gagal !.";
}

?>
</body>
</html>
