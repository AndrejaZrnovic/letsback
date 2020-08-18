<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid table">
    <div class="tableTitle">
        <a href="/ships/create" class="btn btn-info">Add new Post</a>
    </div>
    <div class="row wrapperTable">
        <div class="col-12 md-6">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <?php foreach ($ships as $ship): ?>
                    <tr>
                        <td><?= $ship->id ?></td>
                        <td><?= $ship->name ?></td>
                        <td><?= $ship->type ?></td>
                        <td><a href="/ships/show?id=<?= $ship->id ?>" class="btn btn-info">Show</a> <a href="/ships/edit?id=<?=
                            $ship->id ?>" class="btn btn-warning">Edit</a> <a href="/ships/destroy?id=<?=
                            $ship->id ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>


<?php require_once "views/partials/user.php";?>
<?php require_once "views/partials/footer.php"; ?>