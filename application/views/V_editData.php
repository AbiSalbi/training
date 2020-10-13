<!DOCTYPE html>
<html>
<head>
	<title> Edit Data </title>
</head>
<body>

	<?php echo form_open_multipart('C_barang/proses_editData/'.$data->kode_barang) ?>
		
		<input type="radio" name="jenis_barang" value="sayuran"><label> Sayuran </label>
		<input type="radio" name="jenis_barang" value="buah-buahan"><label> Buah-Buahan </label>
		<input type="radio" name="jenis_barang" value="alat elektronik"><label> Elektronik </label>
		<input type="radio" name="jenis_barang" value="alat sekolah"><label> Alat Sekolah </label><br><br>
		<input type="text" name="nama_barang" value="<?php echo $data->nama_barang ?>"><br><br>
		<input type="text" name="harga_barang" value="<?php echo $data->harga_barang ?>"><br><br>
		<input type="text" name="total_barang" value="<?php echo $data->total_barang ?>"><br><br>
		<input type="text" name="total_harga" value="<?php echo $data->total_harga ?>"><br><br>
		<input type="radio" name="metode_pembayaran" value="cash"><label> Cash </label>
		<input type="radio" name="metode_pembayaran" value="debit"><label> Debit </label><br><br>

		<button> Tambah </button>
	<?php echo form_close() ?>

</body>
</html>