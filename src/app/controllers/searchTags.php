<?php
$availableTags = $db->query('SELECT * FROM tags ORDER BY name_tag DESC;');
?>
<div>
    <div class="dropdown is-hoverable">
        <div class="dropdown-trigger">
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                <span id="titleOptionT">Add a tag</span>
                <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu4" role="menu">
            <div class="dropdown-content">
                <div class="dropdown-item">
                    <?php
                    while ($listTags = $availableTags->fetch()) {
                    ?>
                        <a class="dropdown-item selectControlT">
                            <?= $listTags['name_tag']; ?>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<select name="tag" style="display:none;">
    <?php
    $availableTags = $db->query('SELECT * FROM tags ORDER BY name_tag DESC');
    ?>
    <?php
    while ($tags = $availableTags->fetch()) {
    ?>
        <option value="<?= $tags['id']; ?>" class="selectInputT"><?= $tags['name_tag']; ?></option>
    <?php
    }
    ?>
</select>