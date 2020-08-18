<?php require_once  "views/partials/header.php" ?>
<h1>Contact Us</h1>
<form action="/contact-submit" method ="POST">
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <div>
        <button type="submit" >Send</button>
    </div>
</form>


<?php require_once  "views/partials/footer.php";?>
