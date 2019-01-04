<!DOCTYPE html>
<html>
<head>
	<title>Hitung Volume Prisma</title>
</head>
<body bgcolor="lightblue">
	<form action="output_vol3.php" method="GET">
		<table style="color: blue; margin: 0 auto;" border="2" bgcolor="black">
			<tr>
				<th colspan="2">
					Volume Prisma
				</th>
			</tr>
			<tr>
				<td>
					Masukkan Luas Alas :
				</td>
				<td>
					<input type="text" name="luas_alas" maxlength="6" size="20">cm
				</td>
			</tr>
			<tr>
				<td>
					Masukkan Tinggi :
				</td>
				<td>
					<input type="text" name="tinggi" maxlength="6" size="20">cm
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="hitung" value="Hitung">
				</td>
				<td>
					<input type="reset" name="reset" value="Hapus">
				</td>
			</tr>
			<form action="home.php"></form>
			<tr>
				<td colspan="2">
					<center>
						<input type="submit" name="submit" value="Home">
					</center>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>