<?php

	class Evaluation {
		public $content;
		public $countries;
		public $defaultEmail;

		public function __construct() {
			$this->countries = include_once dirname(__DIR__) . '/configs/countries.php';


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