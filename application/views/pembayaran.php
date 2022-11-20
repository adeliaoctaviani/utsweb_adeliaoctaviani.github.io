<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

				echo "<h5> Total Belanja Anda : Rp ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>

			<h3>Input Alamat Pengiriman dan Pembayaran</h3>
			<form method="post" action="<?php echo base_url() ?> dashboard/proses_pesanan ">
				
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telp</label>
					<input type="text" name="no_telp" placeholder="Nomor Telephone Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Metode Pengiriman</label>
					<select class="form-control">
						<option>J&T</option>
						<option>GoSent</option>
						<option>Regular</option>
						<option>JNE</option>
						<option>Kantor Pos</option>
						<option>Tiki</option>
					</select>
				</div>

				<div class="form-group">
					<label>Metode Pembayaran</label>
					<select class="form-control">
						<option>COD</option>
						<option>ShoppePay</option>
						<option>PayLatter</option>
						<option>Debit</option>
						<option>Dana</option>
						<option>OVO</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary">Check Out</button>

			</form>

			<?php 
			} else{
				echo "<h5> Keranjang Anda Kosong";
			} 
				?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>