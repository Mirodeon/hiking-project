<?php
class editHikeDb extends Dbconnect
{
    protected function editHike($name, $difficulty, $update, $distance, $durationH, $durationM, $elevation, $description, $userId, $hikeId)
    {
        session_start();
        $duration = $durationH . "h" . $durationM;
        $db = $this->connect();
        $q = $db->prepare("UPDATE `hikes` SET `name`=:name, 
        `difficulty`=:difficulty, `last_update`=:last_update, `distance`=:distance, 
        `duration`=:duration, `elevation`=:elevation, `description`=:description 
        WHERE `id`=:idHike");
        $q->bindParam(":name", $name);
        $q->bindParam(":difficulty", $difficulty);
        $q->bindParam(":last_update", $update);
        $q->bindParam(":distance", $distance);
        $q->bindParam(":duration", $duration);
        $q->bindParam(':elevation', $elevation);
        $q->bindParam(":description", $description);
        $q->bindParam(":idHike", $hikeId);
        if (!$q->execute()) {
            $q = null;
            header("location: addHike");
            $_SESSION['error'] = "Something went wrong!";
            exit();
        }
        $_SESSION["hike"] = [
            "id" => $hikeId,
        ];
    }
}
