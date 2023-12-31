<div class="container mt-4">
	<div class="card">
		<div class="card-header bg-primary">
			<h4 class="text-uppercase text-white font-weight-bold"><?= $post['nama_kegiatan'] ?></h4>
		</div>
		<div class="card-body">
			<h5 class="text-center">
				<img src="<?= $post['gambar'] ?>" class="img-fluid" alt="<?= $post['nama_kegiatan'] ?>" style="width: 600px;height:400px">
			</h5>

			<div class="row">
				<div class="col-md">
					<div class="card">
						<div class="card-header bg-primary">
							<h5 class="text-uppercase Text-center text-white font-weight-bold">photo kegiatan</h5>
						</div>
						<div class="card-body">
							<div class="row">
								<?php foreach ($detail_post_gambar as $row) : ?>
									<div class="col-md mt-2 d-flex align-items-center justify-content-center mb-4">

										<h5 class="text-center mt-2"><img src="<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['nama_kegiatan'] ?>" style="width: 250px;height: 200px;"></h5>

									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<span>
				<?= $post['detail_kegiatan'] ?>
			</span>
		</div>
	</div>
</div>