<h2>data pelanggan</h2> 

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama </th>
			<th>email</th>
			<th>Telepon</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($pecah = $ambil-> fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td><?php echo $pecah['telepon_pelanggan']; ?></td>
			<td>
				<a href="" class="btn-danger btn">hapus</a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>