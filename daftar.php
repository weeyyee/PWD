<form action="">

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h1><img src="logo.jpg"width="330" height="250">
		</div>

	<div class="menu">
		<ul>
			<li>SHOP</li>
			<li>MANS</li>
			<li>WOMEN</li>
			<li>ACCESORIES</li>
			<li>LOGIN</li>
			<a href="daftar.php"><li>SIGN UP</li>
			

		</ul>
	</div>
	
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="Username"></td>
		</tr>

		<tr>
			<td>Nama Lengkap</td>
			<td><input type="text" name="Nama"></td>
		</tr>

		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="DATE" name="Tanggal Lahir"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><input type="text" name="Alamat"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jk">
					<option value="L">Laki-laki</option>>

					<option value="P">Perempuan</option>
				</select>
				
			</td>
		</tr>

		<tr>
			<td>Status</td>
			<td>
				<input type="radio" name="Status" value="sudah">Married
				<input type="radio" name="Status" value="belum">Single
			</td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" name="Email"></td>
		</tr>

		<tr>
			<td>HP</td>
			<td><input type="text" name="Hp"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td><input type="text" name="Password"></td>
		</tr>

		
		
		<tr>
			<td></td>
			<td><input type="submit" value="Daftar"></td>
		</tr>

	</table>
</form>