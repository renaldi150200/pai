<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">
            <div class="row my-4">
                <div class="col-4">
                    <form action="<?= base_url('kelompok/lihatAmalan/') . $id_kelas; ?>" method="post">
                        <select class="form-control" name="pekan">
                            <?php

                            for ($i = 1; $i <= 8; $i++) {
                                if ($pekan == $week) {
                            ?>
                                    <option selected value="<?= $pekan; ?>">Pekan <?= $i; ?></option>
                                <?php } else {
                                ?><option value="<?= $pekan; ?>">Pekan <?= $i; ?></option>
                                <?php }
                                ?>

                            <?php
                                $pekan++;
                            } ?>
                        </select>

                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary">Cek</button>
                    </form>
                </div>
            </div>
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">#</th>
                        <th rowspan="2" class="text-center">NIM</th>
                        <th rowspan="2" class="text-center">Nama</th>
                        <th colspan="8" class="text-center">Amalan Yaumiyah</th>
                    </tr>
                    <tr>
                        <th scope="col">Shalat Wajib</th>
                        <th scope="col">Shalat Dhuha</th>
                        <th scope="col">Tilawah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($absen as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php nim($r['id_mahasiswa']); ?></td>
                            <td><?php nama($r['id_mahasiswa']); ?></td>
                            <td><?php SW($week, $r['id_mahasiswa']); ?></td>
                            <td><?php SD($week, $r['id_mahasiswa']); ?></td>
                            <td><?php TL($week, $r['id_mahasiswa']); ?></td>

                            <!-- <td>
                                <a href="<?= base_url('admin_login/roleAccess/') . $r['id']; ?>" class="badge badge-warning">access</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td> -->
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->


<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="RoleModal" tabindex="-1" role="dialog" aria-labelledby="RoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="RoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>