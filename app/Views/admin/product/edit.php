<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Products|Edit<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>




    <form method="post" action=<?= base_url('admin/product/edit/' . $prod['p_id']) ?> enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div id="img-container" style="width: 300px;" class="m-5">
            <img class="img-fluid rounded" src="<?= base_url('public/assets/img/products/' . $prod['p_image_1']) ?>"
                alt="No image">
        </div>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="p_image_1" class="form-label">Product Image 1</label>
                <input type="file" name="p_image_1" class="form-control"
                    accept="image/png, image/webp, image/jpeg, image/jpg">
            </div>
        </div>
        <div class="mb-3">
            <div id="img-container" class="mb-1 border-danger">
                <label for="p_image_2" class="form-label">Product Image 1</label>
                <input type="file" name="p_image_2" class="form-control"
                    accept="image/png, image/webp, image/jpeg, image/jpg">
            </div>
        </div>
        <?php $saved_cat = $prod['p_categories']; ?>
        <div class="mb-3">
            <label for="p_categories" class="form-label">Category</label>
            <select name="p_categories" class="form-control">
                <option disabled <?= empty($saved_cat) ? 'selected' : ''; ?>>Choose a Category</option>
                <option value="silver" <?= set_select('p_categories', 'silver', ($saved_cat == 'silver')); ?>>Silver
                </option>
                <option value="gold" <?= set_select('p_categories', 'gold', ($saved_cat == 'gold')); ?>>Gold</option>
                <option value="diamond" <?= set_select('p_categories', 'diamond', ($saved_cat == 'diamond')); ?>>Diamond
                </option>
                <option value="others" <?= set_select('p_categories', 'others', ($saved_cat == 'others')); ?>>Others</option>
            </select>
        </div>




        <div class="mb-3">
            <label for="p_name" class="form-label">Product Name</label>
            <input type="text" name="p_name" class="form-control" value="<?= $prod['p_name'] ?>">
        </div>
        <?php $saved_tag = $prod['p_tags'];
        ?>






        <div class="mb-3">
            <label for="p_tags" class="form-label">Tag</label>
            <select name="p_tags" class="form-control">
                <option disabled <?= empty($saved_tag) ? 'selected' : ''; ?>>Choose a Tag</option>
                <option value="Bestseller" <?= set_select('p_tags', 'Bestseller', ($saved_tag == 'Bestseller')); ?>>
                    Bestseller</option>
                <option value="Latest" <?= set_select('p_tags', 'Latest', ($saved_tag == 'Latest')); ?>>Latest</option>
                <option value="Indemand" <?= set_select('p_tags', 'Indemand', ($saved_tag == 'Indemand')); ?>>Indemand</option>
                <option value="None" <?= set_select('p_tags', 'None', (empty($saved_tag) || $saved_tag == 'None')); ?>>None
                </option>
            </select>
        </div>

        <div class="mb-3">

            <label for="p_rating" class="form-label">Rating</label>
            <input type="number" name="p_rating" class="form-control" value="<?= $prod['p_rating'] ?>">
        </div>

        <div class="mb-3">

            <label for="old_price" class="form-label">Rating</label>
            <input type="number" name="old_price" class="form-control" value="<?= $prod['old_price'] ?>">
        </div>

        <div class="mb-3">

            <label for="new_price" class="form-label">Rating</label>
            <input type="number" name="new_price" class="form-control" value="<?= $prod['new_price'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>
<?= $this->endSection() ?>
</div>