<?php

namespace Ubn\Base;

class Container {

	public static $_Instance = null;

	public static function getInstance()
	{
		if (self::$_Instance === null) {
			self::$_Instance = self::newInstance();
		}
		return self::$_Instance;
	}

	public static function newInstance()
	{
		return new Container();
	}

	protected $_Util = null;
	public function getUtil()
	{
		if ($this->_Util === null) {
			$this->_Util = new \Ubn\Base\Util;
		}

		return $this->_Util;
	}

	protected $_TextToJson = null;
	public function getTextToJson()
	{
		if ($this->_TextToJson === null) {
			$this->_TextToJson = new \Ubn\Act\TextToJson;
		}

		return $this->_TextToJson;
	}


	protected $_Refactoring = null;
	public function getRefactoring()
	{
		if ($this->_Refactoring === null) {
			$this->_Refactoring = new \Ubn\Act\Refactoring;
		}

		return $this->_Refactoring;
	}







} // End Class
