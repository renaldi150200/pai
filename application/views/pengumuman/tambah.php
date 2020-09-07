<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-10">
            <form method="post" action="" onsubmit="addNewLine();">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="jenis">
                        <option selected>Pilih</option>
                        <option value="pertemuan">Pertemuan</option>
                        <option value="tugas">Tugas</option>
                    </select>
                    <?= form_error('jenis', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="kelas">
                        <option selected>Pilih</option>
                        <?php foreach ($id_kelas as $kelas) : ?>
                            <option value="<?= $kelas['id']; ?>"><?= $kelas['nama_kelas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Link</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="link" placeholder="Link">
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal">
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 pt-lg-4 ">
                        <p class="mt-lg-2 ml-lg-4 font-weight-bold">Dari</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jam</label>
                            <input type="time" class="form-control" id="exampleFormControlInput1" name="jam">
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 pt-lg-4 ">
                        <p class="mt-lg-2 ml-lg-4 font-weight-bold">Sampai</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jam Expired</label>
                            <input type="time" class="form-control" id="exampleFormControlInput1" name="jam_expired">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deksripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->