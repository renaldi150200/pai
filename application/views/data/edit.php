<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form method="post" action="">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $usr['id']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $usr['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $usr['email']; ?>" readonly>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <select class="custom-select form-control" name="role_id">

                            <?php foreach ($status as $k) : ?>
                                <?php if ($k['role_id'] == $usr['role_id']) : ?>
                                    <option value="<?= $k['role_id']; ?>" selected><?= $k['nama_role']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $k['role_id']; ?>"><?= $k['nama_role']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                        <small class="form-text text-danger"><?= form_error('role_id'); ?></small>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password" value="<?= $usr['password']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $usr['is_active']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="date_created" name="date_created" value="<?= $usr['date_created']; ?>" hidden>
                    </div>
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