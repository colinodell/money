<?php namespace browner12\money\exceptions;

use Exception;

class MoneyException extends Exception {

	/**
	 * constructor
	 *
	 * @param string $message
	 * @param int $code
	 * @param Exception $previous
	 */
	public function __construct($message, $code = 0, Exception $previous = null){
	
		//parent
		parent::__construct($message, $code, $previous);
	}
	
}