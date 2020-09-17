<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


  <div class="row">
    <div class="col-lg-10">
      <?= $this->session->flashdata('message'); ?>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($kelas as $class) :

          endforeach;

          $i = 1; ?>
          <?php foreach ($absen as $r) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?php nim($r['id_mahasiswa']); ?></td>
              <td><?php nama($r['id_mahasiswa']); ?></td>
              <td>
                <button type="button" class="btn badge badge-danger" data-toggle="modal" data-target="#hapus">Hapus</button>
                <!-- <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a> -->
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


<!-- End of Main Content -->


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin untuk mengeluarkannya dari kelas ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form action="<?= base_url('kelompok/hapusAnggota/') ?>" method="post">
          <input type="text" name="id_mahasiswa" value="<?= $r['id_mahasiswa']; ?>" hidden>
          <input type="text" name="id_kelas" value="<?= $class['id']; ?>" hidden>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>