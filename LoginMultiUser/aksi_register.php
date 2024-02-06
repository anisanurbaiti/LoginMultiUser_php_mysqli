<?php 
include 'koneksi.php';
if ($_POST['tombol_register']) {
	$varEmail		= $_POST['email'];
	$varUsername	= $_POST['username'];
	$varEmailPass	= md5($_POST['password']);
	$varLevel		= $_POST['level'];
	$varCheckPass 	= strlen($varEmailPass);
	$varCheckEmail	= mysqli_num_rows(mysqli_query($con, "SELECT username FROM user WHERE email = '$varEmail'"));
		if ($varCheckEmail > 0) {
			header("location:register.php?init=EmailSudahDigunakan");		
			} else {
			if ($varCheckPass< 8) {
				header("location:register.php?init=PasswordMinimal");
				} else {	
				if (filter_var($varEmail, FILTER_VALIDATE_EMAIL)) {
						$varQuery = mysqli_query($con, "INSERT INTO user (email, username,password,level) VALUES ('$varEmail', '$varUsername', '$varEmailPass', '$varLevel')");						
						if ($varQuery) {
							echo "<script>alert('Berhasil Mendaftar');
								window.location=('index.php')</script>";
						} else {
							header("location:register.php?init=TidakBerhasilMendaftar");
						} 						
						} else {
							header("location:register.php?init=MasukkanAlamatEmailDenganBenar");	
						}
					}
				}	
		}
?>