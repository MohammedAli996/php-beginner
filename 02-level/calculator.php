<?php

$operatie = readline("welke operatie wil je uitvoeren? (+, -, %)");
if ($operatie !== "+" && $operatie !== "-" && $operatie !== "%") {
    echo  "'$operatie'geen geldige operatie";
    exit();
}

$a = readline("eerste getaal?");
if (!is_numeric($a)) {
    echo "'$a' is geen nummer";
    exit();
}
$b = readline(" twede getaal? ");
if (!is_numeric($b)) {
    echo "'$a'is geen nummer";
    exit();
}
if ($operatie == "+") { 
    echo  "uw resaultaat is",  $a + $b;
} elseif ($operatie == "-") {
    echo "uw resaultaat is", $a - $b;
} else {
    echo "uw resaultaat is", $a % $b;
}

?>