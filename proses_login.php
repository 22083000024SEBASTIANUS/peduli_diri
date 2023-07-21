<?php

$nik		= $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

include'koneksi.php';
$query = mysqli_query($koneksi,"SELECT*FROM user WHERE nik='$nik' AND nama_lengkap='$nama_lengkap'");
if(mysqli_num_rows($query)==0){ ?>
	<script>
		alert("NIK dan Nama Lengkap tidak ditemukan.");
		window.location.assign("index.php");
	</script>
<?php
}else{
	session_start();
	$_SESSION['nik'] = $nik;
	$_SESSION['nama_lengkap'] = $nama_lengkap;

	header("location:user.php");
}