<?= $this->extend('layouts/admin') ?>
<?= $this->section('content') ?>
<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Mac Address</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="/dashboard">Home</a>
										</li>
										<li class="breadcrumb-item">
											<a href="/userinfo/">Mac Address</a>
										</li>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Tambah
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								
									<a
										class="btn btn-danger"
										href="/userinfo"
										role="button"	
									>
										Cancel
									</a>
									
								
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">MAC Address</h4>
								<p class="mb-30">Tambah MAC Address</p>
							</div>
							
						</div>
						<form action="/userinfo/store" method="post">
        <?= csrf_field() ?>
        <div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label" for="mac_I" required >MAC ADDRESS</label>
					<div class="col-sm-12 col-md-10">
						<input
						    class="form-control"
							type="text"
							id="mac_I" name="mac_I"
							value = "<?= old('mac_I') ?>"
                            placeholder ="Masukkan Mac Address"/>
							
									<?php if(session()->has('error') && session('error') == 'MAC Address tidak valid.'): ?>
							<div class="text-danger mt-1">
								<?= session('error') ?>
							</div>
						<?php endif; ?>
						<small id="macHelp" class="form-text text-muted">Masukkan Mac Address dalam Format XX:XX:XX:XX:XX:XX</small>
					
					</div>
		</div>
        <div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label" for="nama" required >Nama</label>
					<div class="col-sm-12 col-md-10">
						<input
						    class="form-control"
							type="text"
							id="nama" name="nama"
							value = "<?= old('nama') ?>"
                            placeholder ="Masukkan Nama"/>
									<?php if(session()->has('errors') && session('errors.nama')): ?>
							<div class="text-danger mt-1">
								<?= session('errors.nama') ?>
							</div>
						<?php endif; ?>
						</div>
		</div>
        <div class="form-group row">
				<label class="col-sm-12 col-md-2 col-form-label" for="inventaris" required >Inventaris</label>
					<div class="col-sm-12 col-md-10">
						<input
						    class="form-control"
							type="text"
							id="inventaris" name="inventaris"
							value = "<?= old('inventaris') ?>"
                            placeholder ="Masukkan Inventaris"/>
									<?php if(session()->has('errors') && session('errors.inventaris')): ?>
							<div class="text-danger mt-1">
								<?= session('errors.inventaris') ?>
							</div>
						<?php endif; ?>
					</div>
		</div>
     
        <div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Divisi</label>
            <div class="col-sm-12 col-md-10">
            <select
    id="divisi"
    class="custom-select2 form-control"
    name="divisi"
    style="width: 100%; height: 38px"
>
    <option value="">Pilih Divisi</option> <!-- Opsi default -->
    <?php foreach ($departments as $department): ?>
                                    <option value="<?= $department['id'] ?>" <?= old('divisi') == $department['id'] ? 'selected' : '' ?>><?= $department['nama_department'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (session()->has('errors') && session('errors.divisi')): ?>
                                <div class="text-danger mt-1">
                                    <?= session('errors.divisi') ?>
                                </div>
                            <?php endif; ?>


					</div>
			   
		</div>
      
        <div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Perangkat</label>
            <div class="col-sm-12 col-md-10">
            <select
                                id="perangkat"
                                class="custom-select2 form-control"
                                name="perangkat"
                                style="width: 100%; height: 38px">
                                <option value="">Pilih Perangkat</option> <!-- Opsi default -->
                                <?php foreach ($jenis_perangkat as $perangkat): ?>
                                    <option value="<?= $perangkat['id'] ?>" <?= old('perangkat') == $perangkat['id'] ? 'selected' : '' ?>><?= $perangkat['nama_perangkat'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (session()->has('errors') && session('errors.perangkat')): ?>
                                <div class="text-danger mt-1">
                                    <?= session('errors.perangkat') ?>
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

