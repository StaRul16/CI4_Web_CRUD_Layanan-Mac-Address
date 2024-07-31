
<?= $this->extend('layouts/admin') ?>

<?= $this->section('content') ?>

<!-- Modal Konfirmasi -->
 <!-- Modal Konfirmasi -->
 <div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Apakah kamu yakin ingin menghapus seleksi item?</h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                    <div class="col-6">
                        <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        NO
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-danger border-radius-100 btn-block confirmation-btn" onclick="deleteSelected()">
                            <i class="fa fa-check"></i>
                        </button>
                        YES
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Konfirmasi Delete Single Item -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="padding-top-30 mb-30 weight-500">Apakah kamu yakin ingin menghapus item ini?</h4>
                <div class="padding-bottom-30 row" style="max-width: 170px; margin: 0 auto">
                    <div class="col-6">
                        <button type="button" class="btn btn-primary border-radius-100 btn-block confirmation-btn" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                        NO
                    </div>
                    <div class="col-6">
                        <form id="deleteForm" action="" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger border-radius-100 btn-block confirmation-btn">
                                <i class="fa fa-check"></i>
                            </button>
                            YES
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-container">
    
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>DataTable</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">MAC Address</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <a href="/userinfo/create" class="btn btn-primary">Tambah</a>
                </div>
            </div>
        </div>
        <!-- CARI  -->


        <!--  -->
        <!-- Form Pencarian -->

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <form id="deleteSelectedForm" action="<?= site_url('/userinfo/deleteSelected') ?>" method="post">
            <?= csrf_field() ?>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data Table Mac Address</h4>
                </div>
                <div class="pb-20">
                    <!-- Tabel Data -->
                    <table class="data-table table nowrap table-hover">
                        <thead> 
                            <tr>
                                <th><input type="checkbox" id="select-all"></th>
                                <th>No</th>
                                <th>MAC Address</th>
                                <th>Nama</th>
                                <th>Inventaris</th>
                                <th>Divisi</th>
                                <th>Jenis Perangkat</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dataMAC as $user): ?>
                                <?php if (isset($search) && !empty($search) && stripos($user['username'], $search) === false) continue; ?>
                                <tr>
                                    <td  class="text-truncate" style="max-width: 150px;"><input type="checkbox" name="selected[]" value="<?= $user['id'] ?>"></td>
                                    <td><?= $no++ ?></td>
                                    <td  class="text-truncate" style="max-width: 150px;"><?= $user['username'] ?></td>
                                    <td  class="text-truncate" style="max-width: 150px;"><?= $user['firstname'] ?></td>
                                    <td  class="text-truncate" style="max-width: 150px;"><?= $user['lastname'] ?></td>
                                    <td  class="text-truncate" style="max-width: 150px;">
                                        <?php foreach ($departments as $department): ?>
                                            <?php if ($user['department_id'] == $department['id']): ?>
                                                <?= $department['nama_department'] ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td class="text-truncate" style="max-width: 150px;">
                                        <?php foreach ($jenis_perangkat as $perangkat): ?>
                                            <?php if ($user['jenis_perangkat_id'] == $perangkat['id']): ?>
                                                <?= $perangkat['nama_perangkat'] ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </td>
                                    <td>
                                        <a href="<?= site_url('/userinfo/edit/' . $user['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="showDeleteModal(<?= $user['id'] ?>)">Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    
                    <button style="margin-left: 20px" type="button" class="btn btn-danger btn-sm" onclick="showConfirmationModal()">
    Delete Selected
</button>
</div>
            </div>
        </form>
    </div>
    <div class="footer-wrap pd-20 mb-20 card-box">
             DeskApp PT. INTI © 2024
        </div>
</div>
<script>
    // Script untuk memilih semua checkbox
    document.getElementById('select-all').addEventListener('change', function() {
        var checkboxes = document.querySelectorAll('input[name="selected[]"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = this.checked;
        }, this);
    });

    function showConfirmationModal() {
        $('#confirmation-modal').modal('show');
    }

    function showDeleteModal(id) {
        // Set action URL for delete form dynamically
        var deleteForm = document.getElementById('deleteForm');
        var url = '<?= site_url('/userinfo/delete/') ?>' + id;
        deleteForm.action = url;
        $('#delete-modal').modal('show');
    }

    // Function to handle deletion after confirmation
    function deleteSelected() {
        $('#confirmation-modal').modal('hide');
        document.forms['deleteSelectedForm'].submit(); // Submit deleteSelected form
    }
</script>

<?= $this->endSection()?>
