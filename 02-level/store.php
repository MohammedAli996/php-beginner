<?php
$games = [
	["Call of Duty", "Shooter", 59.95],
	["Rocket League", "Sport", 19.95],
	["Assassins Creed", "RP", 49.95]
];
$titleLength = 0;
$priceAvg = 0;

foreach ($games as $game) {
	$titleLength += strlen($game[0]);
	$priceAvg += $game[2];
}

echo round($priceAvg / count($games), 2);
echo round($titleLength / count($games)) . PHP_EOL;
?>