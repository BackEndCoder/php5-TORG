<?php
/**
 * Box class
 */
class Box {
	
	/**
	 * How many cats can fit in the box
	 * 
	 * @var int
	 */
	protected $_capacity;
	
	/**
	 * Cats in the box
	 * 
	 * @var array
	 */
	protected $_cats = array();
	
	/**
	 * Count how many spare spaces in the box there are for cats
	 * 
	 * @return bool
	 */
	public function countSpareSpaces() {
		
	}
	
	/**
	 * Empty the box
	 * 
	 * @return void
	 */
	public function removeCats() {
		$this->_cats = array();
	}
	
	/**
	 * Fill the box with a cat
	 * 
	 * @param  Cat $cat
	 * @return int If the cat could fit in the box
	 */
	public function fill(Cat $cat) {
		$this->_cats[] = $cat;
		$this->_capacity = $this->_capacity - 1;
		return $this->_capacity;
	}
	
	/**
	 * Get the cat capacity of this box
	 * 
	 * @return int
	 */
	public function getCapacity() {
		return $this->_capacity;
	}
	
	/**
	 * Get the cats which are in the box
	 * 
	 * @return int
	 */
	public function getCatsInside() {
		return $this->_cats;
	}
	
}