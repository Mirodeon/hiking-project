<div class="container">
    <div class="content">
        <a href="singleHike?id=<?= $hike['id']; ?>">
            <div class="content-overlay"></div>
            <img class="content-image" src="<?= $hike['url']; ?>">

            <div class="content-details fadeIn-bottom">
                <h3 class="content-title is-size-4"><?= $hike['name']; ?></h3>
                <p class="is-size-7 has-text-centered">Difficulty : <?= $hike['difficulty']; ?></p>
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Distance</p>
                            <p><?= $hike['distance'] . 'km'; ?></p>
                        </div>
                        <div>
                            <p class="heading">&nbsp&nbsp Duration &nbsp&nbsp</p>
                            <p><?= $hike['duration']; ?></p>
                        </div>
                        <div>
                            <p class="heading"> Elevation</p>
                            <p><?= $hike['elevation'] . 'm'; ?></p>
                        </div>
                    </div>
                </nav>
            </div>

        </a>
    </div>
</div>