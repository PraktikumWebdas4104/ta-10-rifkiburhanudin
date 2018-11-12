<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Genre Film</td>
					<td>:</td>
					<td><select name="film" value="<?=$row[5]?>">
						<option value="horor">horor</option>
						<option value="action">action</option>
						<option value="anime">anime</option>
						<option value="thriller">thriller</option>
						<option value="animasi">animasi</option>						
					</select></td>
				</tr>

				<tr>
					<td>Tempat Wisata</td>
					<td>:</td>
					<td><select name="wisata" value="<?=$row[6]?>">
						<option value="bali">bali</option>
						<option value="raja ampat">raja ampat</option>
						<option value="pulau derawan">pulau derawan</option>
						<option value="bangka belitung">bangka belitung</option>
						<option value="labuan bajo">labuan bajo</option>						
					</select></td>
				</tr>
							
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		//panggil controller update
		$main->update();
	}
?>