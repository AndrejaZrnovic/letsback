<?php require_once "views/partials/header.php"; ?>

<div class="login">
    <form action="/login" method="post">
            <h4>Log In</h4>
            <div>
<!--            <label for="email">Email</label>-->
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
<!--            <label for="password">Password</label>-->
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="loginBtn">
            <button type="submit" class="btn btn-primary">Login</button>
            </div>
    </form>
</div>




<?php require_once "views/partials/footer.php"; ?>

