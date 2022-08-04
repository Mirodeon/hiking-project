<?php
$availableTags = $db->prepare('SELECT name_tag FROM tags
        LEFT JOIN hikes_tags ON tags.id = hikes_tags.id_tag 
        WHERE hikes_tags.id_hike <> :hikeId
        ORDER BY name_tag DESC');
$availableTags->bindParam(':hikeId', $shike['id']);
$availableTags->execute();
?>
<div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
            <span id="titleOption">Add a tag</span>
            <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
            </span>
        </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
        <div class="dropdown-content">
            <div class="dropdown-item">
                <?php
                while ($tags = $availableTags->fetch()) {
                ?>
                    <a href="#" class="dropdown-item selectControl">
                        <?= $tags['name_tag']; ?>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>