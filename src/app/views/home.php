<?php $title = "Home"; ?>
<?php require "parts/head.php"; ?>
<?php include 'header.php'; ?>

<style>
  .hike-list{
    padding-top: 10px;
  }
</style>

<section class="section" style="background-image: url('./img/mountain.jpg'); background-size: cover;">
  <div class="container hero-body">
    <div class="columns is-centered">
      <div class="column is-half">
        <p class="has-text-centered is-size-2 has-text-weight-bold has-text-white" style="text-shadow: 1px 1px 3px black;">Find your next hike</p>
        <p class="control has-icons-left">
          <input class="input is-info is-rounded" type="text" placeholder="Hike search">
          <span class="icon is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section hike-list">
<p class="is-size-4 has-text-weight-bold">Last four</p></br>  
  <div class="columns">
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="./img/wooden-track.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">John Smith</p>
              <p class="subtitle is-6">@johnsmith123</p>
            </div>
          </div>

          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Distance</p>
                <p>9,8km</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Duration</p>
                <p>2h40</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Elevation</p>
                <p>700m</p>
              </div>
            </div>            
          </nav>

          <div class="content">
          Parcourez cet itinéraire en boucle de 9,8-km près de Liège, Province de Liège. Généralement considéré comme un parcours modéré, il faut en moyenne 2 h 41 min pour le parcourir. Cet itinéraire est idéal pour la randonnée, la course à pied et la balade.
            <a href="#">#wood</a> <a href="#">#grass</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="./img/hike2.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">Florian Bosman</p>
              <p class="subtitle is-6">@F_boss</p>
            </div>
          </div>

          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Distance</p>
                <p>3,45km</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Duration</p>
                <p>1h15</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Elevation</p>
                <p>700m</p>
              </div>
            </div>            
          </nav>

          <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris.
            <a href="#">#mountain</a> <a href="#">#snow</a> <a href="#">#hill</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="./img/hike3.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">Patrick Pavel</p>
              <p class="subtitle is-6">@PavPat24</p>
            </div>
          </div>

          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Distance</p>
                <p>3,45km</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Duration</p>
                <p>1h15</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Elevation</p>
                <p>700m</p>
              </div>
            </div>            
          </nav>

          <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris.
            <a href="#">#mountain</a> <a href="#">#sea</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-image">
          <figure class="image is-4by3">
            <img src="./img/hike4.jpg" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-content">
              <p class="title is-4">Marie Sergi</p>
              <p class="subtitle is-6">@Ma_Sergi8</p>
            </div>
          </div>

          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Distance</p>
                <p>3,45km</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Duration</p>
                <p>1h15</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Elevation</p>
                <p>700m</p>
              </div>
            </div>            
          </nav>

          <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris.
            <a href="#">#hill</a> <a href="#">#lake</a> <a href="#">#autumn</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>