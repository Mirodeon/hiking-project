<?php session_start(); ?>
<?php if (!isset($_SESSION["user"])) {
    header("location: login");
    $_SESSION['error'] = "You need to be logged in to access this part.";
    exit();
} ?>
<?php $title = "Add an image - " . $_SESSION["user"]["login"]; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<div class="hero is-primary">
    <div class="hero-body" style="background-image: url('./img/wooden-track.jpg'); background-size: cover;">
        <div class="container">
            <div class="columns is-centered">
                <form method="post" class="box" action="addImg">
                    <div class="field">
                        <label for="img-url" class="label is-small">Image URL</label>
                    </div>
                    <div class="control has-icons-left">
                        <input type="text" class="input is-small imageReader" placeholder="URL here" name="img-url" id="img_preview">
                        <span class="icon is-small is-left">
                            <i class="fa fa-image"></i>
                        </span>
                    </div>
                    <div>
                        <img class="imgPreview" alt="image preview" style="width: 200px; visibility: hidden; display: block; margin: 0 auto;" id="img_prev">
                    </div>
                    </br>
                    <div style="display: flex; justify-content: center; gap: 10px;">
                        <div class="button is-light is-small btnPreview" id="btn">Preview</div>
                        <button class="button is-success is-small" type="submit" name="submit" value="confirmImg">Confirm</button>
                    </div>
                    <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    const setBtnPreview = () => {
        previewBtn = document.querySelector('.btnPreview');
        previewBtn.addEventListener('click', e => {
            input = document.querySelector('.imageReader');
            preview = document.querySelector('.imgPreview');
            preview.src = input.value;
            preview.style.visibility = "visible";
        });
    }
    setBtnPreview();
</script>
<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>