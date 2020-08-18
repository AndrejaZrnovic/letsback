<?php require_once  "views/partials/header.php" ?>


<div class="container-fluid">
    <div class="contactWrapper">
        <h1>Contact Us</h1>
        <form action="/contact-submit" method ="POST">
            <div class="form-group subject">
                <label for="subject"><h4>Subject</h4></label></br>
                <input type="text" name="subject" id="subject" style="width:400px; height: 40px;">
            </div>

            <div class="form-group">
                <label for="message"><h4>Message</h4></label></br>
                <textarea name="message" id="message" cols="30" rows="10" style="width: 400px; height: 200px;"></textarea>
            </div>

            <div>
                <button type="submit" style="width: 200px; height: 40px;">Send</button>
            </div>
        </form>
    </div>
</div>


<?php require_once  "views/partials/footer.php";?>
