<?php

$anniversary = strtotime("2015-10-02");
$now = time();
$datediff = $now - $anniversary;
$daysRemaining = floor($datediff/(60*60*24));
$years = round($daysRemaining / 365, 2);
// echo $years;
$hello = "world";

?>
