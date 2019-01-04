<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body bgcolor="lightblue">
<?php 
	$j = $_GET['jari_jari'];
	$t = $_GET['tinggi'];
	$l = ((22/7) * $j *$j);
	$V = ((1/3) * $l * $t);

	echo "<center><table style='color: blue; margin: 0 auto;' border='2' bgcolor='black'></center><tr><th colspan='2'>Jawabannya</th></tr>";
	echo "<tr><td>Jari-jari :</td><td>$l cm</td></tr>";
	echo "<tr><td>Tinggi :</td><td>$t cm</td></tr>";
	echo "<tr><td>Jadi Luas Alasnya Adalah :</td><td><b><u>$l cm2</u></b></td></tr>";
	echo "<tr><td>Jadi Volume Tabungnya Adalah :</td><td><b<<u>$V cm3</u></b></td></tr>";
 ?>
 	<form action="volume5.php">
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