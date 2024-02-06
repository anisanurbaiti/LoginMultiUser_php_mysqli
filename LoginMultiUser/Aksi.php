<?php 
session_start();
include 'koneksi.php';
$user = $_POST['username'];
$pass = md5($_POST['password']);
$sql = mysqli_query($con,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
$cek = mysqli_num_rows($sql);
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);
	if($data['level']=="admin"){
		$_SESSION['nama'] =  $data['username'];
		$_SESSION['level'] = "admin";
			echo "<script>alert('Anda Berhasil Login'); window.location=('admin/index.php')</script>";
	}else if($data['level']=="moderator"){
		$_SESSION['nama'] = $data['username'];
		$_SESSION['level'] = "moderator";
		echo "<script>alert('Anda Berhasil Login'); window.location=('moderator/index.php')</script>";
	}else{
		echo "<script>alert('Anda gagal Login, Cek Username dan password'); window.location=('index.php')</script>";
	}	
}else{
		echo "<script>alert('Anda gagal Login'); window.location=('index.php')</script>";
}
?>