<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <form action="/orders/edit" method="post">
        <input type="hidden" name="id" value="<?= $order->id ?>">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="<?= $order->title ?>">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?= $order->body ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

<?php require_once "views/partials/header.php"; ?>