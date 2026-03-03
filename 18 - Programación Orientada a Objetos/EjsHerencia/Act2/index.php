<?php
require_once "jam.php";

$food1 = new Jam("Raspberry Conserve", 45.5);

$food1->shelfLifeMonths=24;
$food1->sweetness=5;

echo $food1->__toString();