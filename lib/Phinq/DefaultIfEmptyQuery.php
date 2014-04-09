<?php

	namespace Phinq;

	class DefaultIfEmptyQuery implements Query {

		private $defaultValue;

		public function __construct($defaultValue = null) {
			$this->defaultValue = $defaultValue;
		}

		public function execute(array $collection) {
			return empty($collection) ? array($this->defaultValue) : $collection;
		}
	}

?>