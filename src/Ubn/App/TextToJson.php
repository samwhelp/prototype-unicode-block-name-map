<?php

namespace Ubn\App;

class TextToJson extends \Ubn\Base\Object {

	public function run()
	{
		//var_dump(__METHOD__);

		$act = $this->getContainer()->getTextToJson()
			->run()
		;


	}
} // End Class
