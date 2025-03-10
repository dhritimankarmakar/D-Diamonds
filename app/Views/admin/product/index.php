<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Tours<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <div>
        <a href="<?= base_url('admin/product/create') ?>"><button type="button" class="btn btn-primary m-2">
                Add
            </button></a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Old Price</th>
                            <th>New Price</th>
                            <th>Rating</th>
                            <th>Tags</th>


                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prod as $key => $p):
                            ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td> <img src="<?= base_url('public/assets/img/products/' . $p['p_image_1']) ?>"
                                        class="img-circle elevation-2" style="height :50px ; width:50px"> </td>
                                <td> <img src="<?= base_url('public/assets/img/products/' . $p['p_image_2']) ?>"
                                        class="img-circle elevation-2" style="height :50px ; width:50px"> </td>
                                <td><?= $p['p_name'] ?></td>
                                <td> <?= ucfirst($p['p_categories']) ?></td>
                                <td> <?= ucfirst($p['old_price']) ?></td>
                                <td> <?= ucfirst($p['new_price']) ?></td>
                                <td> <?= ucfirst($p['p_rating']) ?></td>
                                <td> <?= ucfirst($p['p_tags']) ?></td>


                                <td><a href="<?= base_url("/admin/product/edit/" . $p["p_id"]) ?>" class="text-white"><button
                                            class="btn-success btn">View</button></a></td>
                                <td><a href="<?= base_url("/admin/product/delete/" . $p['p_id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure to delete <?= $p['p_name'] ?>?')"><button
                                            class="btn-danger btn">Delete</button></a></td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Old Price</th>
                            <th>New Price</th>
                            <th>Rating</th>
                            <th>Tags</th>

                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</main>

<?= $this->endSection() ?>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->

<!-- /.control-sidebar -->