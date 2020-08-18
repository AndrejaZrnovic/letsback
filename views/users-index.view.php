
<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <div class="mb-3">
        <div class="card-title text-black bg-light mb-3" style="main-width: 20rem;">
            <div class="card-header"><h2>Users:</h2></div>
            <div class="card-body">
                <a href="/users/create" class="btn btn-info">Add new Post</a>
            </div>
        </div>
    </div>
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


<?php require_once "views/partials/footer.php"; ?>