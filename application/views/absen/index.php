<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message'); ?>
    <?php foreach ($agenda as $sm) : ?>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body ba"><span class="text-l font-weight-bold text-uppercase text-info a"><?= $sm['nama_agenda'] ?></span><span class="c text-m text-info"><?= $sm['tanggal_agenda'] ?></span>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-2 mt-1"><?= $sm['tema'] ?></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                                        Absen
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Masukkan Kode</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('absen/agenda') ?>" method="post">
                                                        <input type="text" class="form-control" id="kode" name="kode">
                                                        <input type="text" id="koin_aljazari" name="koin_aljazari" value="<?= $anggota['koin_aljazari'] += 1 ?>" hidden>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    <input type="text" id="kd_agenda" name="kd_agenda" value="<?= $sm['kd_agenda'] ?>" hidden>
                                                    <input type="text" id="nim" name="nim" value="<?= $anggota['nim'] ?>" hidden>
                                                    <input type="text" id="jenkel" name="jenkel" value="<?= $anggota['jenkel'] ?>" hidden>
                                                    <div><button type="submit" onclick="hapus" class="btn btn-primary klik">Submit</button></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->