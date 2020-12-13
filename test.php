<?php


echo "Enter your weight (120, 140, 160): ";
$weight = readline(">> ");

echo "Enter minutes run: ";
$minutes = readline(">> ");

if (intval($weight) === 120) {
	echo $minutes * 11.4;
} else if (intval($weight) === 140) {
	echo $minutes * 13.2;
} else if (intval($weight) === 160) {
	echo $minutes * 15.1;
} else {
	echo "No currently supported weight entered, program terminated.";
};



?>