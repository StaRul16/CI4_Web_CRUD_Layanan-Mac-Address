<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<div class="main-container">
  <div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
   
      <div class="page-header">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="title">
              <h4>DataTable</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Perangkat</li>
              </ol>
            </nav>
          </div>
          <div class="col-md-6 col-sm-12 text-right">
          <a href="/perangkat/create" class="btn btn-primary">Tambah</a>
          </div>
        </div>
      </div>
      <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
      <!-- Simple Datatable start -->

      <!-- Simple Datatable End -->
      <!-- multiple select row Datatable start -->

      <!-- multiple select row Datatable End -->
      <!-- Checkbox select Datatable start -->
      <div class="card-box mb-30">
        <div class="pd-20">
            
          <h4 class="text-blue h4">Data Table Perangkat</h4>
          
        </div>
        <div class="pb-20">
          <table class="checkbox-datatable table nowrap">
            <thead>
              <tr>
                <th>
                  <div class="dt-checkbox">
                    <input type="checkbox" name="select_all" value="1" id="example-select-all" />
                  <span class="dt-checkbox-label"></span>
                  </div>
                </th>
                <th>ID</th>
                <th>Nama Perangkat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($jenis_perangkat as $row): ?>
        <tr>
            <td></td>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_perangkat'] ?></td>

            <td>
                <a href="/perangkat/edit/<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                <form action="/perangkat/delete/<?= $row['id'] ?>" method="post" style="display:inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
              
            </tbody>
          </table>
        </div>
      </div>
      <!-- Checkbox select Datatable End -->
      <!-- Export Datatable start -->

      <!-- Export Datatable End -->
    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
             DeskApp PT. INTI © 2024
        </div>
  </div>
</div>

<?= $this->endSection() ?>
