<!DOCTYPE html>
<html>
<head>
	<title>Login Multi User Level</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	<h1>REGISTRASI</h1>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>
 
		<form action="aksi_register.php" method="post">
			<label>Email</label>
			<input type="email" name="email" placeholder="Email.." class="form_login" required="required">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username.." class="form_login" required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<label>Ulangi Password</label>
			<input type="password" name="password1" class="form_login" placeholder="Ulangi Password .." required="required">
			<label>Level</label>
			 <input type="radio" name="level"  value="admin">Admin
             <input type="radio" name="level"  value="moderator">Moderator<br>
             	<br/>

			<input type="submit" class="tombol_login" value="REGISTRASI" name="tombol_register">
 
			<br/>
			<br/>
			<center>
				<a class="link">Sudah Punya Akun</a>
			</center>
			<br/>
			<center>
			<a href="index.php" class="tombol_login">LOGIN</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>