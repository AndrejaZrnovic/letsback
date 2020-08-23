<?php require_once "views/partials/header.php"; ?>

<div class="col-sm-3">
    <?php require_once "views/partials/user.php";?>
</div>
<div class="col-sm-9">
    <div class="container-fluid table">
        <div class="tableTitle">
            <div class="buttonDiv">
            <a href="/users/create" class="btn btn-info">Add new Post</a>
            </div>
            <div class="titlePage">
                <h2>Users:</h2>
            </div>
            </div>
            <div class="row wrapperTable">
                <div class="col-12">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->id ?></td>
                                <td><?= $user->name ?></td>
                                <td><?= $user->email ?></td>
                                <td><a href="/users/show?id=<?= $user->id ?>" class="btn btn-info">Show</a> <a href="/users/edit?id=<?=
                                    $user->id ?>" class="btn btn-warning">Edit</a> <a href="/users/destroy?id=<?=
                                    $user->id ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php require_once "views/partials/footer.php"; ?>


