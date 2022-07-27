<style>
  @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');
</style>

<nav class="navbar is-info">
  <div class="container">
    <div class="navbar-brand">
      <a href="home" class="navbar-item is-size-5" style="font-family: 'Mochiy Pop One', sans-serif;">
        Elderberry
      </a>
      <span class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
    <div class="navbar-menu" id="navMenu">
      <div class="navbar-end">
        <a href="home" class="navbar-item">Home</a>
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Activity
          </a>
          <div class="navbar-dropdown">
            <a class="navbar-item">
              All hikes
            </a>
            <a class="navbar-item">
              My hikes
            </a>
            <a class="navbar-item">
              Add hikes
            </a>
          </div>
        </div>
        <a href="contact" class="navbar-item">Contact</a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
          <?php include '../app/controllers/signBtn.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>