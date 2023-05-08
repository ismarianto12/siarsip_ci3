<script type="text/javascript">
	// /jQuery.noConflict();
	$(function() {
		$('#tambah').click(function() {
			$(window).scrollTop(10);
			$('.load_data').slideUp().hide();
			$('.main_app').load('<?= base_url('arsip/tambah') ?>').slideDown();
		});

		$('#datatables').on('click', ' #edit', function() {
			var access = $(this).attr('to');
			$(window).scrollTop(10);
			$('.main_app').load(access).slideDown();
			$('.load_data').slideUp().hide();

		});

	});
</script>

<?= $this->session->userdata('message') ?>
<div class='row'>
	<div class='col-xs-12 col-md-12'>
		<div class='widget'>
			<br /><br />
			<p class='text-muted m-b-30'>Tabel Data <?= $judul ?></p>
			<br /><br />

			<div class="main_app"></div>
			<br /><br />
			<div class="clearfix"></div>
			<div class="load_data">
				<div class='widget-header'>
					<?php if ($this->session->level == 'admin') : ?>
						<button class="btn bg-navy btn-flat margin btn-md" id="cari"><i class="fa fa-save"></i>Terima pegajuan.</button>
					<?php endif; ?>
					<button class="btn bg-navy btn-flat margin btn-md" id="tambah">Tambah data</button>
					<br /><br />

					<div class="col-md-5">
						<select class="form-control" name="jenis_arsip" id="id_jenis">
							<option value="">Jenis Arsip</option>
							<?php foreach ($this->db->get('jenis_arsip')->result_array() as $dr) : ?>
								<option value="<?= $dr['id_jenis'] ?>"><?= $dr['jenis_arsip'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>

					<?php if ($this->session->userdata('level') == 'admin') : ?>
						<div class="col-md-5">
							<select class="form-control" name="bidang" id="id_bidang">
								<option value="">Filter Berdasarkan bidang akses.</option>
								<?php foreach ($this->db->distinct()->select('level')->from('login')->get()->result_array() as $dr) : ?>
									<option value="<?= $dr['level'] ?>"><?= ucfirst($dr['level']) ?></option>
								<?php endforeach; ?>
							</select>
						</div>
					<?php endif; ?>


					<br /><br />
					<br />
					<br />
				</div>


				<style type="text/css">
					@media (min-width:768px) {
						#scroll {
							overflow: auto;
						}

						#barcode {
							width: 100px;
							height: 100px;
						}
					}

					#barcode {
						width: 100px;
						height: 100px;
					}
				</style>

				<div class='widget-body' id="scroll">
					<div id="notifikasi"></div>
					<table class="table table-bordered table-striped" id="datatables">
						<thead>
							<tr>
								<th width="80px">No</th>
								<th>Jenis</th>
								<th>Pembuat arsip</th>
								<th>Nama Arsip</th>
								<th>File Arsip</th>
								<th>Jumlah</th>
								<th>Satuan</th>
								<th>Lokasi</th>
								<th>Qr</th>
								<th>Tanggal</th>
								<th width="200px">Action</th>
							</tr>
						</thead>
					</table>
					<script type="text/javascript">
						$(document).ready(function() {
							$.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
								return {
									"iStart": oSettings._iDisplayStart,
									"iEnd": oSettings.fnDisplayEnd(),
									"iLength": oSettings._iDisplayLength,
									"iTotal": oSettings.fnRecordsTotal(),
									"iFilteredTotal": oSettings.fnRecordsDisplay(),
									"iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
									"iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
								};
							};

							var jenistable = $("#datatables").DataTable({
								// columnDefs: [{
								// 	targets: 9,
								// 	render: function(data) {
								// 		return moment(data).format('MMMM Do YYYY');
								// 	}
								// }],
								//  "bSort":false,  
								initComplete: function() {
									var api = this.api();
									$('#datatables input')
										.off('.DT')
										.on('keyup.DT', function(e) {
											if (e.keyCode == 13) {
												api.search(this.value).draw();
											}
										});
								},
								oLanguage: {
									sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'

								},
								processing: true,
								serverSide: true,
								ajax: {
									"url": "arsip/json",
									"type": "POST",
									"data": function(data) {
										var id_jenis = $('#id_jenis').val();
										var permision = $('#id_bidang').val();

										data.id_jenis = id_jenis;
										data.permision = permision;
									}
								},

								dom: 'Bfrtip',
								buttons: [
									'copy', 'csv', 'excel', 'pdf', 'print'
								],

								columns: [{
										"data": "id_arsip",
										"orderable": false
									}, {
										"data": "jenis_arsip"
									}, {
										"data": "nama"
									}, {
										"data": "nama_arsip"
									}, {
										"data": "file_arsip"
									}, {
										"data": "jumlah"
									}, {
										"data": "nama_satuan"
									}, {
										"data": "lokasi"
									}, {
										"data": "qr_code",
										"orderable": false
									}, {
										"data": "tgl",
										"orderable": false
									},
									{
										"data": "action",
										"orderable": false,
										"className": "text-center"
									}
								],
								order: [
									[0, 'desc']
								],
								rowCallback: function(row, data, iDisplayIndex) {
									var info = this.fnPagingInfo();
									var page = info.iPage;
									var length = info.iLength;
									var index = page * length + (iDisplayIndex + 1);
									$('td:eq(0)', row).html(index);
								}

							});
							$('.button_group').hide();
							$('#id_jenis').change(function() {
								var id_jenis = $('#id_jenis').val();


								$.ajax({
									url: '<?= base_url('arsip/cari_jenis_arsip') ?>',
									type: 'POST',
									data: 'id_jenis=' + id_jenis,
									chace: false,
									dataType: 'json',
									success: function(data) {
										if (data.jenis_arsip == 'data') {
											Swal('Jenis arsip arsip', 'Jenis Arsip Yang Di Pilih Adalah', 'success');
										} else {
											Swal('Jenis arsip', 'Jenis arsip yang anda pilih :' + data.jenis_arsip, 'success');
										}

									},
									error: function(data) {
										Swal('Server not respon');

									}
								});


								/*end bagian id_jenis_arsip*/
								$('#id_bidang').val('');
								jenistable.draw();
								jenistable.ajax.reload();
								$('.button_group').show();
							});
							$('#id_bidang').change(function() {
								$('#id_jenis').val('');
								jenistable.draw();
								jenistable.ajax.reload();
								$('.button_group').show();
							});
							/*table pengajuan*/
							var table_pengajuan = $(".list_data_pengajuan").DataTable({
								initComplete: function() {
									var api = this.api();
									$('.list_data_pengajuan input')
										.off('.DT')
										.on('keyup.DT', function(e) {
											if (e.keyCode == 13) {
												api.search(this.value).draw();
											}
										});
								},
								oLanguage: {
									sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'

								},
								processing: true,
								serverSide: true,
								ajax: {
									"url": "<?= base_url() ?>/arsip/json_data",
									"type": "POST"
								},
								columns: [{
										"data": "id_pengajuan",
										"orderable": false
									}, {
										"data": "nama_arsip"
									}, {
										"data": "jumlah"
									}, {
										"data": "nama_satuan"
									}, {
										"data": "tanggal",
										"orderable": false
									}, {
										"data": "tujuan"
									}, {
										"data": "nama_staff"
									},
									{
										"data": "pilih",
										"orderable": false
									}

								],
								order: [
									[0, 'desc']
								],
								rowCallback: function(row, data, iDisplayIndex) {
									var info = this.fnPagingInfo();
									var page = info.iPage;
									var length = info.iLength;
									var index = page * length + (iDisplayIndex + 1);
									$('td:eq(0)', row).html(index);
								}

							});


							$("#datatables").on('click', '#download', function(e) {
								e.preventDefault();
								$('#tampil_arsip').modal('show');
								let id = $(this).data('id');
								$.post('arsip/getdetailArsip', {
									id: id
								}, function(data) {
									$('#datanya').html(data);
								})

							})

						});

						function hapus(n) {
							Swal({
									title: 'Konfirmasi Hapus',
									text: 'Apakah Anda Yakin Untuk Menghapus Data Ini?',
									type: 'warning',
									showCancelButton: true,
									confirmButtonClass: 'btn-danger',
									confirmButtonText: 'Ya',
									closeOnConfirm: false
								},
								function() {
									Swal('Hapus Data', 'Data Berhasil Di Hapus', 'success');
									$.ajax({
										url: '<?= base_url('Arsip/hapus') ?>',
										data: 'id_arsip=' + n,
										type: 'post',
										//  dataType :'json',
										chace: false,
										//   asych: false,
										success: function(result) {

											$('#datatables').DataTable().ajax.reload();
											$('#notifikasi').html('<div class="callout callout-success">Data arsip berhail di hapus.</div>');
											// $('#tampilan_cari').modal('hide');
										},
										error: function(result) {
											Swal('Error', 'Maaf data tidak dapat di proses', 'error');
											$('#datatables').DataTable().ajax.reload();

										}
									});


								});
						}
						/*konfirmasi untuk penerimaan data arsip yang di ajukan */
						function terima(id) {
							Swal({
									title: 'Konfirmasi terima arsip',
									text: 'Apakah anda akan menerima arsip yang diajukan staff ?',
									type: 'warning',
									showCancelButton: true,
									confirmButtonClass: 'btn-danger',
									confirmButtonText: 'Ya',
									closeOnConfirm: false
								},
								function() {
									Swal('Proses', 'Sedang Memproses permintaan', 'success');
									$.ajax({
										url: '<?= base_url('Arsip/insert_pengajuan') ?>',
										data: 'id_pengajuan=' + id,
										type: 'POST',
										//dataType :'json',
										chace: false,
										success: function(data) {
											$('#datatables').DataTable().ajax.reload();
											$('.list_data_pengajuan').DataTable().ajax.reload();
											$('#notifikasi').html('<div class="callout callout-success">Data pengajuan arsip berhasil di terima </div>');
											$('#tampilan_cari').modal('hide');
										},
										error: function(data) {
											Swal('Error', 'Maaf data tidak dapat di proses', 'error');
										}
									});
								});
						}
						/*end*/
					</script>

				</div>
			</div>
		</div>


		<!-- pengajuand data arsip by staff -->
		<?php if ($this->session->userdata('level') == 'admin') : ?>
			<script type="text/javascript">
				$(function() {
					$('#cari').click(function() {
						$('#tampilan_cari').modal('show');
					});

					$('#refresh_table').click(function() {
						$('.list_data_pengajuan').DataTable().ajax.reload();
						$('#notifikasi').html('<div class="callout callout-success">Data berhasil di refresh</div>');
					});
				});
			</script>


			<div class="modal modal-primary" id="tampilan_cari">
				<div class="modal-dialog" style="width: 80%">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title">Judul arsip yang di ajukan operator.</h4>
						</div>
						<div class="modal-body" id="scroll" style="overflow: auto;">
							<button class="btn btn-success" id="refresh_table"><i class="fa fa-share"></i>Refresh Table</button>
							<br /><br /><br />
							<table class="table list_data_pengajuan">
								<thead>
									<tr>
										<th>#</th>
										<th>Arsip</th>
										<th>Jumlah</th>
										<th>Satuan</th>
										<th>Tanggal</th>
										<th>Tujuan</th>
										<th>User</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--  -->

			<div class="modal modal-default" id="tampil_arsip">
				<div class="modal-dialog" style="width: 50%">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title"><i class="fa fa-copy"></i>File arsip yang ditambahkan</h4>
						</div>
						<div class="modal-body" id="datanya" style="overflow: auto;">

						</div>
					</div>
				</div>
			<?php endif ?>