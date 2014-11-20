<?php
/**
 * Cat class
 */
class Cat {
	
	/**
	 * The cat's number
	 * 
	 * @var int
	 */
	public $number;
	
	/**
	 * The cat's home
	 * 
	 * @var House
	 */
	protected $_home;
	
	/**
	 * Constructor
	 * 
	 * @param  House $home The cat's home
	 * @param  int $number The cat's number
	 * @return void
	 */
	public function __construct(House $home, $number) {
		$this->_home = $home;
		$this->number = $number;
	}
	
	/**
	 * Make the cat go into its house
	 * 
	 * @return bool If the cat was able to go inside
	 */
	public function goHome() {
		if ($this->_home->door->isOpen()) {
			$this->_home->letCatIn($this);
			return true;
		}
		return false;
	}
	
	/**
	 * Make the cat go into a box
	 * 
	 * @param  Box $box The box for the cat to get into
	 * @return bool If the cat was able to fit in the box
	 */
	public function goInBox(Box $box) {
		
	}
	
}