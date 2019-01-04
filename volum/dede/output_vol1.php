<!DOCTYPE html>
<html>
<head>
	<title>Hasil Penghitungan</title>
</head>
<body bgcolor="lightblue" >
<?php 
	$r = $_GET['rusuk'];
	$V = (6*$r);
	echo "<center><table  style='color: blue' border='2' bgcolor='black'></center><tr><th colspan='2'>Jawabannya</th></tr>";
	echo "<tr><td colspan='2'>Diketahui</td><tr><td> >> Panjang Rusuknya : </td><td> $r cm</td></tr><br>";
	echo "<tr><td>Jadi Volume Kubusnya Adalah :</td><td><b><u> $V cm3 </u></b></td></tr>";
 ?>
	 
	 	<form action='volume1.php'>
	 		<tr>
	 			<td>
	 				<input type='submit' name='submit1' value="back">
	 			</td>
	
	 	</form>
	 	<form action='home.php'>
		 		<td>
		 			<input type='submit' name='submit2' value="home">
		 		</td>
		 	</tr>
	 	</form>
	 
</body>
</html>