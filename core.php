<?php
require('helper.php');
require('Classes/Cat.php');
require('Classes/House.php');
require('Classes/LargeBox.php');
require('Classes/MediumBox.php');
require('Classes/SmallBox.php');

function instruction($text) {
	$lineBreak = '';
	$chars = strlen($text);
	for ($i=0; $i< $chars; $i++) {
		$lineBreak .= '-';
	}
	output("$lineBreak<br>$text<br>$lineBreak");
}

function output($value) {
	echo '<pre>' . print_r($value, true) . '</pre>';
}

function test1($cats, $house) {
	$boxes = $house->getBoxes();
	output('We have ' . pluralise('cat', count($cats)) . ' that belong to our household.');
	output("There's so many cats, we just numbered them (cat 1, cat 2, cat 3...) instead of giving them proper names.");
	output('The house has ' . pluralise('box', count($boxes)) . ' inside, with space for a total of ' . pluralise('cat', $house->getBoxCapacity()) . ' to sleep in.');
	output('Currently, all the cats are outside.');
	instruction("LET HALF THE CATS INTO THE HOUSE, BUT ONLY THE ODD NUMBERED ONES");
}

function test2($house, $cats) {
	$catsInside = $house->getCatsInside();
	$totalCatsInside = count($catsInside);
	if ($totalCatsInside) {
		output($totalCatsInside . ' of ' . count($cats) . ' cats are now inside the house.');
		$output = 'The cats inside are numbers ';
		$inside = array();
		foreach ($catsInside as $cat) {
			$inside[] = $cat->number;
		}
		$lastCat = array_pop($inside);
		$output .= implode(', ', $inside);
		$output .= ' and ' . $lastCat;
		output($output);
	} else {
		output('All of the cats are still waiting outside.');
	}
	instruction('EVERY CAT TRIES TO CLIMB INTO A BOX');
	output('There are ' . pluralise('cat', $totalCatsInside) . ' and ' . pluralise('free space', $house->countSpareBoxSpaces()) . ' in the boxes.');
}

function test3($house) {
	$catsInBoxes = $house->getCatsInBoxes();
	$totalCatsInBoxes = count($catsInBoxes);
	output(pluralise('cat', $totalCatsInBoxes) . ' climbed into a box (' . pluralise('space', $house->countSpareBoxSpaces()) . ' left).');
	$output = 'The cats who managed to get into a box are numbers ';
	$catsInBoxes = $house->getCatsInBoxes();
	$inBoxes = array();
	foreach ($catsInBoxes as $cat) {
		$inBoxes[] = $cat->number;
	}
	$lastCat = array_pop($inBoxes);
	$output .= implode(', ', $inBoxes);
	$output .= ' and ' . $lastCat;
	$catsInside = $house->getCatsInside();
	$totalCatsInside = count($catsInside);
	$catsOutOfBoxes = $totalCatsInside - $totalCatsInBoxes;
	output(pluralise('cat', $catsOutOfBoxes) . ' will have to sleep on the floor.');
	instruction('PUT ALL THE CATS OUTSIDE AGAIN');
}

function test4($catsRemoved, $catsInside) {
	output('Managed to remove ' . pluralise('cat', $catsRemoved) . ' from the house.');
	output(pluralise('cat', $catsInside) . ' are still in the house, hiding in boxes.');
}