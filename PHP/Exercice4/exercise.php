<?php
function getAllMondaysOfMonth (int $year, int $month) : array {
        $mondays = [];
        $date = DateTime::createFromFormat('Yn',$year.$month);
        $date = new DateTime('first day of '.$date->format('F Y'));

        $interval = DateInterval::createFromDateString('next Monday');
        if ($date->format('N')!=1) {
            $date->add($interval);
        }

        while($date->format('m')== $month) {
            $mondays[] = $date->format('l j, M Y');
            $date->add($interval);
        }
        return $mondays;

}