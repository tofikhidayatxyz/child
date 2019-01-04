<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body bgcolor="lightblue">
<?php 
	$l = $_GET['luas_alas'];
	$t = $_GET['tinggi'];
	$V = ($l*$t);
	echo "<center><table style='color: blue; margin: 0 auto;' border='2' bgcolor='black'></center><tr><th colspan='2'>Jawabannya</th></tr>";
	echo "<tr><td>Luas Alas : </td><td> $l cm</td></tr>";
	echo "<tr><td>Tinggi : </td><td> $t cm</td></tr>";
	echo "<tr><td>Jadi Volume Prismanya Adalah :</td><td><b><u>$V cm3</b></u></td></tr>";
 ?>
 	<form action="volume3.php">
 		<tr>
 			<td>
 				<input type="submit" name="submit1" value="Kembali">
 			</td>

 	</form>
 	<form  action="home.php">
 			<td>
 				<input type="submit" name="submit2" value="Home">
 			</td>
 		</tr>	
 	</form>
</body>
</html>