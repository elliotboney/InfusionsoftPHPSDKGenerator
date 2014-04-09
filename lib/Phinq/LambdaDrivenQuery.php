<?php

	namespace Phinq;

	use Closure;

	abstract class LambdaDrivenQuery implements Query, LambdaDriven {

		private $lambda;

		public function __construct(Closure $lambda) {
			$this->lambda = $lambda;
		}

		public final function getLambdaExpression() {
			return $this->lambda;
		}

	}
	
?>
