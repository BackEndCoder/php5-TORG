<?php
/**
 * Door class
 */
class Door {
	
	/**
	 * Door open state
	 * 
	 * @var bool If the door is open or not
	 */
	protected $_open = false;
	
	/**
	 * Open the door
	 * 
	 * @return void
	 */
	public function open() {
		$this->_open = true;
	}
	
	/**
	 * Close the door
	 * 
	 * @return void
	 */
	public function close() {
		$this->_open = false;
	}

	/**
	 * Door open state
	 * 
	 * @return bool If the door is open or not
	 */
	public function isOpen() {
		return $this->_open;
	}
}