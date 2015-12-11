<?php

	class Evaluation {
		public $content;
		public $countries;
		public $navBrand;
		public $defaultEmail;
		public $todaysDate;

		public function __construct() {
			$this->countries = include_once dirname(__DIR__) . '/configs/countries.php';
			$this->navBrand = 'AKT | Front-End';

			/**
			 * Starting below this docBlock, set the variable todaysDate to the current date in the following format:
			 * {textualRepresntation of dayOfTheWeek-fullName}, {month-fullName} {dayOfTheMonth-noLeadingZeros}{englishOrdinalSuffix} {year-4Digits}
			 * IE: Friday, February 26th 2010
			 *
			 * @var User friendly today's date.
			 * @access public
			 */



			/**
			 * Just a test to see if I can set a defaultEmail. It's not necessary to any functionality.
			 *
			 * @var mixed
			 * @access public
			 */
			$this->defaultEmail = 'uhoh@thisisntright.co.biz';
			$this->setView();
		}

		public function setView() {
			ob_start();
			include_once 'views/elements/instructions.php';
			include_once 'views/elements/addItem.php';
			$this->content = ob_get_clean();
		}

	}