<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Perangkat</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item" aria-current="page">
											Perangkat
										</li>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Edit Perangkat
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
									<a class="btn btn-danger" href="/perangkat" role="button">Cancel</a>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Jenis Perangkat</h4>
								<p class="mb-30">Edit Jenis Perangkat</p>
							</div>
							
						</div>
						<form action="/perangkat/update/<?= $jenis_perangkat['id'] ?>" method="post">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="nama_perangkat">Nama Perangkat</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										id="nama_perangkat" name="nama_perangkat" value="<?= $jenis_perangkat['nama_perangkat'] ?>"
									/>
									<?php if(session()->has('errors') && session('errors.nama_perangkat')): ?>
							<div class="text-danger mt-1">
								<?= session('errors.nama_perangkat') ?>
							</div>
						<?php endif; ?>
								</div>
							</div>
						
                            <button type="submit" class="btn btn-primary">Update</button>
					
						</form>
						
</form>
							
					
				
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
             DeskApp PT. INTI © 2024
        </div>
		</div>
<?= $this->endSection() ?>
