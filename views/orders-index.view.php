<?php require_once "views/partials/header.php"; ?>


<div class="col-sm-3">
        <?php require_once "views/partials/user.php";?>
</div>
<div class="col-sm-9">
    <div class="container-fluid tableContainer">
        <div class="tableTitle">
            <div class="buttonDiv">
                <a href="/orders/create" class="btn btn-info">Add new Post</a>
            </div>
            <div class="titlePage">
                <h2>Orders:</h2>
            </div>
            </div>
            <div class="row wrapperTable">
                <div class="col-12">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>Customer</th>
                            <th>Ship</th>
                            <th>Port</th>
                            <th>Cargo</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td><?= $order->customer_id ?></td>
                                <td><?= $order->ship_id?></td>
                                <td><?= $order->port_id?></td>
                                <td><?= $order->cargo_id?></td>
                                <td><a href="/orders/show?id=<?= $order->id ?>" class="btn btn-info">Show</a> <a href="/orders/edit?id=<?=
                                    $order->id ?>" class="btn btn-warning">Edit</a> <a href="/orders/destroy?id=<?=
                                    $order->id ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


<?php require_once "views/partials/footer.php"; ?>




