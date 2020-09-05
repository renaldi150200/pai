<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-10">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2" class="text-center">#</th>
                        <th rowspan="2" class="text-center">NIM</th>
                        <th rowspan="2" class="text-center">Nama</th>
                        <th colspan="8" class="text-center">Pertemuan</th>
                    </tr>
                    <tr>
                        <th scope="col">1</th>
                        <th scope="col">2</th>
                        <th scope="col">3</th>
                        <th scope="col">4</th>
                        <th scope="col">5</th>
                        <th scope="col">6</th>
                        <th scope="col">7</th>
                        <th scope="col">8</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($absen as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?php nim($r['id_mahasiswa']); ?></td>
                            <td><?php nama($r['id_mahasiswa']); ?></td>
                            <td><?php hadir($r['pertemuan_1']); ?></td>
                            <td><?php hadir($r['pertemuan_2']); ?></td>
                            <td><?php hadir($r['pertemuan_3']); ?></td>
                            <td><?php hadir($r['pertemuan_4']); ?></td>
                            <td><?php hadir($r['pertemuan_5']); ?></td>
                            <td><?php hadir($r['pertemuan_6']); ?></td>
                            <td><?php hadir($r['pertemuan_7']); ?></td>
                            <td><?php hadir($r['pertemuan_8']); ?></td>

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

</div>
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