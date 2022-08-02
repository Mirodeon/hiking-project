<?php
session_start();
if ($_SESSION["user"]["permission"] == "administrateur") {
?>
    <a href="userManage"><button class="button">Users manager</button></a>
    <a href="hikeManage"><button class="button">Hikes manager</button></a>
<?php }; ?>