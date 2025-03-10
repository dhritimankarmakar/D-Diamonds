<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('banner_title') ?>Banner|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/banner/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="banner_image" class="form-label">Banner Image <span style="color:red;">&nbsp;**(For best result upload a 2400x980 image)</span></label>
                <input type="file" name="banner_image" class="form-control" accept="image/png, image/jpeg, image/jpg, image/webp">
            </div>
        </div>

        <!-- <div class="mb-3">
            <label for="p_categories" class="form-label">Category</label>
            <select name="p_categories" class="form-control">
                <option disabled selected>Choose a Category</option>
                <option value="silver" <?= set_select('p_categories', 'silver'); ?>>Silver</option>
                <option value="gold" <?= set_select('p_categories', 'gold'); ?>>Gold</option>
                <option value="diamond" <?= set_select('p_categories', 'diamond'); ?>>Diamond</option>
                <option value="gems" <?= set_select('p_categories', 'gems'); ?>>Gems</option>
            </select>
        </div> -->


        <div class="mb-3">
            <label for="banner_title" class="form-label"> Banner Title</label>
            <input type="text" name="banner_title" class="form-control" value="<?= esc(set_value('banner_title')) ?>">
        </div>




        <div class="mb-3">
            <label for="banner_order_by" class="form-label">Order No.</label>
            <input type="number" name="banner_order_by" value="<?= esc(set_value('banner_order_by')) ?>" class="form-control">
        </div>
        <!-- <div class="mb-3">
        <label for="tag" class="form-label">Tags</label>
            <select name="p_tags" class="form-control">
                <option disabled selected>Choose a Tag</option>
                <option value="Bestseller" <?= set_select('p_tags', 'Bestseller'); ?>>Bestseller</option>
                <option value="Latest" <?= set_select('p_tags', 'Latest'); ?>>Latest</option>
                <option value="Offer" <?= set_select('p_tags', 'Offer'); ?>>Offer</option>
                <option value="None" <?= set_select('p_tags', 'None'); ?>>None</option>
            </select>
        </div> -->
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</main>

<?= $this->endSection() ?>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->