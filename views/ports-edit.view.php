
<?php require_once "views/partials/header.php"; ?>

<form action="/ports/edit" method="post">
    <input type="hidden" name="id" value="<?= $port->id ?>">

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" class="form-control" value="<?= $port->title ?>">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?= $port->body ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php require_once "views/partials/header.php"; ?>