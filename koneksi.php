
	<?php  

	$con = mysql_connect('host','root',' ','data')

	 include "koneksi.php";
	 if(isset($_POST['submit'])){
	 	$Nama=$_POST['Nama'],
	 	$Nim=$_POST['Nim'],
	 	$Nama=$_POST['Gambar']
	 	$query = ("INSERT into data (Nama, Nim, Gambar) VALUES ('$Nama', '$Nim', '$Gambar')");
	 	$result = mysql_query($query),

	 }


	?>
