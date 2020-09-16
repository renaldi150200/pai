<div class="container">
    <div class="row">

        <?php foreach ($kelas as $class) : ?>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <div class="dropdown" style="margin-bottom: -45px; margin-left:303px;">
                        <button class="btn " style="color:#000;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Edit Kelas</a>
                            <a class="dropdown-item" href="#">Hapus Kelas</a>
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
        <?php endforeach; ?>
    </div>
</div>