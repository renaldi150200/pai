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
          <p style="font-family: 'Kreon', serif;font-size:18px;">Mutaba'ah Yaumiyah adalah suatu kegiatan evaluasi amal ibadah sehari-hari kita baik wajib maupun sunnah, istilah umum mutaba'ah yaumiyah kurang lebih menjadi muhasabah atau renungan untuk memperbaiki kualitas iman kita</p>
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
          <div class="col-10 col-md-6 col-lg-4 mb-2"><?= $tanggal; ?><span>
              <hr style="border-width:3px;"></span></div>
        </div>
        <div class="row font-weight-bold">
          <div class="offset-5 col-1">0</div>
          <div class="col-1">1</div>
          <div class="col-1">2</div>
          <div class="col-1">3</div>
          <div class="col-1">4</div>
          <div class="col-1">5</div>
        </div>
        <!-- end header table -->
        <div class="container mt-2 pb-5" style="font-size:19px;">

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
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatWajib" value="2">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatWajib" value="3">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatWajib" value="4">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatWajib" value="5">
              </label>
            </div>
          </div>
          <!-- end Shalat Wajib -->
          <div class="row font-weight-bold">
            <div class="offset-5 col-1">0</div>
            <div class="col-1">2</div>
            <div class="col-1">4</div>
            <div class="col-1">6</div>
            <div class="col-1">8</div>
            <div class="col-1">10 </div>
          </div> <!-- Shalat Dhuha -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#e1eef6;">
            <div class="col-5 pt-1">Shalat Dhuha (2 Raka'at /Hari)</div>
            <div class="col-1 pt-1">
              <label class="radio-inline">
                <input type="radio" name="shalatDhuha" value="0">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatDhuha" value="2">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatDhuha" value="4">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatDhuha" value="6">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatDhuha" value="8">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="shalatDhuha" value="10">
              </label>
            </div>
          </div>

          <!-- end Shalat Dhuha -->
          <div class="row font-weight-bold">
            <div class="offset-5 col-1">0</div>
            <div class="col-1">1</div>
            <div class="col-1">2</div>
            <div class="col-1">3</div>
            <div class="col-1">4</div>
            <div class="col-1">5</div>
          </div> <!-- tilawah -->
          <div class="row font-weight-bold py-2 rounded mt-2" style="background-color:#a3daff;">
            <div class="col-5 pt-1">Tilawah (2 Halaman /Hari)</div>
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
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="tilawah" value="2">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="tilawah" value="3">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="tilawah" value="4">
              </label>
            </div>
            <div class="col-1 pt-1">
              <label class="radio-inline pr-5">
                <input type="radio" name="tilawah" value="5">
              </label>
            </div>
          </div>
          <!-- end tilawah -->


          <div class="row font-weight-bold mt-4 ">
            <?php foreach ($max as $terakhir) : ?>
              <div class="col-8 col-md-4 pt-1 px-lg-4 py-2 rounded" style="background-color:#dddfe6;">Terakhir di Update Jam <?= $terakhir['jam']; ?> </div>
            <?php endforeach; ?>
            <div class="col-1  offset-md-6 pt-1 pl-4 pl-md-5 "><button type="submit" class="btn btn-success">Update</button></div>
          </div>
        </div>
      </div>


  </div>
  <!-- Form -->

  </form>
  <br>
  <!-- Absensi Amalan Yaumiyah Harian -->
</div>



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