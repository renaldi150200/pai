
<?php

if ($anggota == 'true') {

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
    <div style="margin-bottom:250px;"></div>
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
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kode Kelas:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Cari</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
