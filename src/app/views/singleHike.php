<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
    $title = "Hike - " . $_SESSION["user"]["login"];
} else {
    $title = "Hike";
} ?>
<?php
$db = new MyPDO();
if (isset($_GET['id']) and !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $singleHike = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url, hikes.user_id FROM users INNER JOIN hikes ON users.id = hikes.user_id WHERE hikes.id =' . "$getid");
    $shike = $singleHike->fetch();
} else if (isset($_SESSION["hike"])) {
    $getid = $_SESSION["hike"]["id"];
    $singleHike = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url, hikes.user_id FROM users INNER JOIN hikes ON users.id = hikes.user_id WHERE hikes.id =' . "$getid");
    $shike = $singleHike->fetch();
} else {
    header("location: 404");
}
$getTags = $db->query('SELECT * FROM tags JOIN hikes_tags ON tags.id = hikes_tags.id_tag join hikes on hikes.id = hikes_tags.id_hike WHERE hikes.id =' . "$getid");

?>

<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>
<style>
    .flex {
        display: flex;
    }
</style>
<div class="card-content has-background-light">
    <br>
    <div class="columns is-centered">
        <div class="column is-three-fifths">
            <div class="card">
                <div class="card-image">
                    <figure class="image">
                        <img src="<?= $shike['url']; ?>" alt="Placeholder image">
                    </figure>
                </div>
            </div>
        </div>
        <div class="column">
            <p class="has-text-centered has-text-weight-semibold hike-name is-size-5"><?= $shike['name']; ?></p>
            <p class="is-size-7 has-text-centered">Difficulty : <?= $shike['difficulty']; ?></p></br>
            <div class="level flex">
                <div style="width:1px"></div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Distance</p>
                        <p><?= $shike['distance'] . "km"; ?></p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Duration</p>
                        <p><?= $shike['duration']; ?></p>
                    </div>
                </div>
                <div class="level-item has-text-centered">
                    <div>
                        <p class="heading">Elevation</p>
                        <p><?= $shike['elevation'] . "m"; ?></p>
                    </div>
                </div>
                <div style="width:1px"></div>
            </div>
            <div class="content">
                <p class="is-size-6"><?= $shike['description']; ?></p>
                <p>Tags: <?php
                    while ($tags = $getTags->fetch()) {
                        ?>#<?= $tags['name_tag']; ?><?php
                    }
                    ?>
                </p>
                <div class="media">
                    <div class="media-content">
                        <p class="title is-6"><?= $shike['firstname']; ?> <?= $shike['lastname']; ?></p>
                        <p class="subtitle is-7">@<?= $shike['nickname']; ?></p>
                        <p class="is-size-7"><?= $shike['creation_date']; ?></p>
                    </div>
                </div>
            </div>
            <?php include '../app/controllers/singleHikeBtn.php'; ?>
            <?php include '../app/controllers/availableTags.php'; ?>
            <?php include '../app/controllers/addNewTagBtn.php'; ?>
            <p class="label is-small has-text-danger"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : "" ?></p>
        </div>
    </div>
</div>
<script type="text/javascript">
  let control = [...document.querySelectorAll(".selectControl")];
  let input = [...document.querySelectorAll(".selectInput")];
  let title = document.querySelector("#titleOption");

  control.forEach((option, i) => {
    option.addEventListener("click", () => {
      resetSelected();
      input[i].setAttribute("selected", "selected");
      control[i].classList.add("bgSelect");
      title.innerHTML = control[i].textContent;
    });
  });
  const resetSelected = () => {
    input.forEach((option) => {
      option.removeAttribute("selected");
    });
    control.forEach((option) => {
      option.classList.remove("bgSelect");
    });
  };
</script>
<?php unset($_SESSION["hike"]); ?>
<?php unset($_SESSION["error"]); ?>
<?php include "footer.php"; ?>