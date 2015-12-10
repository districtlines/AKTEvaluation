<?php

	class Evaluation {
		public $content;
		public $countries;

		public function __construct() {
			$this->countries = include_once dirname(__DIR__) . '/configs/countries.php';

			$this->setView();
		}

		public function setView() {
			ob_start();
			include_once 'views/elements/instructions.php';
			include_once 'views/elements/addItem.php';
			$this->content = ob_get_clean();
		}

	}