<?php session_start(); ?>
<?php if (isset($_SESSION["user"])) {
  $title = "Home - " . $_SESSION["user"]["login"];
} else {
  $title = "Home";
} ?>
<?php
require "parts/head.php";
include 'header.php';

$db = new MyPDO();
?>

<style>
  .hike-list {
    padding-top: 10px;
  }

  .hike-name {
    margin-top: -15px;
  }

  .banner {
    padding: 0;
  }

  a {
    text-decoration: none;
    color: black;
  }

  .bgSelect {
    background-color: #3e8ed0;
    color: #fff;
    border-radius: 2px;
  }
    .flex {
display: flex;
flex-wrap: wrap;
    }
</style>

<section class="section banner" style="background-image: url('./img/mountain.jpg'); background-size: cover;">
  <div class="container hero-body ">
    <div class="columns">
      <div class="column">
        <p class="has-text-centered is-size-2 has-text-weight-bold has-text-white" style="text-shadow: 1px 1px 3px black;">Find your next hike</p>
        <form action="searchHike" method="post">
          <div class="field is-grouped is-justify-content-center flex">
            <div class="is-expended">
              <p class="control has-icons-left">
                <input class="input is-info" type="search" placeholder="Hike search" name="search">
                <span class="icon is-left">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
            </div>
            <div class="control">
              <button class="button is-primary">Search!</button>
            </div>
            <div>
              <?php include 'parts/dropDownTag.php'; ?>
            </div>
            <select name="difficulty" style="display:none;">
              <option value="Easy" class="selectInputD">Easy</option>
              <option value="Normal" class="selectInputD">Normal</option>
              <option value="Hard" class="selectInputD">Hard</option>
              <option value="Extreme" class="selectInputD">Extreme</option>
            </select>
            <?php include '../app/controllers/searchTags.php'; ?>
            </p>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<section class="section hike-list has-background-light">
  <p class="is-size-4 has-text-weight-bold">Last four</p></br>
  <div class="columns is-centered">
    <?php include 'fourHikes.php'; ?>
  </div>
</section>
<script type="text/javascript">
  const selectorInput = (controlClass, inputClass, titleId) => {
    let control = [...document.querySelectorAll(`${controlClass}`)];
    let input = [...document.querySelectorAll(`${inputClass}`)];
    let title = document.querySelector(`${titleId}`);
    control.forEach((option, i) => {
      option.addEventListener("click", () => {
        resetSelected(control, input);
        input[i].setAttribute("selected", "selected");
        control[i].classList.add("bgSelect");
        title.innerHTML = input[i].innerHTML;
      });
    });
  };

  const resetSelected = (control, input) => {
    input.forEach((option) => {
      option.removeAttribute("selected");
    });
    control.forEach((option) => {
      option.classList.remove("bgSelect");
    });
  };
  let controlDifficulty = ".selectControlD";
  let inputDifficulty = ".selectInputD";
  let titleDifficulty = "#titleOptionD";
  let controlTag = ".selectControlT";
  let inputTag = ".selectInputT";
  let titleTag = "#titleOptionT";
  selectorInput(controlDifficulty, inputDifficulty, titleDifficulty);
  selectorInput(controlTag, inputTag, titleTag);
</script>
<?php include 'footer.php'; ?>