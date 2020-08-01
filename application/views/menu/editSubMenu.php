<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form method="post" action="">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $menu['id']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menu_id" name="menu_id" value="<?= $menu['menu_id']; ?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $menu['title']; ?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="url" name="url" value="<?= $menu['url']; ?>">
                        <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="icon" name="icon" value="<?= $menu['icon']; ?>">
                        <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $menu['is_active']; ?>" hidden>
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