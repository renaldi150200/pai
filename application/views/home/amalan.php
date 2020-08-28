<div class="container">
  <div class="row">
    <div class="col-md-12 col-12 mt-5">
    </div>
  </div>
  <!-- Absen Yaumiyah -->
  <div class="container-fluid absen-yaumiyah ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 mt-md-5">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>2.png" class="rounded img-fluid yaumiyah mt-3">
          <h1>Absensi Amalan</h1>
          <h1>Yaumiyah</h1>
          <br>
          <p>Mutaba'ah Yaumiyah adalah suatu kegiatan evaluasi amal sehari-hari kita baik wajib maupun sunnah, istilah umum mutaba'ah yaumi kurang lebih menjadi muhasabah atau renungan untuk memperbaiki kualitas iman kita</p>
        </div>
        <div class="col-md-5 mt-5"></div>
      </div>
    </div>
  </div>
  <!-- end Absen Yaumiyah -->
  <div class="container mt-n3">
    <hr class="hr">
  </div>
  <br>
  <!-- Absensi Amalan Yaumiyah Harian -->
  <div class="container bg-light rounded mb-5">
    <h3 class="pt-3">Absensi Amalan Yaumiyah Harian</h3>
    <?= $this->session->flashdata('message'); ?>
    <hr>
    <form class="mt-2" method="post" action="<?= base_url('home/amalanPekanan'); ?>">
      <!-- Form -->
      <div class="container" style="font-size:21px;">
        <!-- Header Table -->
        <div class="row font-weight-bold">
          <div class="col-5"><?= $tanggal; ?></div>
          <div class="col-1"><span class="fas fa-times"></span></div>
          <div class="col-1"><span class="fas fa-check"></span></div>
          <div class="col-5">Keterangan</div>
        </div>
        <!-- end header table -->
        <div class="container mt-2" style="font-size:19px;">

          <!-- Shalat Wajib -->
          <div class="row font-weight-bold py-2 rounded" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Shalat Wajib Tepat Waktu (3x /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="shalatWajib" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatWajib" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_shalatWajib"></div>
            <?= form_error('shalatWajib', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end Shalat Wajib -->

          <!-- Shalat Tahajjud -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#e1eef6;">
            <div class="col-5 pt-1">Shalat Tahajjud (2 Raka'at /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="shalatTahajjud" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatTahajjud" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_shalatTahajjud"></div>
            <?= form_error('shalatTahajjud', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end Shalat Tahajjud -->

          <!-- Shalat Dhuha -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Shalat Dhuha (2 Raka'at /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="shalatDhuha" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatDhuha" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_shalatDhuha"></div>
            <?= form_error('shalatDhuha', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end Shalat Dhuha -->

          <!-- DzikirPagi -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#e1eef6;">
            <div class="col-5 pt-1">Dzikir Pagi (1x /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="dzikirPagi" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="dzikirPagi" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_dzikirPagi"></div>
            <?= form_error('dzikirPagi', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end DzikirPagi -->

          <!-- DzikirPetang -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Dzikir Petang (1x /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="dzikirPetang" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="dzikirPetang" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_dzikirPetang"></div>
            <?= form_error('dzikirPetang', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end DzikirPetang -->

          <!-- tilawah -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#e1eef6;">
            <div class="col-5 pt-1">Tilawah (1 Halaman /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="tilawah" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="tilawah" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_tilawah"></div>
            <?= form_error('tilawah', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end tilawah -->

          <!-- istighfar -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Istighfar (70x /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="istighfar" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="istighfar" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_istighfar"></div>
            <?= form_error('istighfar', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end istighfar -->

          <!-- birulWalidain -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#e1eef6;">
            <div class="col-5 pt-1">Birul Walidain (1x /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="birulWalidain" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="birulWalidain" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_birulWalidain"></div>
            <?= form_error('birulWalidain', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end birulWalidain -->

          <!-- menontonKajian -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Menonton Kajian (1x /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="menontonKajian" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="menontonKajian" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_menontonKajian"></div>
            <?= form_error('menontonKajian', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
          <!-- end menontonKajian -->

          <div class="row font-weight-bold mt-4">
            <div class="col-4 pt-1 px-lg-4 py-2 rounded" style="background-color:#dddfe6;">Terakhir di Update Jam 20:59</div>
            <div class="col-1 offset-lg-7 offset-md-6 pt-1 "><button type="submit" class="btn btn-success">Update</button></div>

          </div>
        </div>


      </div>
      <!-- Form -->

    </form>
    <br>
    <!-- Absensi Amalan Yaumiyah Harian -->
  </div>

  <!-- Absensi Amalan Yaumiyah Mingguan -->
  <div class="container bg-light rounded pb-4" style="margin-bottom:250px;">
    <h3 class="pt-3">Absensi Amalan Yaumiyah Pekanan</h3>
    <hr>
    <form class="mt-2" method="post" action="<?= base_url('home/amalanPekanan'); ?>">
      <!-- Form -->
      <div class="container" style="font-size:21px;">
        <!-- Header Table -->
        <div class="row font-weight-bold">
          <div class="col-5"><?= $tanggal; ?></div>
          <div class="col-1"><span class="fas fa-times"></span></div>
          <div class="col-1"><span class="fas fa-check"></span></div>
          <div class="col-5">Keterangan</div>
        </div>
        <!-- end header table -->
        <div class="container mt-2" style="font-size:19px;">

          <!-- shaumSunnah -->
          <div class="row font-weight-bold py-2 rounded" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Shaum Sunnah (1x /Pekan)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="shaumSunnah" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shaumSunnah" value="1">
              </label>
            </div>
            <div class="col-5"><input type="text" class="form-control" name="ket_shaumSunnah"></div>
          </div>
          <!-- end shaumSunnah -->


          <div class="row font-weight-bold mt-4">
            <div class="col-7 pt-1 px-lg-5 py-2 rounded" style="background-color:#dddfe6;">Terakhir di Update <?= $tanggal; ?> Jam 20:59</div>
            <div class="col-1 offset-lg-4 offset-md-6 pt-1 "><button type="submit" class="btn btn-success">Update</button></div>

          </div>
        </div>


      </div>
      <!-- Form -->

    </form>
    <br>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Absen Amalan Yaumiyah Berhasil
          </div>
          <div class="modal-footer">
            <a href="<?= base_url('home/amalanPekanan'); ?>" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
          </div>
        </div>
      </div>
    </div>

    <!-- end of Modal -->
  </div>

</div>