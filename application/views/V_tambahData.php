<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data </title>
	
</head>
<body>

	<?php echo form_open_multipart('C_barang/proses_tambahData') ?>

		<input type="radio" name="jenis_barang" value="sayuran"><label> Sayuran </label> 
		<input type="radio" name="jenis_barang" value="buah-buahan"><label> Buah-Buahan </label>
		<input type="radio" name="jenis_barang" value="alat elektronik"><label> Elektronik </label> 
		<input type="radio" name="jenis_barang" value="alat sekolah"><label> Alat Sekolah </label><br><br>
		<input type="text" name="nama_barang" placeholder="nama"> <br><br>
		<input type="text" name="harga_barang" placeholder="harga_barang"> <br><br>
		<input type="text" name="total_barang" placeholder="total_barang"> <br><br>
		<input type="text" name="total_harga" placeholder="total_harga"> <br><br>
		<input type="radio" name="metode_pembayaran" value="cash"><label> Cash </label> 
		<input type="radio" name="metode_pembayaran" value="debit"><label> Debit </label> <br><br>

		<button > Tambah </button>
		
	<?php echo form_close() ?>

</body>
</html>

		