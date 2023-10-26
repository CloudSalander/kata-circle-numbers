<?php

define('CIRCLE_FIGURES',['0','6','8','9']);

function checkCircleFigure(string $figure): bool {
	return in_array($figure, CIRCLE_FIGURES);
}

function getCircleFiguresNumber(string $number): int {
	$number_array = str_split($number);
	$circle_figures_counter = 0;
	foreach($number_array as $figure) {
		if(checkCircleFigure($figure)) ++$circle_figures_counter;
	}
	return $circle_figures_counter;	
}

$number = readline("Give me the number to check");
echo $number." has ".getCircleFiguresNumber($number)." circle figure(s).";

?>