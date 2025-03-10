<?= $this->extend('admin/components/assemble') ?>
<?= $this->section('title') ?>Tours<?= $this->endSection() ?>
<?= $this->section('content') ?>

<main>
    <?= $this->include('/admin/components/alert_message'); ?>
    <div>
        <a href="<?= base_url('admin/banner/create') ?>"><button type="button" class="btn btn-primary m-2">
                Add
            </button></a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Banner</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Banner Name</th>
                            <th>Order</th>

                            <th>Actions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($prod as $key => $p):
                            ?>
                            <tr>
                                <th scope="row"><?= $key + 1 ?></th>
                                <td> <img src="<?= base_url('public/assets/img/banner/' . $p['banner_image']) ?>"
                                        class="img-circle elevation-2" style="height :50px ; width:50px"> </td>
                                <td><?= $p['banner_title'] ?></td>
                                <td><?= $p['banner_order_by'] ?></td>
                                

                                <td><a href="<?= base_url("/admin/banner/edit/" . $p["banner_id"]) ?>" class="text-white"><button
                                            class="btn-success btn">View</button></a></td>
                                <td><a href="<?= base_url("/admin/banner/delete/" . $p['banner_id']) ?>" class="text-white"
                                        onclick="return confirm('Are you sure to delete <?= $p['banner_title'] ?>?')"><button
                                            class="btn-danger btn">Delete</button></a></td>
                            </tr>

                        <?php endforeach ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Order</th>

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