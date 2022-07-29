<?php
class addHikeDb extends Dbconnect
{
    protected function setHike($name, $date, $distance, $durationH, $durationM, $elevation, $description, $userId)
    {
        $duration = $durationH."h".$durationM;
    }
}
