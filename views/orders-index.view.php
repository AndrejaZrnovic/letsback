<?php require_once "views/partials/header.php"; ?>


<div class="container-fluid">
    <div class="mb-3">
        <div class="card-title text-black bg-light mb-3" style="main-width: 20rem;">
            <div class="card-header"><h2>Orders:</h2></div>
            <div class="card-body">
                <a href="/ports/create" class="btn btn-info">Add new Post</a>
            </div>
        </div>
    </div>
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


<?php require_once "views/partials/footer.php"; ?>