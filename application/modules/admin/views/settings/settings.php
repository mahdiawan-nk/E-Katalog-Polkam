<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header pb-6" style="background-color: #ff7f00; color: white;">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Pengaturan Website</h6>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Pengaturan</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
	<?php echo form_open_multipart('admin/settings/update'); ?>

	<div class="row">
		<div class="col-md-8">
			<div class="card-wrapper">
				<div class="card">
					<div class="card-header">
						<h3 class="mb-0">Identitas Website</h3>
						<?php if ($flash) : ?>
							<span class="float-right text-success font-weight-bold" style="margin-top: -30px">
								<?php echo $flash; ?>
							</span>
						<?php endif; ?>
					</div>

					<div class="card-body">

						<div class="form-group">
							<label class="form-control-label" for="name">Nama Website:</label>
							<input type="text" name="store_name" value="<?php echo set_value('store_name', get_settings('store_name')); ?>" class="form-control" id="name">
							<?php echo form_error('store_name'); ?>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label class="form-control-label" for="phone_number">No. HP:</label>
									<input type="text" name="store_phone_number" value="<?php echo set_value('store_phone_number', get_settings('store_phone_number')); ?>" class="form-control" id="phone_number">
									<?php echo form_error('store_phone_number'); ?>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label class="form-control-label" for="email">Email:</label>
									<input type="text" name="store_email" value="<?php echo set_value('store_email', get_settings('store_email')); ?>" class="form-control" id="email">
									<?php echo form_error('store_email'); ?>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="form-control-label" for="address">Alamat:</label>
							<textarea name="store_address" class="form-control" id="address"><?php echo set_value('store_address', get_settings('store_address')); ?></textarea>
							<?php echo form_error('store_address'); ?>
						</div>

						<div class="form-group">
							<label class="form-control-label" for="tagline">Tagline:</label>
							<input type="text" name="store_tagline" value="<?php echo set_value('store_tagline', get_settings('store_tagline')); ?>" class="form-control" id="tagline">
							<?php echo form_error('store_tagline'); ?>
						</div>

						<div class="form-group">
							<label class="form-control-label" for="description">Deskripsi:</label>
							<textarea name="store_description" class="form-control" id="description"><?php echo set_value('store_description', get_settings('store_description')); ?></textarea>
							<?php echo form_error('store_description'); ?>
						</div>

					</div>

				</div>

			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">Logo</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label class="form-control-label" for="pic">logo:</label>
						<img src="<?= base_url('assets/uploads/sites/' . get_settings('store_logo')) ?>" alt="logo toko" class="d-block mx-auto w-50 p-5" id="preview-logo">
						<input type="file" name="logo" class="form-control" id="logo-input">
						<small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">Banner Pertama</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label class="form-control-label" for="pic">Banner Pertama:</label>
						<img src="<?= base_url('assets/uploads/sites/' . get_settings('home_banners_first')) ?>" alt="banner toko" class="d-block mx-auto w-100 mb-2" id="preview-banner-first">
						<input type="file" name="banner_first" class="form-control" id="banner-first-input">
						<small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h3 class="mb-0">Banner Kedua</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label class="form-control-label" for="pic">Banner Kedua:</label>
						<img src="<?= base_url('assets/uploads/sites/' . get_settings('home_banners_second')) ?>" alt="banner toko" class="d-block mx-auto w-100 mb-2" id="preview-banner-seccond">
						<input type="file" name="banner_second" class="form-control" id="banner-seccond-input">
						<small class="text-muted">Pilih foto PNG atau JPG dengan ukuran maksimal 2MB</small>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<input type="submit" value="Simpan" class="btn btn-primary">
				</div>
			</div>

		</div>
	</div>

	</form>

	<script>
		const fileInput = document.getElementById('logo-input');
		const bannerFirst = document.getElementById('banner-first-input');
		const bannerSeccond = document.getElementById('banner-seccond-input');
		const previewImage = document.getElementById('preview-logo');
		const previewFirst = document.getElementById('preview-banner-first');
		const previewSeccond = document.getElementById('preview-banner-seccond');

		fileInput.addEventListener('change', function(event) {
			const file = event.target.files[0];
			if (file && file.type.startsWith('image/')) {
				const reader = new FileReader();
				reader.onload = function(e) {
					previewImage.src = e.target.result;
				};
				reader.readAsDataURL(file);
			} else {
				previewImage.src = 'https://via.placeholder.com/200';
			}
		});

		bannerFirst.addEventListener('change', function(event) {
			const file = event.target.files[0];
			if (file && file.type.startsWith('image/')) {
				const reader = new FileReader();
				reader.onload = function(e) {
					previewFirst.src = e.target.result;
				};
				reader.readAsDataURL(file);
			} else {
				previewFirst.src = 'https://via.placeholder.com/200';
			}
		});

		bannerSeccond.addEventListener('change', function(event) {
			const file = event.target.files[0];
			if (file && file.type.startsWith('image/')) {
				const reader = new FileReader();
				reader.onload = function(e) {
					previewSeccond.src = e.target.result;
				};
				reader.readAsDataURL(file);
			} else {
				previewSeccond.src = 'https://via.placeholder.com/200';
			}
		});

		jQuery(document).ready(function() {
			let no = $('.bank-data').length;
			jQuery(".btn-add").click(function() {

			});
			jQuery("body").on("click", ".btn-remove", function() {
				jQuery(this).parents(".input-group").remove();

				let zero = $('.alert-zero');
				if (zero.length > 0) {
					zero.show('fade')
				}
			})
		})
	</script>