<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('message1'); ?>
    <div class="row">
        <div class="col-lg-10">
            <form method="post" action="" onsubmit="addNewLine();">
                <div class="form-group row">
                    <label for="id_menu" class="col-lg-2 col-form-label">Id Pengumuman</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $pengumuman['id']; ?>" readonly>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="jenis">
                        <?php
                        if ($pengumuman['jenis'] == 'pertemuan') {
                        ?>
                            <option value="pertemuan" selected>Pertemuan</option>
                        <?php
                        } else {
                        ?>
                            <option value="pertemuan">Pertemuan</option>
                        <?php
                        }
                        ?>

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
                        <?php foreach ($id_kelas as $kelas) :
                            if ($kelas['id'] == $pengumuman['id_kelas']) {
                        ?>
                                <option value="<?= $kelas['id']; ?>" selected><?= $kelas['nama_kelas']; ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $kelas['id']; ?>"><?= $kelas['nama_kelas']; ?></option>
                            <?php
                            }
                            ?>

                        <?php endforeach; ?>
                    </select>
                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlInput1" class="col-sm-1 col-form-label">Link</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="link" value="<?= $pengumuman['link']; ?>">
                    </div>
                </div>
                <?php

                $tanggal = substr($pengumuman['date'], 0, 10);
                $time = substr($pengumuman['date'], 11, 5);
                $time_expired = substr($pengumuman['date_expired'], 11, 5);
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal" value="<?= $tanggal ?>">
                            <?= form_error('date', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 pt-lg-4 ">
                        <p class="mt-lg-2 ml-lg-4 font-weight-bold">Dari</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jam</label>
                            <input type="time" class="form-control" id="exampleFormControlInput1" name="jam" value="<?= $time ?>">
                            <?= form_error('jam', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 pt-lg-4 ">
                        <p class="mt-lg-2 ml-lg-4 font-weight-bold">Sampai</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jam Expired</label>
                            <input type="time" class="form-control" id="exampleFormControlInput1" name="jam_expired" value="<?= $time_expired ?>">
                            <?= form_error('jam_expired', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deksripsi</label>
                    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" style="display: none;"></textarea>
                    <textarea class="form-control" id="userFied" rows="3"></textarea>
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    <!-- Script untuk multi line -->
                    <script>
                        function addNewLine() {
                            text = document.getElementById('userFied').value;
                            text = text.replace(/  /g, "[sp][sp]");
                            text = text.replace(/\n/g, "[nl]");
                            document.getElementById('deskripsi').value = text;
                            return false;
                        }
                    </script>
                    <!-- End of Script untuk multi line -->
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->