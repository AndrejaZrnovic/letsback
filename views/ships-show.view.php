<?php require_once "views/partials/header.php"; ?>

    <div class="container-fluid">
    <div class="container-fluid">
        <div class="card text-black bg-light mb-3" style="min-width: 18rem;">
            <div class="card-header"><h2>Information:</h2></div>
            <div class="card-body">
                <h3>Ship: <?= $ship->name ?>></h3>
                <h3>Type:<?= $ship->type ?></h3>
            </div>
        </div>
    </div>


<?php require_once "views/partials/footer.php"; ?>