<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Testimonials|Edit<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>




    <form method="post" action=<?= base_url('admin/testimonials/edit/' . $prod['test_id']) ?>
        enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div id="img-container" style="width: 300px;" class="m-5">
            <img class="img-fluid rounded"
                src="<?= base_url('public/assets/img/testimonials/' . $prod['test_image']) ?>" alt="No image">
        </div>
        <div class="mb-3">
            <label for="test_name" class="form-label">Name</label>
            <input type="text" name="test_name" class="form-control" value="<?= $prod['test_name'] ?>">
        </div>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="test_image" class="form-label">Image<span style="color:red;">&nbsp;**(For best result upload a 300x300 image)</span></label>
                <input type="file" name="test_image" class="form-control"
                accept="image/png, image/webp, image/jpeg, image/jpg">
            </div>
        </div>
        
        <div class="mb-3">
            <label for="test_review" class="form-label">Review</label>
            <input type="text" name="test_review" class="form-control" value="<?= $prod['test_review'] ?>">
        </div>
        
        <div class="mb-3">
            <label for="test_profession" class="form-label">Profession</label>
            <input type="text" name="test_profession" class="form-control" value="<?= $prod['test_profession'] ?>">
        </div>







        <div class="mb-3">

            <label for="test_order_by" class="form-label">Order</label>
            <input type="number" name="test_order_by" class="form-control" value="<?= $prod['test_order_by'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
<?= $this->endSection() ?>
</div>