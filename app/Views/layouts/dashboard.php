<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>
<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="title pb-20">
            <h2 class="h3 mb-0">Dashboard</h2>
        </div>

        <div class="row pb-10">
            <!-- Widget untuk MAC Address -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark"><?= $mac_count ?></div>
                            <div class="font-14 text-secondary weight-500">MAC Address</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#00eccf">
                                <i class="micon bi bi-receipt-cutoff"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Widget untuk Divisi -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark"><?= $divisi_count ?></div>
                            <div class="font-14 text-secondary weight-500">Divisi</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#ff5b5b">
                                <span class="micon bi bi-diagram-3"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Widget untuk Jenis Perangkat -->
            <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                <div class="card-box height-100-p widget-style3">
                    <div class="d-flex flex-wrap">
                        <div class="widget-data">
                            <div class="weight-700 font-24 text-dark"><?= $jenis_perangkat_count ?></div>
                            <div class="font-14 text-secondary weight-500">Jenis Perangkat</div>
                        </div>
                        <div class="widget-icon">
                            <div class="icon" data-color="#FFD700">
                                <i class="micon bi bi-laptop" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Start Section -->
        <div class="title pb-20 pt-20">
            <h2 class="h3 mb-0">Quick Start</h2>
        </div>

        <div class="row justify-content-center">
            <!-- Card for Divisi -->
            <div class="col-md-4 mb-20">
                <a href="/divisi" class="card-box d-block mx-auto pd-20 text-secondary shadow-sm rounded text-center hover-effect">
                    <div class="img pb-30">
                        <img src="/img/divisi.jpg" alt="Divisi" style="width: 100%; height:auto;max-height:150px" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Divisi</h3>
                        <p class="max-width-200 mx-auto">Divisi adalah bagian dari organisasi yang bertanggung jawab atas area tertentu atau fungsi khusus.</p>
                    </div>
                </a>
            </div>

            <!-- Card for Perangkat -->
            <div class="col-md-4 mb-20">
                <a href="/perangkat" class="card-box d-block mx-auto pd-20 text-secondary shadow-sm rounded text-center hover-effect">
                    <div class="img pb-30">
                        <img src="/img/perangkat.jpg" alt="Perangkat" style="width: 100%; height:auto;max-height:150px" />
                    </div>
                    <div class="content">
                        <h3 class="h4">Perangkat</h3>
                        <p class="max-width-200 mx-auto">Perangkat adalah alat atau sistem yang digunakan untuk melakukan fungsi tertentu.</p>
                    </div>
                </a>
            </div>

            <!-- Card for MAC Address -->
            <div class="col-md-4 mb-20">
                <a href="/userinfo" class="card-box d-block mx-auto pd-20 text-secondary shadow-sm rounded text-center hover-effect">
                    <div class="img pb-30">
                        <img src="/img/macaddress.jpg" alt="MAC Address"style="width: 100%; height:auto;max-height:150px"  />
                    </div>
                    <div class="content">
                        <h3 class="h4">MAC Address</h3>
                        <p class="max-width-200 mx-auto">MAC Address adalah alamat unik yang mengidentifikasi perangkat dalam jaringan pada setiap perangkat.</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-wrap pd-20 mb-20 card-box">
             DeskApp PT. INTI © 2024
        </div>
    </div>
</div>
<?= $this->endSection() ?>
