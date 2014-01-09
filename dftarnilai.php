<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">

  <?php
include "koneksi.php";
$query = mysql_query("select * from tb_nilai");
?>
</p>
  <tr>
    <td width="733" align="left" bgcolor="#FFFFFF"><label></label></td>
   </table>
  <table width="900" border="1" align="center">
     <tr>
       <td width="100" align="center" bgcolor="#999999"><strong>Nim</strong></td>
       <td width="232" align="center" bgcolor="#999999"><strong>Nama</strong></td>
       <td width="150" align="center" bgcolor="#999999"><strong>Jurusan</strong></td>
	   <td width="150" align="center" bgcolor="#999999"><strong>Makul</strong></td>
	   <td width="150" align="center" bgcolor="#999999"><strong>Nilai</strong></td>
     </tr>
     <?php
  while($row=mysql_fetch_array($query)){
  ?>
     <tr>
       <td><?php echo $row['Nim'];?></td>
       <td><?php echo $row['Nama'];?></td>
       <td><?php echo $row['Jurusan'];?></td>
	   <td><?php echo $row['Makul'];?></td>
	   <td><?php echo $row['Nilai'];?></td>
     </tr>
     <?php
  }
  ?>
   </table>
   <tr>
  	<h1 align="center"</h1> <a href="homeadmin.php">Home</a>
</form>
