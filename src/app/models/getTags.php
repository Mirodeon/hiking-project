<?php
$getid = $hike['id'];
$getTags = $db->query('SELECT * FROM tags JOIN hikes_tags ON tags.id = hikes_tags.id_tag join hikes on hikes.id = hikes_tags.id_hike WHERE hikes.id =' . "$getid");
while ($tags = $getTags->fetch()) {
?><a href="#">#<?= $tags['name_tag']; ?></a>
<?php } ?>