
<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <form action="//edit" method="post">
        <input type="hidden" name="id" value="<?= $ship->id ?>">

        <div class="form-group">
            <label for="name">Name</label>ships
            <input type="text" id="name" name="name" class="form-control" value="<?= $ship->name ?>">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <textarea name="type" id="type" cols="30" rows="10" class="form-control"><?= $ship->type ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

<?php require_once "views/partials/header.php"; ?>