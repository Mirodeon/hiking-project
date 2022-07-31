<?php
$getHikes = $db->query('SELECT users.firstname, users.lastname, users.nickname, hikes.id, hikes.name, hikes.difficulty, hikes.creation_date, hikes.distance, hikes.duration, hikes.elevation, hikes.description, hikes.url FROM users INNER JOIN hikes ON users.id = hikes.user_id ORDER BY hikes.id DESC LIMIT 4');

while ($hike = $getHikes->fetch()) {
    
    $description = $hike['description'];
    if (strlen($description) > 50){
        $new_description = substr($description, 0, 120). '...';
    }else{
        $new_description = $description;
    }

?>
<a href="singleHike?id=<?= $hike['id']; ?>">
    <div class="column is-one-quarter">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="<?= $hike['url']; ?>" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">

                <p class="has-text-centered has-text-weight-semibold hike-name is-size-5"><?= $hike['name']; ?></p>
                <p class="is-size-7 has-text-centered">Difficulty : <?= $hike['difficulty']; ?></p></br>
                <nav class="level">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Distance</p>
                            <p><?= $hike['distance'].'km'; ?></p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Duration</p>
                            <p><?= $hike['duration']; ?></p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Elevation</p>
                            <p><?= $hike['elevation'].'m'; ?></p>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <p class="is-size-6"><?= $new_description ?></p>
                    <a href="#">#mountain</a> <a href="#">#lake</a>
                    
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-6"><?= $hike['firstname']; ?> <?= $hike['lastname']; ?></p>
                            <p class="subtitle is-7">@<?= $hike['nickname']; ?></p>
                            <p class="is-size-7"><?= $hike['creation_date']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>
<?php
}
?>