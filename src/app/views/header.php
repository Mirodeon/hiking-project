<nav class="navbar is-info">
  <div class="container">
    <div class="navbar-brand">
      <a href="home" class="navbar-item" style="font-weight: bold;">
        THE HINKING PROJECT
      </a>
      <span class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
    <div class="navbar-menu" id="navMenu">
      <div class="navbar-end">
        <a href="home" class="navbar-item is-active">Home</a>
        <a href="#" class="navbar-item">Menu</a>
        <a href="#" class="navbar-item">Contact</a>
      </div>
      <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="login">
            Log in
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>
</nav>
<section class="hero is-success" style="background-image: url('./img/man-731900_1280.jpg'); background-size: cover;">
  <div class="hero-body">
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-primary end" type="text" placeholder="Hike search" style="width: 300px;">
      <span class="icon is-left">
        <i class="fas fa-search" aria-hidden="true"></i>
      </span>
    </p>
  </div>
  </div>
</section>
<script type="text/javascript">
  (function(){
    var burger = document.querySelector('.burger');
    var nav = document.queryselector('#'+burger.dataset.target);

    burger.addEventListener('click', function(){
      burger.classList.toggle('is-active');
      nav.classList.toggle('is-active');
    });
  })();
</script>

