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
                                <form action="<?= base_url('data/hapus/') ?>" method="post">
                                    <input type="text" name="email" value="<?= $sm['email']; ?>" hidden>
                                    <input type="text" name="id" value="<?= $sm['id']; ?>" hidden>
                                    <button type="submit" class="btn badge badge-danger" onclick="return confirm('yakin menghapus user ini ? karena semua data terkait user ini juga terhapus');">hapus</button>
                                </form>
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