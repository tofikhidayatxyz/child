<!DOCTYPE html>
<html>
<head>
	<title>Hitung Volume Kubus</title>
</head>
<body bgcolor="lightblue">
<br><br>
	<form action="output_vol1.php" method="GET">
		<table style="color: blue; margin: 0 auto;" border="2" bgcolor="black" align="center">
			<tr>
				<th colspan="2">
					Volume Kubus
				</th>
			</tr>
			<tr>
				<td>
					Masukan Panjang Rusuknya :
				</td>
				<td>
					<input type="text" name="rusuk" maxlength="6" size="20">cm<br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="hitung" value="hitung">
				</td>
				<td>
					<input type="reset" name="reset" value="hapus">
				</td>
			</tr>
		</form>
		<form action="home.php">
			<tr>
				<td colspan="2">
					<center>
						<input type="submit" name="submit" value="Home">
					</center>	
				</td>
			</tr>
			
		</form>
		</table>
	</form>

</body>
</html>