
<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid table">
    <div class="tableTitle">
        <a href="/ports/create" class="btn btn-info">Add new Post</a>
    </div>
    <div class="row wrapperTable">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <?php foreach ($ports as $port): ?>
                    <tr>
                        <td><?= $port->id ?></td>
                        <td><?= $port->name ?></td>
                        <td><?= $port->code ?></td>
                        <td><a href="/ports/show?id=<?= $port->id ?>" class="btn btn-info">Show</a> <a href="/port/edit?id=<?=
                            $port->id ?>" class="btn btn-warning">Edit</a> <a href="/ports/destroy?id=<?=
                            $port->id ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</div>

<?php require_once "views/partials/user.php";?>
<?php require_once "views/partials/footer.php"; ?>