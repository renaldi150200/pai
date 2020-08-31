<?php

if ($anggota == 'true') {
  // var_dump($data_pengumuman);
  // die();
?>

  <div style="margin-top:100px;"></div>
  <div class="container">
    <!-- <?php foreach ($data_kelas as $class) : ?>

    <?php endforeach; ?> -->

    <!-- Card Kelas -->
    <div class="card w-100 mb-3" style="background-color: #1ABF9B; box-shadow: 1px 1px 8px #383A3F;">
      <div class="card-body my-3">
        <h2 class="card-title text-white"><?= $class['nama_kelas']; ?></h2>
        <h4 class="card-text text-white mt-n2"><?= $class['desc']; ?></h4>
        <p class="card-text text-white mb-5"><?= $data_mentor[0]['name']; ?></p>
      </div>
    </div>
    <!-- End of Card Kelas -->

    <!-- Card Pengumuman -->
    <?php foreach ($data_pengumuman as $pengumuman) : ?>


      <div class="card w-100" style="box-shadow: 1px 1px 8px #383A3F;">
        <div class="card-body">
          <div class="row mb-3">
            <div class="col-md-1 col-2">

              <div class="lingkaran1"><img height="40px" width="40px" class="mx-1" src="<?= base_url('assets/img/profile/default1.png')  ?>"></div>
            </div>
            <div class="col-10 ml-lg-n3">
              <div class="row">
                <div class="col-12 font-weight-bold" style="font-size:16px;"><?= $data_mentor[0]['name']; ?></div>
              </div>
              <div class="row mt-n2">
                <div class="col-12 font-weight-bold text-secondary " style="font-size:13px;"><?= date('d F', strtotime($pengumuman['date'])); ?></div>
              </div>
            </div>
          </div>
          <p class="card-text font-weight-bold mb-1">Assalamu'alaikum Warahmatullahi Wabarakatuh, </p>
          <?php
          $deskripsi = $pengumuman['deskripsi'];
          $deskripsi = preg_replace("#\[sp\]#", "&nbsp;", $deskripsi);
          $deskripsi = preg_replace("#\[nl\]#", "<br>\n", $deskripsi);

          ?>
          <p class="card-text font-weight-bold mb-1"><?= $deskripsi ?></p>
          <a href="" style="text-decoration: underline; color:blue;"><?= $pengumuman['link']; ?></a><br>
          <a class="square_btn font-weight-bold mt-1">Absen</a>
        </div>
      </div>
    <?php endforeach; ?>
    <!-- End of Card Pengumuman -->
  </div>
  </div>

  <div style="margin-top:50px;"></div>
<?php
} else {
?>
  <div style="margin-top:200px;"></div>
  <!-- container -->
  <div class="container">
    <!-- alert -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      Anda belum terdaftar dikelas manapun silahkan masukkan <strong><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Kode Kelas</button>
      </strong> jika ada
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <!-- alert -->
  </div>
  <div style="margin-top:50px;"></div>
  <!-- container -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan Kode Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= base_url('home/cariKelas') ?>">
            <div class="form-group">
              <label class="col-form-label">Kode Kelas:</label>
              <input type="text" class="form-control" name="kode_kelas">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Cari</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>