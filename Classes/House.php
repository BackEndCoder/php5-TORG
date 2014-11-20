<?php
/**
 * House class
 */
require_once('Door.php');

/**
 * House class
 */
class House {
	
	/**
	 * The door of the house
	 * 
	 * @var Door
	 */
	public $door;
	
	/**
	 * Boxes in the house
	 * 
	 * @var array
	 */
	protected $_boxes = array();
	
	/**
	 * Cats in the house
	 * 
	 * @var array
	 */
	protected $_cats = array();
	
	/**
	 * Constructor
	 * 
	 * @return void
	 */
	public function __construct() {
		$this->door = new Door();
	}
	
	/**
	 * Add a box to the house
	 * 
	 * @param  Box $box
	 * @return void
	 */
	public function addBox(Box $box) {
		$this->_boxes[] = $box;
	}
	
	/**
	 * Count the number of spare spaces in boxes in the house
	 * 
	 * @return int
	 */
	public function countSpareBoxSpaces() {
		
	}
	
	/**
	 * Find a box with a spare space
	 * 
	 * @return Box|bool The box with space in, or FALSE if there are no spare boxes.
	 */
	public function findSpareBox() {
		
	}
	
	/**
	 * Get the total cat capacity of all the boxes in the house
	 * 
	 * @return int The number of cats that can fit in boxes in this house
	 */
	public function getBoxCapacity() {
		
	}
	
	/**
	 * Get all the boxes in the house
	 * 
	 * @return array
	 */
	public function getBoxes() {
		return $this->_boxes;
	}
	
	/**
	 * Get all the cats currently sitting in boxes
	 * 
	 * @return int
	 */
	public function getCatsInBoxes() {
		
	}
	
	/**
	 * Get the cats which are in the house
	 * 
	 * @return int
	 */
	public function getCatsInside() {
		return $this->_cats;
	}
	
	/**
	 * Let a cat into the house
	 * 
	 * @param  Cat $cat
	 * @return int The total number of cats in the house
	 */
	public function letCatIn(Cat $cat) {
		$this->_cats[] = $cat;
	}
	
	/**
	 * Put all the cats not in boxes outside
	 * 
	 * @return int The number of cats put outside
	 */
	public function putCatsOutside() {
		
	}
	
}