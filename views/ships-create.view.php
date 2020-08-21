
<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid ">
    <form action="/ships" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<?php require_once "views/partials/footer.php"; ?>