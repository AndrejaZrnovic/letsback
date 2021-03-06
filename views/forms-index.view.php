<?php require_once "views/partials/header.php"; ?>


<div class="col-sm-3">
    <?php require_once "views/partials/user.php";?>
</div>
<div class="col-sm-9">
    <div class="container-fluid tableContainer">
        <div class="tableTitle">
            <div class="buttonDiv">
                <a href="/forms/create" class="btn btn-info">Add new Post</a>
            </div>
            <div class="titlePage">
                <h2>FORMS</h2>
            </div>
        </div>
        <div class="row wrapperTable">
            <div class="col-12">
                <table class="table">
                    <thead class="thead">
                    <tr>
                        <th>Customer</th>
                        <th>Movie</th>
                        <th>Genre</th>
                    </tr>
                    </thead>
                    <?php foreach ($forms as $form): ?>
                        <tr>
                            <td><?= $form->customer_id ?></td>
                            <td><?=  $form->movie_id?></td>
                            <td><?=  $form->genre_id?></td>
                            <td><a href="/orders/show?id=<?=  $form->id ?>" class="btn btn-info">Show</a> <a href="/ forms/edit?id=<?=
                                $form->id ?>" class="btn btn-warning">Edit</a> <a href="/ forms/destroy?id=<?=
                                $form->id ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


    <?php require_once "views/partials/footer.php"; ?>




