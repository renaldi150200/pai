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
            <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">Add New Agenda</button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode Agenda</th>
                        <th scope="col">Nama Agenda</th>
                        <th scope="col">Tema</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kode Unik Agenda</th>
                        <th scope="col">Jumlah Peserta</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($agenda as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['kd_agenda'] ?></td>
                            <td><?= $sm['nama_agenda'] ?></td>
                            <td><?= $sm['tema'] ?></td>
                            <td><?= $sm['tanggal_agenda'] ?></td>
                            <td><?= $sm['kode'] ?></td>
                            <td><?= $sm['jumlah_peserta'] ?></td>
                            <td>
                                <a href="<?= base_url('agenda/edit/') ?><?= $sm['id']; ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('agenda/hapus/') ?><?= $sm['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                                <form action="<?= base_url('agenda/upload/') ?>" method="POST">
                                    <input type="text" name="id" id="id" value="<?= $sm['id']; ?>" hidden>
                                    <input type="text" name="nama" id="nama" value="<?= $sm['nama_agenda']; ?>" hidden>
                                    <input type="text" name="tema" id="tema" value="<?= $sm['tema']; ?>" hidden>
                                    <input type="text" name="tanggal" id="tanggal" value="<?= $sm['tanggal_agenda']; ?>" hidden>
                                    <button type="submit" class="badge badge-primary" onclick="return confirm('yakin?');">Upload</button>
                                </form>
                                <a href="<?= base_url('agenda/selesai/') ?><?= $sm['id']; ?>" class="badge badge-secondary" onclick="return confirm('yakin?');">Selesai</a>
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
            <form action="<?= base_url('agenda/tmbhAgenda'); ?>" method="post">
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="kd_agenda" name="kd_agenda" placeholder="Kode Agenda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Agenda">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tema" name="tema" placeholder="Tema">
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
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