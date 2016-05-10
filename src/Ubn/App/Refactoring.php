<?php

namespace Ubn\App;

class Refactoring extends \Ubn\Base\Object {

	public function run()
	{
		//var_dump(__METHOD__);

		$act = $this->getContainer()->getRefactoring()
			->run()
		;


	}
} // End Class
