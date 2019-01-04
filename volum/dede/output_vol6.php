<!DOCTYPE html>
	<html>
	<head>
		<title>Hasil</title>
	</head>
	<body bgcolor="lightblue">
<?php
	$j = $_GET['jari_jari'];
	$V = ((4/3 * 22/7)* $j * $j);

	echo "<center><table style='color: blue; margin: 0 auto;' border='2' bgcolor='black'></center><tr><th colspan='2'>Jawabannya</th></tr>";
	echo "<tr><td>Jar-jari</td><td>$j cm</td></tr>";
	echo "<tr><td>Jadi Volume Bolanya Adalah :</td><td><b><u>$V cm3</u></b></td></tr>";

?>	
	<form action="volume6.php">
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