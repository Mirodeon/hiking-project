<style>
  @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&display=swap');
</style>

<nav class="navbar is-info">
  <div class="container">
    <div class="navbar-brand">
      <a href="home" class="navbar-item is-size-5" style="font-family: 'Mochiy Pop One', sans-serif;">
        The hiking project
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
              Your hikes
            </a>
            <a class="navbar-item">
              Create new
            </a>
          </div>
        </div>
        <a href="contact" class="navbar-item">Contact</a>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary is-small js-modal-trigger" href="register">
              <!-- data-target="modal-signup" -->
              <strong>Sign up</strong>
            </a>
            <a class="button is-light is-small js-modal-trigger" href="login">
              <!-- data-target="modal-login" -->
              Login
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>