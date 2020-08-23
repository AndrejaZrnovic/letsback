<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <div class="actionDivOrder">
        <div class="action-title"><h4>Add new <span>order</span>:</h4></div>
        <form action="/orders" method="post">
            <div class="form-group">
                <label for="customer">Customer Id</label>
                <input type="text" id="customer" name="customer" class="form-control">
            </div>
            <div class="form-group">
                <label for="ship">Ship Id</label>
                <input name="ship" id="ship" cols="30" rows="10" class="form-control">
            </div>
            <div class="form-group">
                <label for="port">Port Id</label>
                <input name="port" id="port" cols="30" rows="10" class="form-control">
            </div>
            <div class="form-group">
                <label for="cargo">Cargo Id</label>
                <input name="cargo" id="cargo" cols="30" rows="10" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <div class="backArrowCreateOrders">
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