<?php

$nik		= $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];

include'koneksi.php';
$query_validasi = "SELECT*FROM user WHERE nik='$nik'";
$query = mysqli_query($koneksi, $query_validasi);

if(mysqli_num_rows($query)==0){
	$query_register = mysqli_query($koneksi, "INSERT INTO user(nik,nama_lengkap) VALUES('$nik','$nama_lengkap')");
	if($query_register){ ?>
		<script>
			alert("Data Tersimpan Trimakasih Sudah Menggunakan Aplikasi Kami");
			window.location.assign("index.php");
		</script>
	<?php }
}else{ ?>
	<script>
		alert("NIK Yang Anda Gunakan Sudah Terdaftar");
		window.location.assign("register.php");
	</script>
<?php
}