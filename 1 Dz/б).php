<?php

for ($month = 1; $month <= 12; $month++) {
    for ($day = 1; $day <= 20; $day++) {
        $date = new DateTime("2021-$month-$day");
        if ($date->format('N') == 6) { 
            echo $date->format('d.m.Y') . "\n"; 
        }
    }
}
?>