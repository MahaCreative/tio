<?php 
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$hak_akses = $_POST['hak_akses'];

if($hak_akses=="superadmin"){
	$cek = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "admin_login";
		header("location:admin/");
	}else{
		header("location:login.php?alert=gagal");
	}

}else if($hak_akses=="petugas"){
	$cek = mysqli_query($koneksi,"select * from petugas where username_petugas='$username' and password_petugas='$password'");
	$c=mysqli_fetch_array($cek);
	if(mysqli_num_rows($cek) > 0){
		session_start();
		$_SESSION['id'] = $c['id_petugas'];
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "petugas_login";
		header("location:petugas/");
	}else{
		header("location:login.php?alert=gagal");
	}
}

?>