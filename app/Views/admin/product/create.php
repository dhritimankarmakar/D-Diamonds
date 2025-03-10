<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('p_name') ?>Products|Create<?= $this->endSection() ?>
<?= $this->section('content') ?>


<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <form method="post" action=<?= base_url('admin/product/create') ?> enctype="multipart/form-data">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="p_name" class="form-label">Name</label>
            <input type="text" name="p_name" class="form-control" value="<?= esc(set_value('p_name')) ?>">
        </div>

        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="p_image_1" class="form-label">Image 1<span style="color:red;">&nbsp;**(For best result upload a 354x423 image)</span></label>
                <input type="file" name="p_image_1" class="form-control"
                    accept="image/png, image/jpeg, image/jpg, image/webp">
            </div>
        </div>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="p_image_2" class="form-label">Image 2<span style="color:red;">&nbsp;**(For best result upload a 354x423 image)</span></label>
                <input type="file" name="p_image_2" class="form-control"
                    accept="image/png, image/jpeg, image/jpg, image/webp">
            </div>
        </div>

        <div class="mb-3">
            <label for="p_categories" class="form-label">Category</label>
            <select name="p_categories" class="form-control">
                <option disabled selected>Choose a Category</option>
                <option value="silver" <?= set_select('p_categories', 'silver'); ?>>Silver</option>
                <option value="gold" <?= set_select('p_categories', 'gold'); ?>>Gold</option>
                <option value="diamond" <?= set_select('p_categories', 'diamond'); ?>>Diamond</option>
                <option value="others" <?= set_select('p_categories', 'others'); ?>>Others</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="p_rating" class="form-label">Rating</label>
            <input type="number" name="p_rating" value="<?= esc(set_value('p_rating')) ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="old_price" class="form-label">Old Price</label>
            <input type="number" name="old_price" value="<?= esc(set_value('old_price')) ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="new_price" class="form-label">New Price</label>
            <input type="number" name="new_price" value="<?= esc(set_value('new_price')) ?>" class="form-control">
        </div>


        <div class="mb-3">
        <label for="tag" class="form-label">Tags</label>
            <select name="p_tags" class="form-control">
                <option disabled selected>Choose a Tag</option>
                <option value="Bestseller" <?= set_select('p_tags', 'Bestseller'); ?>>Bestseller</option>
                <option value="Latest" <?= set_select('p_tags', 'Latest'); ?>>Latest</option>
                <option value="Indemand" <?= set_select('p_tags', 'Indemand'); ?>>Indemand</option>
                <option value="None" <?= set_select('p_tags', 'None'); ?>>None</option>
            </select>
        </div>


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