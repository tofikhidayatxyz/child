<!DOCTYPE html>
<html>
<head>
	<title>Hitung Volume Bola</title>
</head>
<body bgcolor="lightblue">
	<form action="output_vol6.php" method="GET">
		<table style="color: blue;margin: 0 auto;" border="2" bgcolor="black">
			<tr>
				<td colspan="2">
					Volume Bola
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Jari-jari :
				</td>
				<td>
					<input type="text" name="jari_jari" maxlength="6" size="20">cm<br>
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