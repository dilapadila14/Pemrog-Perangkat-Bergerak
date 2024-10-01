<!DOCTYPE html>
<html>
<head>
	<title>Latihan Input Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h2>Materi Mobile</h2>
		<h3>Universitas Duta Bangsa</h3>
	</div>


	<h3>Input Data Baru</h3>
	<form action="APIsaveData.php" method="post">		
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" required></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required></td>					
			</tr>	
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="progdi" required></td>					
			</tr>	
			<tr>
				<td>Kelas</td>
				<td><input type="text" name="kelas" required></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" required></td>					
			</tr>
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>