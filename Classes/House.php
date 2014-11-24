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
		$this->door->open();
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
		 $catsInside = $this->getCatsInside();
		 $totalCatsInside = count($catsInside);
		 $capacity = $this->getBoxCapacity();
		 $spareBoxes = $capacity-$totalCatsInside;
		 if($spareBoxes<=0){
		   $spareBoxes = 0;
		 }
		 return $spareBoxes;
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
		$boxes = $this->getBoxes();
		$count = 0;
		foreach($boxes as $box) {
			$boxclass = new $box;
			$count = $count + $box->getCapacity();
		}
		return $count;
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
	 * @return array
	 */
	public function getCatsInBoxes() {
		$boxes = $this->getBoxes();
		$count = [];
		foreach($boxes as $box) {
			$boxclass = new $box;
			foreach ($box->getCatsInside() as $data) {
				$count[] = $data;
			}
		}
		return $count;
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
		$cats_house = $this->getCatsInside();
		$cats_boxes = $this->getCatsInBoxes();
		$cats_remaining = [];
		foreach ($cats_house as $cat_in_house) {
			if(!in_array($cat_in_house,$cats_boxes)) {
				$cats_remaining[] = $cat_in_house;
				$key = array_search($cat_in_house,$this->_cats);
				unset($this->_cats[$key]);
			}
		}
		return count($cats_remaining);
	}	
}