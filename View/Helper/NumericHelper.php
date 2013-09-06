<?php

App::uses('NumberHelper', 'View/Helper');
//App::uses('NumberLib', 'Tools.Utility');

/**
 * Todo: rename to MyNumberHelper some day?
 * Aliasing it then as Number again in the project
 * 
 * 2012-04-08 ms
 */
class NumericHelper extends NumberHelper {
	
	//public $helpers = array();
	/*
	protected $_settings = array(
	);


	protected $code = null;
	protected $places = 0;
	protected $symbolRight = null;
	protected $symbolLeft = null;
	protected $decimalPoint = '.';
	protected $thousandsPoint = ',';
	*/

/**
 * 
 */
	public function __construct($View = null, $settings = array()) {
		$settings = Set::merge(array('engine' => 'Tools.NumberLib'), $settings);
		parent::__construct($View, $settings);	
		/*	
		$i18n = Configure::read('Currency');
		if (!empty($i18n['code'])) {
			$this->code = $i18n['code'];
		}
		if (!empty($i18n['places'])) {
			$this->places = $i18n['places'];
		}
		if (!empty($i18n['symbolRight'])) {
			$this->symbolRight = $i18n['symbolRight'];
		}
		if (!empty($i18n['symbolLeft'])) {
			$this->symbolLeft = $i18n['symbolLeft'];
		}
		if (isset($i18n['decimals'])) {
			$this->decimalPoint = $i18n['decimals'];
		}
		if (isset($i18n['thousands'])) {
			$this->thousandsPoint = $i18n['thousands'];
		}
		*/
	}

/**
 * Returns the ordinal suffix of the number passed
 * @source http://stackoverflow.com/questions/3109978/php-display-number-with-ordinal-suffix
 * @param int $number
 * @return string
 */
	public function getOrdinalSuffix($number = 0){
		$ends = array('th','st','nd','rd','th','th','th','th','th','th');
		if (($number %100) >= 11 && ($number%100) <= 13){
		   return $number. 'th';
		}else{
		   return $number. $ends[$number % 10];
		}
	}

}