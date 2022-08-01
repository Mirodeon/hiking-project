<?php
session_start();
if ($_SESSION["user"]["id"] == $shike['user_id'] || $_SESSION["user"]["permission"] == "administrateur") { ?>
    <div class="has-text-centered">
        <button class="button is-primary">Edit</button>
        <button class="button is-danger">Delete</button>
    </div>
<?php } ?>