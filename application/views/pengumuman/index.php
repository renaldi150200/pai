<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Pengumuman</button>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pengumuman as $pengumuman_) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $pengumuman_['jenis'] ?></td>
                            <td><?= $pengumuman_['nama_kelas'] ?></td>
                            <td><?= $pengumuman_['date'] ?></td>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm-xl modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pengumuman/index'); ?>" method="post">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Jenis</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="jenis">
                            <option selected>Pilih</option>
                            <option value="pertemuan">Pertemuan</option>
                            <option value="tugas">Tugas</option>
                        </select>
                        <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="kelas">
                            <option selected>Pilih</option>
                            <?php foreach ($id_kelas as $kelas) : ?>
                                <option value="<?= $kelas['id']; ?>"><?= $kelas['nama_kelas']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link" placeholder="Link">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tanggal</label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jam</label>
                                <input type="time" class="form-control" id="exampleFormControlInput1" name="jam">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deksripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
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