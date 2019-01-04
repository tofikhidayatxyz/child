<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body bgcolor="lightblue">
<?php 
	$p = $_GET['panjang'];
	$l = $_GET['lebar'];
	$t = $_GET['tinggi'];
	$V = ($p*$l*$t);
	echo "<center><table style='color: blue; margin: 0 auto;' border='2' bgcolor='black'></center><tr><th colspan='2'>Jawabannya</th></tr>";
	echo "<tr><td>Panjang : </td><td> $p cm</td></tr>";
	echo "<tr><td>Lebar : </td><td> $l cm</td></tr>";
	echo "<tr><td>Tinggi : </td><td> $t cm</td></tr>";
	echo "<tr><td>Jadi Volume Baloknya Adalah :</td><td><b><u>$V cm3</u></b></td></tr>";
 ?>
 	<form action="volume2.php">
 		<tr>
 			<td>
 				<input type="submit" name="submit1" value="Kembali">
 			</td>
 	</form>
 	<form action="home.php">
 			<td>
 				<input type="submit" name="submit2" value="Home">
 			</td>
 		</tr>
 	</form>

</body>
</html>