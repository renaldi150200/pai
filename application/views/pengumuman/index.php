<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-10">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= base_url('pengumuman/tambah') ?>" class="btn btn-outline-primary mb-3">Tambah Pengumuman</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal dan Jam Mulai</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pengumuman as $pengumuman_) : ?>
                        <tr>
                            <?php
                            $time = substr($pengumuman_['date'], 11, 5);
                            ?>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pengumuman_['jenis'] ?></td>
                            <td><?= $pengumuman_['nama_kelas'] ?></td>
                            <td><?= indonesian_date($pengumuman_['date'], 'l, d F Y') . $time; ?></td>
                            <td>
                                <a href="<?= base_url('pengumuman/edit/') ?><?= $pengumuman_['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('pengumuman/hapus/') ?><?= $pengumuman_['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
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

</div>
<!-- End of Main Content -->