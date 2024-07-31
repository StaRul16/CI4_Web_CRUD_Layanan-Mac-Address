<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Divisi</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="/dashboard">Home</a>
										</li>
										<li class="breadcrumb-item">
                                            <a href="/divisi">Divisi</a>
											
										</li>   
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Tambah Divisi
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
									<a class="btn btn-danger" href="/divisi" role="button">Cancel</a>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Divisi</h4>
								<p class="mb-30">Tambah Divisi</p>
							</div>
							
						</div>
						<form  action="/divisi/store" method="post">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="nama_department">Kode Divisi</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="number"
										id="kode_department" name="kode_department"
                                        placeholder ="Masukkan Kode Divisi"
									/>
									<?php if(session()->has('errors') && session('errors.kode_department')): ?>
							<div class="text-danger mt-1">
								<?= session('errors.kode_department') ?>
							</div>
						<?php endif; ?>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label" for="nama_department">Nama Divisi</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										id="nama_department" name="nama_department"
                                        placeholder ="Masukkan Nama Divisi"
									/>
									<?php if(session()->has('errors') && session('errors.nama_department')): ?>
							<div class="text-danger mt-1">
								<?= session('errors.nama_department') ?>
							</div>
						<?php endif; ?>
								</div>
							</div>
						
                            <button type="submit" class="btn btn-primary">Simpan</button>
					
						</form>
						
							
					
			
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
             DeskApp PT. INTI © 2024
        </div>
		</div>
<?= $this->endSection() ?>
