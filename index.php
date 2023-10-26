<?php

define('CIRCLE_FIGURES',['0','6','8','9']);

function checkCircleFigure(string $figure): bool {
	return in_array($figure, CIRCLE_FIGURES);
}

function getCircleFiguresNumber(string $number) {
	$number_array = str_split($number);
	foreach($number_array as $figure) {
		var_dump(checkCircleFigure($figure));
	}	
}

$number = readline("Give me the number to check");
getCircleFiguresNumber($number);

?>