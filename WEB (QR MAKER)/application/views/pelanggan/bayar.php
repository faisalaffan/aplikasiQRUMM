<div class="container" style="margin-top: 10vh">
	<table class="highlight responsive-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Menu</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Total Harga</th>
				<th>Tanggal Pesan</th>
			</tr>
		</thead>

		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($bayar as $b ) : ?>
			<tr>
				<td><?= $no ?></td>
				<td><?= $b['nama_menu'] ?></td>
				<td><?= $b['qty'] ?></td>
				<td><?= $b['harga'] ?></td>
				<td><?= $b['harga'] * $b['qty'] ?></td>
				<td><?= $b['created_at'] ?></td>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
