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
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Icon</th>
                        <!-- <th scope="col">Active</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($usr as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['name'] ?></td>
                            <td><?= $sm['email'] ?></td>
                            <td><?= $sm['nama_role'] ?></td>




                            <!-- <td><?= $sm['icon'] ?></td> -->
                            <td><?= $sm['is_active'] ?></td>
                            <td>
                                <a href="<?= base_url('data/edit/') ?><?= $sm['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('data/hapus/') ?><?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
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