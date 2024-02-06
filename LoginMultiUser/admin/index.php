<!DOCTYPE html>
<html>
<head>
	<title>Login Multi User</title>
</head>
<body>
<?php 
session_start();
if($_SESSION['level']==""){
	header("location:../index.php?alert=belum_login");
}

?>
	<h1>Halaman Admin</h1>

	<p>Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>

	<br/>
	<br/>
</body>
</html>