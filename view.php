<h2><a>Daftar Produk</a></h2>
<table>

		<tr>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Harga(Rp)</th>
			<th>Quantity</th>
			<th>Action</th>

		</tr>


	<?php foreach ($data_laundry as $row):?>
		<tr>
		<?php $this->load->helper('form');
		echo form_open_multipart("controller/add/$row->id")?>
			<td width="2"><?php echo $row->id;?></td>
			<td><?php echo $row->nama;?></td>
			<td><?php echo $row->harga;?></td>
			<input type="text" name="quantity" maxlength="4" size="3" />
			<td width="4"><input type="submit" value="+" /></td>
			<?php echo form_close();?>
		</tr>
		<?php
		endforeach; ?>
</table>


///////////////


<div class="grid_7">
<div class="box">
<h2><a id="toggle-login-forms">Daftar Barang Yang Akan Dibeli</a></h2>
<?php $cart = $this->cart->contents() ?>
<table>
	<tr>
		<th>Quantity</th>
		<th>(ID)Nama Produk</th>
		<th>No Marker</th>
		<th>Harga</th>
		<th>Subtotal</th>
		<th>Aksi</th>
	</tr>
	<?php foreach ($cart as $cartitem):
	?>
	<tr>

		<td><?php echo $cartitem['qty'];?></td>
		<td>(<?php echo $cartitem['id'];?>)<?php echo $cartitem['name'];?><br>
		Rp.<?php echo $cartitem['price'];?></td>
		<td>Rp <?php echo $cartitem['subtotal'];?></td>
		<td class="hapus"><a
			href="<?php echo base_url();?>controller/cancel/<?php echo $cartitem['rowid'];?>#bottom">Cancel</a>
		</td>


	</tr>
	
	<?php endforeach;	
	?>
	<tr></tr>
	<tr>
		<td><strong>Total Harga</strong>
		<td></td>
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td class="totalcart"><b>Rp <?php echo $this->cart->total();?></b></td>
		<td></td>

	</tr>
</table>
</form>
</div>
</div>