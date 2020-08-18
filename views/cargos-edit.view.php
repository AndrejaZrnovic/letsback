
<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <form action="//edit" method="post">
        <input type="hidden" name="id" value="<?= $cargo->id ?>">

<!--        <div class="form-group">-->
<!--            <label for="name">Name</label>ships-->
<!--            <input type="text" id="name" name="name" class="form-control" value="--><?//= $cargo->name ?><!--">-->
<!--        </div>-->

        <div class="form-group">
            <label for="type">Type</label>
            <textarea name="type" id="type" cols="30" rows="10" class="form-control"><?= $cargo->type ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

<?php require_once "views/partials/header.php"; ?>