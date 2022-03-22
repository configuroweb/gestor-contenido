<div class="contact py-3">
	<div class="card card-outline card-primary shadow rounded-0">
		<div class="card-header">
			<h5 class="card-title"><b>Información de Contacto</b></h5>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<form action="" id="contact-form">
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label for="school_address" class="control-label">Dirección</label>
								<textarea rows="3" name="school_address" id="school_address" class="form-control form-control-sm rounded-0" required><?= $_settings->info('school_address') ?></textarea>
							</div>
							<div class="form-group">
								<label for="school_tel_no" class="control-label">Móvil</label>
								<input type="text" name="school_tel_no" id="school_tel_no" class="form-control form-control-sm rounded-0" value="<?= $_settings->info('school_tel_no') ?>" required>
							</div>
							<div class="form-group">
								<label for="school_mobile" class="control-label">Whatsapp</label>
								<input type="text" name="school_mobile" id="school_mobile" class="form-control form-control-sm rounded-0" value="<?= $_settings->info('school_mobile') ?>" required>
							</div>
							<div class="form-group">
								<label for="school_email" class="control-label">Correo</label>
								<input type="email" name="school_email" id="school_email" class="form-control form-control-sm rounded-0" value="<?= $_settings->info('school_email') ?>" required>
							</div>
							<div class="form-group">
								<label for="map_coords" class="control-label">Coordinadas GMAP</label>
								<input type="text" name="map_coords" id="map_coords" class="form-control form-control-sm rounded-0" value="<?= $_settings->info('map_coords') ?>" required>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="card-footer py-1 text-right">
			<button class="btn btn-primary btn-flat" type="submit" form="contact-form"><i class="fa fa-save"></i> Guardar</button>
		</div>
	</div>
</div>
<script>
	$(function() {
		$('#contact-form').submit(function(e) {
			e.preventDefault();
			var _this = $(this)
			$('.err-msg').remove();
			var el = $('<div>')
			el.addClass('alert alert-danger err-msg')
			el.hide()
			start_loader();
			$.ajax({
				url: _base_url_ + "classes/Master.php?f=save_contact",
				data: _this.serialize(),
				method: 'POST',
				type: 'POST',
				dataType: 'json',
				error: err => {
					console.log(err)
					alert_toast("Ocurrió un error", 'error');
					end_loader();
				},
				success: function(resp) {
					if (typeof resp == 'object' && resp.status == 'success') {
						location.reload();
					} else if (resp.status == 'failed' && !!resp.msg) {
						el.text(resp.msg)
						_this.prepend(el)
						el.show('slow')
						$("html, body").scrollTop(0);
						end_loader()
					} else {
						alert_toast("Ocurrió un error", 'error');
						end_loader();
						console.log(resp)
					}
				}
			})
		})

	})
</script>