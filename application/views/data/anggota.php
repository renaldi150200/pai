<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger">Masih ada form yang belum diisi</div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Anggota</button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">Departemen</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($anggota as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['nim'] ?></td>
                            <td><?= $sm['nama'] ?></td>
                            <td><?= $sm['departemen'] ?></td>
                            <td><?= $sm['angkatan'] ?></td>
                            <td><?= $sm['status'] ?></td>
                            <td>
                                <a href="<?= base_url('data/editAnggota/') ?><?= $sm['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('data/hapusAnggota/') ?><?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('data/tmbhAnggota'); ?>" method="post">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <select name="departemen" id="departemen" class="form-control">
                                <?php foreach ($departemen as $m) : ?>
                                    <option value="<?= $m; ?>"><?= $m; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="status" id="status" class="form-control">
                                <?php foreach ($status as $s) : ?>
                                    <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Angkatan">
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