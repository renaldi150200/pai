
<?php

if ($anggota == 'true') {
    ?>

<div style="margin-top:100px;"></div>
    <div class="container">
<h1 class='mx-auto'>Daftar Kelas</h1>
    <div class="row">
    <?php foreach ($data_kelas as $class): ?>
        <div class="col-12 ">
        <img src="<?=base_url('assets/img/kelas/kelas.jpg')?>" class="img-fluid" alt="Responsive image">
          <h3><?=$class['nama_kelas'];?></h3>
          <h3><?=$class['desc'];?></h3>

        </div>
        <?php endforeach;?>
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
        <form method="post" action="<?=base_url('home/cariKelas')?>">
          <div class="form-group">
            <label class="col-form-label" >Kode Kelas:</label>
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
<?php }?>
