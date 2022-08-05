<?php
if ($_SESSION["user"]["id"] == $shike['user_id'] || $_SESSION["user"]["permission"] == "administrateur") {
    $availableTags = $db->query('SELECT * FROM tags ORDER BY name_tag DESC;');
?>
    <div class="columns is-centered">
        <div class="dropdown is-hoverable column is-half">
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
                        while ($listTags = $availableTags->fetch()) {
                        ?>
                            <a class="dropdown-item selectControl">
                                <?= $listTags['name_tag']; ?>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <form method="post" class="column has-text-right is-half" action="addTag">
            <select name="tag" style="display:none;">
                <?php
                $availableTags = $db->query('SELECT * FROM tags ORDER BY name_tag DESC');
                ?>
                <?php
                while ($tags = $availableTags->fetch()) {
                ?>
                    <option value="<?= $tags['id']; ?>" class="selectInput"><?= $tags['name_tag']; ?></option>
                <?php
                }
                ?>
            </select>
            <button class="button is-primary" type="submit" name="hike" value="<?= $shike['id']; ?>">Add a tag</button>
        </form>
    </div>
<?php }; ?>