<div class="container">
    <div class="row">

        <?php foreach ($kelas as $class) : ?>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="<?= base_url('assets/img/kelas/kelas.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $class['nama_kelas']; ?></h5>
                        <p class="card-text"><?= $class['desc']; ?></p>
                        <p class="card-text"><small class="text-muted">Kode Kelas : <?= $class['kode_kelas']; ?></small></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>