<?php
require('core.php'); // Do not remove

/*******************************************************************************
 * 
 * -------------------
 *   Introduction
 * -------------------
 *
 * This test is an exercise in PHP and object oriented programming. When you run
 * this file (index.php) you will see an output of messages on the screen based
 * on your code. BEFORE YOU START, THE OUTPUT WILL NOT MAKE SENSE.
 * 
 * You will be required to make additions and modifications to the package of files
 * to ensure that:
 * 
 *     1. There are no errors.
 *     2. The output on the page makes sense.
 *     3. The numbers in the output add up correctly.
 * 
 * We will be looking at:
 * 
 *     1. Your ability to understand the problems/tasks at hand
 *     2. Your ability to understand the existing files/code
 *     3. How you decide to solve the problems you are faced with
 *     4. Your coding style
 *     5. Your attention to detail
 * 
 * -------------------
 *   Rules
 * -------------------
 * 
 * You can:
 * 
 *     1. Modify any of the provided classes however you wish
 *     2. Modify `helper.php` however you wish
 *     3. Add any new files of your own anywhere that you feel they are needed
 *     4. Comment your code as you feel is appropriate
 * 
 * You cannot:
 * 
 *     1. Make any changes to `core.php` (this provides the setup for the test)
 *     2. Make any changes within the commented blocks in this file (index.php)
 * 
 * You should:
 * 
 *     1. Try to make use of existing methods where they are already provided, to
 *        show that you understand their purpose and how to use them.
 * 
 * 
 * 
 *        NOTE: THERE IS NO RIGHT OR WRONG ANSWER TO ANY OF THESE TESTS
 * 
 *                            Read on...
 *
 ******************************************************************************/


// We have a house
$house = new House();

// Inside, we have some boxes of various sizes
$boxSizes = array('Large', 'Medium', 'Small');
$totalBoxes = rand(2, 4);

for ($i=0; $i< $totalBoxes; $i++) {
	$boxType = $boxSizes[array_rand($boxSizes)];
	$boxClass = $boxType . 'Box';
	$house->addBox(new $boxClass);
}
$boxes = $house->getBoxes();

// We also have a bunch of cats who belong to our household
$totalCats = rand(10, 30);
$cats = array();
for ($i=0; $i< $totalCats; $i++) {
	$number = $i + 1;
	$cats[] = new Cat($house, $i);
}


/*******************************************************************************
 * 
 * -------------------
 *   Task 1
 * -------------------
 *
 * Ensure that the `pluralise()` function in `helper.php` works correctly, so that
 * all of the output on the page reads correctly.
 * 
 ******************************************************************************/


/*******************************************************************************
 *                    TEST CASE FOR TASK 1 - DO NOT EDIT
 ******************************************************************************/
test1($cats, $house);
/*******************************************************************************
 * 
 * -------------------
 *   Task 2
 * -------------------
 *
 * Half of the cats should be let into the house, but only the odd numbered ones.
 * The rest must remain outside. Put the odd-numbered cats in the house.
 * 
 * 
 *           YOU MAY EDIT THE CODE IN THE SECTION BELOW IF YOU WISH
 *
 ******************************************************************************/








/*******************************************************************************
 *                    TEST CASE FOR TASK 2 - DO NOT EDIT
 ******************************************************************************/
test2($house, $cats);
/*******************************************************************************
 * 
 * -------------------
 *   Task 3
 * -------------------
 *
 * Every cat in the house should try to get into a box. Cats should only be able
 * to get into a box if there is space. Fill up as many of the available spaces
 * in boxes as possible with the cats in the house.
 * 
 * 
 *           YOU MAY EDIT THE CODE IN THE SECTION BELOW IF YOU WISH
 *
 ******************************************************************************/







/*******************************************************************************
 *                    TEST CASE FOR TASK 3 - DO NOT EDIT
 ******************************************************************************/
test3($house);
/*******************************************************************************
 * 
 * -------------------
 *   Task 4
 * -------------------
 *
 * Put all the cats outside again.
 * 
 * Rules: Cats will not leave the house if they are hiding in a box.
 * 
 * 
 *           YOU MAY EDIT THE CODE IN THE SECTION BELOW IF YOU WISH
 * 
 ******************************************************************************/ 




$totalCatsRemoved = $house->putCatsOutside();
$totalCatsInside = count($house->getCatsInside());




/*******************************************************************************
 *                    TEST CASE FOR TASK 4 - DO NOT EDIT
 ******************************************************************************/
test4($totalCatsRemoved, $totalCatsInside);