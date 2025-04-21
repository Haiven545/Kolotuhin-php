<?php

$lastName = "иванов";
$firstName = "иван";
$middleName = "иванович";


$formattedLastName = mb_convert_case($lastName, MB_CASE_TITLE, "UTF-8");

$firstInitial = mb_strtoupper(mb_substr($firstName, 0, 1, "UTF-8"), "UTF-8");
$middleInitial = mb_strtoupper(mb_substr($middleName, 0, 1, "UTF-8"), "UTF-8");

echo $formattedLastName . " " . $firstInitial . "." . $middleInitial . ".";
