<script>
	$(function() {
		$('#close').click(function() {
			$('.main_app').hide().slideUp();
		});
	});
</script>

<div class='row'>
	<div class='col-sm-12'>
		<?= $this->session->userdata('message') ?>
		<div class='white-box'>
			<h3 class='box-title m-b-0'>Detail Akses</h3>
			<div class='table-responsive'>

				<table class="table">
					<tr>
						<td>Id User</td>
						<td><?php echo $this->session->nama; ?></td>
					</tr>
					<tr>
						<td>Url</td>
						<td><?php echo $url; ?></td>
					</tr>
					<tr>
						<td>Aktivitasi</td>
						<td><?php echo $aktivitasi; ?></td>
					</tr>
					<tr>
						<td>Tanggal</td>
						<td><?php echo $tanggal; ?></td>
					</tr>
					<tr>
						<td>Ip Address</td>
						<td><?php echo $ip_address; ?></td>
					</tr>
					<tr>
						<td>Browser</td>
						<td><?php echo $browser; ?></td>
					</tr>
					<tr>
						<td></td>
						<td><button class="btn bg-navy btn-flat margin" id="close"><i class='fa fa-home'></i>Cancel</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>