<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Banners|Edit<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>




    <form method="post" action=<?= base_url('admin/banner/edit/' . $prod['banner_id']) ?> enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div id="img-container" style="width: 300px;" class="m-5">
            <img class="img-fluid rounded"
                src="<?= base_url('public/assets/img/banner/' . $prod['banner_image']) ?>"
                alt="No image">
        </div>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="banner_image" class="form-label">Banner Image <span style="color:red;">&nbsp;**(For best result upload a 2400x980 image)</span></label>
                <input type="file" name="banner_image" class="form-control"
                    accept="image/png, image/webp, image/jpeg, image/jpg">
            </div>
        </div>




        <div class="mb-3">
            <label for="banner_title" class="form-label">Banner Name</label>
            <input type="text" name="banner_title" class="form-control" value="<?= $prod['banner_title'] ?>">
        </div>






        <div class="mb-3">

            <label for="banner_order_by" class="form-label">Order</label>
            <input type="number" name="banner_order_by" class="form-control" value="<?= $prod['banner_order_by'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
<?= $this->endSection() ?>
</div>