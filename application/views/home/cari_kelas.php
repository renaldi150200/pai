<div style="margin-top:100px;"></div>
<div class="container">
    <div class="row">
        <?= $this->session->flashdata('message'); ?>
        <?php foreach ($kelas as $class) : ?>
            <div class="col-12 col-md-4">
                <div class="card mb-3">
                    <img src="<?= base_url('assets/img/kelas/kelas.jpg') ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $class['nama_kelas']; ?></h5>
                        <p class="card-text"><?= $class['desc']; ?></p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        <form action="<?= base_url('home/daftarKelas') ?>" method="post">
                            <input type="text" name="id_kelas" value="<?= $class['id']; ?>" hidden>
                            <button type="submit" class="btn btn-dark">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>