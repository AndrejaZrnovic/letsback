<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <div class="edit">
        <div class="edit-title"><h4>Edit Information:</h4></div>
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
            <div class="editBtn">
                <button type="submit" class="btn btn-primary">Edit
            </div>
            <div class="backArrow">
                <a href="/orders">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 0 1 0 .708L3.457 5.75l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 0 1 .5-.5h6.5a2.5 2.5 0 0 1 2.5 2.5v5.5a.5.5 0 0 1-1 0v-5.5a1.5 1.5 0 0 0-1.5-1.5h-6.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
            </div>
        </form>
    </div>
</div>

<?php require_once "views/partials/footer.php"; ?>