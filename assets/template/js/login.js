$(function () {
	$('#clogin').submit(function (event) {
		event.preventDefault();
		$('#notifikasi').html('<div class="alert alert-info"><i class="fa fa-close"></i>Mohon bersabar Sedang memproses login ..</div>');

		username = $('input[name="username"]').val();
		password = $('input[name="password"]').val();
		if (username == '') {
			$('#notifikasi').html('<div class="alert alert-danger"><i class="fa fa-close"></i>Username Tidak Boleh Kosong</div>');
		} else if (password == '') {
			$('#notifikasi').html('<div class="alert alert-warning"><i class="fa fa-close"></i>Password Tidak Boleh Kosong</div>');
		} else {
			$.ajax({
				url: base_url() + '/welcome/login',
				type: 'POST',
				data: { username: username, password: password },
				async: false,
				cache: false,
				success: function (data) {
					$('#notifikasi').html('<div class="alert alert-success"><i class="fa fa-checklist"></i>Login Berhasil sedang mengalihkan ...</div>');
					window.location.href = base_url() + '?rg=welcome';

				},
				error: function (jqXHR, textStatus, errorThrown) {
					$('#notifikasi').html('<div class="alert alert-danger"><i class="fa fa-close"></i>Username dan Password yang anda masukan salah .</div>');
				}
			});
		}

	});

});