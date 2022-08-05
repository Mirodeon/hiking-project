<?php
if ($_SESSION["user"]["id"] == $shike['user_id'] || $_SESSION["user"]["permission"] == "administrateur") {
    
?>
<div class="columns">
      <div class="column">
        <form action="newTag" method="post">
          <div class="field is-grouped is-justify-content-center">
            <div class="is-expended">
              <p class="control has-icons-left">
                <input class="input is-info" type="text" placeholder="Create New Tag" name="newTag">
                <span class="icon is-left">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
            </div>
            <div class="control">
              <button class="button is-primary" type="submit" name="submitTag" value="<?= $shike['id']; ?>">Create tag</button>
            </div>
            </p>
          </div>
        </form>
      </div>
    </div>
<?php }; ?>