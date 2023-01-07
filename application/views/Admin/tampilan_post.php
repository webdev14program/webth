<div class="alert alert-success" role="alert">
	<h5 class="text-center text-uppercase font-weight-bold">post</h5>
</div>

<div class="row">
	<div class="col-md">
		<div class="card">
			<div class="card-body">
				<!-- <a class="btn btn-success btn-sm" href="<?= base_url() ?>Dashboard/tambah_jurusan"><i class="fas fa-plus-square"></i> Tambah Jurusan</a> -->
				<button type="button" class="btn btn-success btn-sm text-uppercase font-weight-bold" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-plus-square"></i> Upload Post
				</button>
			</div>
		</div>
	</div>
</div>
<?= $this->session->flashdata('pesan') ?>

<div class="card mt-2">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr class="text-center text-uppercase font-weight-bold">
						<th>#</th>
						<th>ID POST</th>
						<th style="">Nama Kegiatan</th>
						<th>detail</th>
						<th>Aksi</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$no = 1;
						foreach ($post as $row) {
						?>
							<td class="text-center text-uppercase font-weight-bold"><?php echo $no++; ?></td>
							<td class="text-center text-uppercase font-weight-bold"><?= $row['id_kegiatan']; ?></td>
							<td class=" text-uppercase font-weight-bold"><?= $row['nama_kegiatan']; ?></td>
							<td class=" text-center text-uppercase font-weight-bold"><?= $row['date']; ?></td>
							<td>
								<h5 class="text-center">
									<a class="btn btn-primary btn-sm text-white" href="<?= base_url() ?>Dashboard/detail_post/<?= $row['id_kegiatan']; ?>"><i class="fas fa-search"></i></a>
									<!-- <a class="btn btn-success btn-sm text-white" href="<?= base_url() ?>Dashboard/multi_upload_post/<?= $row['id_kegiatan']; ?>"><i class="fas fa-upload"></i></a> -->
									<a class="btn btn-danger btn-sm text-white" href="<?= base_url() ?>Dashboard/hapus_post/<?= $row['id_kegiatan']; ?>"><i class="fas fa-trash"></i></a>
								</h5>
							</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-title" id="exampleModalLabel">Upload Post</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?= form_open_multipart('Dashboard/upload_post'); ?>

				<div class="form-group">
					<label>Nama Kegiatan</label>
					<input type="text" class="form-control" name="nama_kegiatan">
				</div>
				<div class="row">
					<div class="col-md">
						<div class="form-group">
							<label>Ringkasan Kegiatan</label>
							<textarea class="form-control ckeditor" id="ckedtor" name="ringkasan_kegiatan" id="ringkasan" rows="2"></textarea>
						</div>
					</div>
					<div class="col-md">
						<div class="form-group">
							<label>Detail Kegiatan</label>
							<textarea class="form-control ckeditor" id="ckedtor" name="detail_kegiatan" id="detail" rows="3"></textarea>
						</div>
					</div>
				</div>



				<div class="form-group">
					<input type="file" name="gambar" class="form-control-file" name="file" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" name="submit" value="upload" class="btn btn-primary">Upload</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>
</div>
