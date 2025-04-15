<?php
$lastName = "иванов";
$firstName = "иван";
$middleName = "иванович";

$formattedLastName = ucfirst($lastName);

$firstInitial = strtoupper(substr($firstName, 0, 1));
$middleInitial = strtoupper(substr($middleName, 0, 1));

echo $formattedLastName . " " . $firstInitial . "." . $middleInitial . ".";
?>