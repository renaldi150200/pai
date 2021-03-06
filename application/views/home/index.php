<!-- Header -->
<header id="header" class="header">
  <div class="header-content">
    <div class="container">
      <div class="row">
        <div class="col-12 background-header">
        </div>
      </div> <!-- end of row -->
    </div> <!-- end of container -->
  </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- praktikum -->
<div class="container mb-5">
  <div class="row">
    <div class="col-12">
      <h1 class="mt-5">Praktikum PAI bisa <br>dilakukan #dirumahaja</h1>
    </div>
    <div class="col-12 mt-1">
      <a href="#materi" class="btn btn-primary page-scroll" style="font-family: 'Hammersmith One', sans-serif;font-size:18px;">Mulai Belajar</a>
    </div>
  </div>
</div>
<!-- end -->

<!-- Absen Yaumiyah -->
<div id="absensi" class="container-fluid absen-yaumiyah">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 mt-md-5">
        <img src="<?= base_url('assets/img/pelajar/home/'); ?>2.png" class="rounded img-fluid yaumiyah mt-3 pl-md-3">
        <h2 class="mt-5">Absensi Amalan Yaumiyah</h2>
        <br>
        <p class="font-weight-bold pr-5 text-justify" style="font-family: 'Kreon', serif;">Mutaba'ah Yaumiyah merupakan suatu kegiatan evaluasi amal ibadah sehari-hari kita baik wajib maupun sunnah, istilah umum untuk mutaba'ah yaumiyah itu sendiri kurang lebih menjadi muhasabah atau renungan untuk memperbaiki kualitas iman kita.</p>
        <a href="<?= base_url('home/amalan'); ?>" class="btn btn-primary mt-md-4" style="font-family: 'Hammersmith One', sans-serif;font-size:18px;">Mulai Absen</a>
      </div>
      <div class="col-md-5 mt-5"></div>
    </div>
  </div>
</div>
<!-- end Absen Yaumiyah -->



<!-- Materi -->
<div id="materi" class="cards-1">
  <div class="container mt-md-5">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="h2-heading ">Materi Praktikum PAI</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">

        <!-- Card -->
        <div class="card" style="width: 28rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>3.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <h5 class="card-title mt-3">Materi Wudhu</h5>
            <p class="card-text mb-4 mx-4" style="font-family: 'Nunito', sans-serif;">Kita kan belajar bersama dengan memperhatikan sikap berwudhu yang baik, benar, dan sesuai sunnah</p>
            <a href="<?= base_url('home/materiWudhu') ?>" class="btn btn-success mb-4" style="font-family: 'Nunito', sans-serif;">Mulai Belajar</a>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Card -->
        <div class="card" style="width: 28rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Materi Shalat</h5>
            <p class="card-text mb-4 mx-4" style="font-family: 'Nunito', sans-serif;">Sholat merupakan salah satu rukun islam yang patut kita pelajari, maka dari itu...Yuk belajar bersama!</p>
            <a href="<?= base_url('home/materi') ?>" class="btn btn-success mb-4" style="font-family: 'Nunito', sans-serif;">Mulai Belajar</a>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Card -->
        <div class="card" style="width: 28rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Materi Janaiz</h5>
            <p class="card-text mb-4 mx-4" style="font-family: 'Nunito', sans-serif;">Merupakan serangkaian proses pengelolaan jenazah yang patut dipahami oleh semua umat islam</p>
            <a href="<?= base_url('home/materiJanaiz') ?>" class="btn btn-success mb-4" style="font-family: 'Nunito', sans-serif;">Mulai Belajar</a>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Card -->
        <div class="card" style="width: 28rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Materi BBAQ</h5>
            <p class="card-text mb-4 mx-4" style="font-family: 'Nunito', sans-serif;">Alquran pedoman umat Islam, maka seharusnya kita membacanya dengan baik dan benar</p>
            <a href="<?= base_url('home/materiTajwid') ?>" class="btn btn-success mb-4" style="font-family: 'Nunito', sans-serif;">Mulai Belajar</a>
          </div>
        </div>
        <!-- end of Card -->

        <!-- Modal -->


        <!-- Button trigger modal -->


        <!-- Modal Materi -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Materi ini belum tersedia
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Materi -->

<!-- Praktikum -->
<div id="praktikum" class="cards-1 praktikum mb-4">
  <div class="container mt-md-5">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="h2-heading">Praktikum PAI</h2>
      </div> <!-- end of col -->
    </div> <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">

        <!-- Card -->
        <div class="card" style="width: 29rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Praktikum Wudhu</h5>
            <p class="card-text mb-4 mx-1 px-4 text-justify" style="font-family: 'Nunito', sans-serif;">Wudhu berarti membersihkan anggota wudhu (anggota tubuh yang harus dibersihkan ketika wudhu) untuk bersuci dengan menggunakan air suci lagi mensucikan. melalui praktikum ini harapannya pelajar dapat menerapkan kaidah wudhu yang sesuai dengan rukun dan sunnah.</p>
            <button type="button" class="btn btn-primary mb-4" style="font-family: 'Nunito', sans-serif;" data-toggle="modal" data-target="#exampleModal1">
              Mulai Praktikum
            </button>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Card -->
        <div class="card" style="width: 29rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Praktikum Shalat</h5>
            <p class="card-text mb-4 mx-1 px-4 text-justify" style="font-family: 'Nunito', sans-serif;">Shalat menurut ahli fiqih adalah suatu tindak ibadah disertai bacaan doa yang diawali dengan takbir dan diakhiri dengan salam sesuai dengan syarat dan rukunnya, melalui praktikum ini diharapkan siswa dapat menerapkan kaidah sholat yang sesuai dengan ilmu fiqih.</p>
            <!-- <a href="<?= base_url('home/praktikum') ?>" class="btn btn-primary mb-4">Mulai Praktikum</a> -->
            <button type="button" class="btn btn-primary mb-4" style="font-family: 'Nunito', sans-serif;" data-toggle="modal" data-target="#exampleModal1">
              Mulai Praktikum
            </button>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Card -->
        <div class="card" style="width: 29rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Praktikum Janaiz</h5>
            <p class="card-text mb-4 mx-1 px-4 text-justify" style="font-family: 'Nunito', sans-serif;">Penyelenggaraan jenazah merupakan salah satu Fardhu Qifayah, melalui materi praktikum ini harapannya setiap pelajar dapat mendapatkan pemahaman berkaitan penyelenggaraan jenazah agar dapat diimplementasikan di daerah masing-masing.</p>
            <button type="button" class="btn btn-primary mb-4" style="font-family: 'Nunito', sans-serif;" data-toggle="modal" data-target="#exampleModal1">
              Mulai Praktikum
            </button>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Card -->
        <div class="card" style="width: 29rem;border-style: solid;border-width: 2px;border-radius:4px;">
          <img src="<?= base_url('assets/img/pelajar/home/'); ?>8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title mt-3">Praktikum BBAQ</h5>
            <p class="card-text mb-4 mx-1 px-4 text-justify" style="font-family: 'Nunito', sans-serif;">Membaca alquran dengan menggunakan tajwid yang baik dan benar merupakan kewajiban setiap ummat islam. Oleh karenanya melalui praktikum ini harapannya pelajar dapat membaca Al Qur'an sesuai dengan kaidah - kaidah tajwid yang ada.</p>
            <button type="button" class="btn btn-primary mb-4" style="font-family: 'Nunito', sans-serif;" data-toggle="modal" data-target="#exampleModal1">
              Mulai Praktikum
            </button>
          </div>
        </div>
        <!-- end of Card -->
        <!-- Modal Praktikum -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Praktikum ini belum tersedia
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
        <!-- End Modal Praktikum -->

      </div> <!-- end of col -->
    </div> <!-- end of row -->
  </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of Praktikum -->
<!-- Kelas -->
<div id="kelas" class="container-fluid ">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12 mt-md-5">
        <img src="<?= base_url('assets/img/pelajar/home/'); ?>kelas.jpg" class="rounded img-fluid yaumiyah mt-3 pl-md-3">
        <h2 class="mt-5">Kelas</h2>
        <br>
        <p class="font-weight-bold pr-5 text-justify" style="font-family: 'Kreon', serif;">Kelas adalah tempat kita dimana melihat berbagai pengumuman ter-update yang diberikan mentor dan disini juga kita bisa absensi sebelum mengikuti mentoring</p>
        <a href="<?= base_url('home/evaluasi'); ?>" class="btn btn-primary mt-md-4" style="font-family: 'Hammersmith One', sans-serif;font-size:18px;">Masuk Kelas</a>
      </div>
      <div class="col-md-5 mt-5"></div>
    </div>
  </div>
</div>
<!-- end Kelas -->



<!-- Features -->
<!-- end of tabs -->
<!-- end of features -->