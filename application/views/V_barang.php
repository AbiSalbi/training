<!DOCTYPE html>
<html>
<head>
	<title> Toserba </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap.min.css') ?>">
</head>

<body>

	<br><br><br>
	<h2 align="center" > Toko Serba Ada </h2>

	<br> 
	<table border="5" align="center" cellpadding="5">

		<thead bgcolor="#32CD32">
			<tr align="center">
				<th> Jenis Barang </th>
				<th> Nama Barang  </th>
				<th> Harga Barang </th>
				<th> Total Barang </th>
				<th> Total Harga  </th>
				<th> Metode Pembayaran </th>
				<th> Opsi </th>
			</tr>
		</thead>

		<tbody>

			<?php foreach($data as $x) { ?>

				<tr>
					<td align="center"> <?php echo $x['jenis_barang'] ?> </td>
					<td align="center"> <?php echo $x['nama_barang']  ?> </td>
					<td> 				<?php echo $x['harga_barang'] ?> </td>
					<td align="center"> <?php echo $x['total_barang'] ?> </td>
					<td> 				<?php echo $x['total_harga']  ?> </td>
					<td align="center"> <?php echo $x['metode_pembayaran']  ?> </td>
					<td>

						<a href="<?php echo site_url('C_barang/edit_data/'.$x['kode_barang']) ?>" 
							style="text-decoration:none" class="btn btn-dark" href="#" role="button"> Edit 
						</a>  
						||
					    <a href="<?php echo site_url('C_barang/hapus_data/' .$x['kode_barang']) ?>" 
					    	on click ="return confirm('Yakin Ingin Keluar')" style="text-decoration:none" 
					    	class="btn btn-warning" href="#" role="button"> Hapus </a> 

					</td>
				</tr>

			<?php } ?>

		</tbody>
	</table>

	<br>
	<a id="tambah" href="<?php echo site_url('C_barang/Tambah_data') ?> " style="text-decoration:none"
		class="btn btn-success" href="#" role="button"> Tambah Data </a> 

</body>
</html>