<?php if (isset($_SESSION['user'])) { ?>
    <div class="field">
        <label for="newPass" class="label is-small">New Password (Not required)</label>
    </div>
    <div class="control has-icons-left">
        <input type="password" class="input is-small" placeholder="Your new password" name="newPass" autocomplete="off">
        <span class="icon is-small is-left">
            <i class="fa fa-lock"></i>
        </span>
    </div>
<?php } ?>