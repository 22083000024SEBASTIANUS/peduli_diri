<div class="card">
	<div class="card-header">
<a href="user.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text">Kembali</span>
                                    </a>		
	</div>
	<div class="card-body">
		<div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Lokasi</th>
                                            <th>Suhu</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    </tfoot>
                                    <tbody>
                                    	<?php
                                    	$no = 1;
                                    	include'koneksi.php';
                                    	$sql = "SELECT*FROM catatan WHERE nik='$_SESSION[nik]'";
                                    	$query = mysqli_query($koneksi, $sql);
                                    	foreach ($query as $value) {
                                    	?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['tanggal'] ?></td>
                                            <td><?= $value['waktu'] ?></td>
                                            <td><?= $value['lokasi'] ?></td>
                                            <td><?= $value['suhu'] ?></td>
                                            <td>
                                            	<a href="?url=edit_catatan&id_catatan=<?= $value['id_catatan']; ?>" class="btn btn-info">
                                            		<i class="fa fa-pencil"></i> Edit
                                            	</td>
                                            	<td>
                                            		<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="hapus_catatan.php?id_catatan=<?= $value ['id_catatan'] ?>"class="btn btn-danger">
                                            			<i class="fa fa-trash"></i> Hapus
                                            	</a>
                                            	</td>
                                        </tr>
                                    	<?php } ?>
                                    </tbody>
                                </table>
    </div>		
	</div>
</div>