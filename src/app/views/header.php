<nav class="navbar is-info">
  <div class="container">
    <div class="navbar-brand">
      <a href="home" class="navbar-item" style="font-weight: bold;">
        THE HIKING PROJECT
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
        <a href="menu" class="navbar-item">Menu</a>
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
