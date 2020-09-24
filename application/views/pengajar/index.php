<div class="container">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">

        <?php foreach ($kelas as $class) : ?>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <div class="dropdown" style="margin-bottom: -45px; margin-left:303px;">
                        <button class="btn " style="color:#000;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" style="background: transparent;" data-toggle="modal" data-target="#exampleModal2">Edit Kelas</button>
                            <button class="dropdown-item" style="background: transparent;" data-toggle="modal" data-target="#exampleModal">Hapus Kelas</button>
                            <a class="dropdown-item" href="<?= base_url('kelompok/lihatAnggota/') . $class['id']; ?>">Lihat Anggota Kelas</a>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/img/kelas/kelas.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $class['nama_kelas']; ?></h5>
                        <p class="card-text"><?= $class['desc']; ?></p>
                        <p class="card-text"><small class="text-muted">Kode Kelas : <?= $class['kode_kelas']; ?></small></p>
                        <a href="<?= base_url('kelompok/absen/') . $class['id']; ?>" class="btn btn-dark">Lihat Absen</a>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus Kelas -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin untuk menghapus kelas ini ?
                            <br>Karena semua data terkait kelas ini akan terhapus juga
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="<?= base_url('kelompok/hapusKelas/') ?>" method="post">
                                <input type="text" name="id_kelas" value="<?= $class['id']; ?>" hidden>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Hapus Kelas -->

            <!-- Modal Edit Kelas-->
            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= base_url('kelompok/editKelas'); ?>">
                                <input type="text" name="id_kelas" value="<?= $class['id']; ?>" hidden>
                                <div class="form-group">
                                    <label class="col-form-label">Nama Kelas</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?= $class['nama_kelas']; ?>" name="nama_kelas">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Deskripsi Kelas</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?= $class['desc']; ?>" name="desc">
                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Edit Kelas</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

</div>

<!-- End Modal Edit Kelas -->