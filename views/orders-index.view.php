<?php require_once "views/partials/header.php"; ?>



<div class="container-fluid tableContainer">
    <div class="tableTitle">
        <a href="/orders/create" class="btn btn-info">Add new Post</a>
    </div>
    <div class="row wrapperTable">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?= $order->id ?></td>
                        <td><?= $order->title ?></td>
                        <td><a href="/posts/show?id=<?= $order->id ?>" class="btn btn-info">Show</a> <a href="/order/edit?id=<?=
                            $order->id ?>" class="btn btn-warning">Edit</a> <a href="/orders/destroy?id=<?=
                            $order->id ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<?php require_once "views/partials/user.php";?>
<?php require_once "views/partials/footer.php"; ?>