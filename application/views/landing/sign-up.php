<!-- Header -->
<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Daftar</h1>
                <p>Sudah Selesai Daftar Silahkan <a class="white" href="<?= base_url('landing/login'); ?>">Masuk</a></p>
                <!-- Sign Up Form -->
                <div class="form-container mb-5">
                    <form method="post" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="sname" name="name" value="<?= set_value('name') ?>">
                            <label class="label-control" for="sname">Name</label>
                            <div class="help-block with-errors"></div>
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="semail" name="email" value="<?= set_value('email') ?>">
                            <label class="label-control" for="semail">Email</label>
                            <div class="help-block with-errors"></div>
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="snim" name="nim" onkeypress="return hanyaAngka(event)" value="<?= set_value('nim') ?>">
                            <label class="label-control" for="snim">NIM</label>
                            <div class="help-block with-errors"></div>
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row mb-2">
                            <div class="col-12 mt-1"><span class="font-weight-bold mb-1 float-left">Fakultas</span> </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <select class="custom-select " id="fakultas" name="fakultas">
                                        <?php foreach ($fakultas as $fk) :
                                        ?>
                                            <option value="<?= $fk['id'] ?>"><?= $fk['nama_fakultas'] ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                    <?= form_error('fakultas', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="spassword" name="password1" value="<?= set_value('password1') ?>">
                            <label class="label-control" for="spassword">Password</label>
                            <div class="help-block with-errors"></div>
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control-input" id="spassword" name="password2">
                            <label class="label-control" for="spassword">Repeat Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-4 mt-1"><span class="font-weight-bold">Daftar Sebagai</span> </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <select class="custom-select " id="role_nama" name="role_nama">
                                        <option value="pelajar">Mahasiswa</option>
                                        <option value="pengajar">Pengajar</option>
                                    </select>
                                    <?= form_error('role_nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Daftar</button>
                        </div>
                        <div class="form-message">
                            <div id="smsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of form container -->
                <!-- end of sign up form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>