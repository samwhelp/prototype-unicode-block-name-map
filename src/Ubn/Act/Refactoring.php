<?php

namespace Ubn\Act;

class Refactoring extends \Ubn\Base\Object {

	public function run()
	{
		//var_dump(__METHOD__);

		$this->init();

		$list = array(
			'gucharmap.po',
			'kdelibs4.po',
			'dialog.po'
		);


		foreach ($list as $key => $file) {
			$this->runEach($file, $file);
		}


	}


	protected function runEach($srcFile, $desFile)
	{
		$src = The_Asset_Dir_Path . '/Po/Src/' . $srcFile;
		$des = The_Asset_Dir_Path . '/Po/Des/' . $desFile;


		$po = new \Ubn\Util\PoFile;
		$po
			->setSrcFilePath($src)
			->setDesFilePath($des);
		;

		$po->read();

		foreach($this->_Map as $key => $val) {
			$po->replace($key, $val);
		}

		$po->write();
	}

	protected function init()
	{
		$this->loadMap();
		$this->loadMapAlias();
		$this->mergeMap();
		return $this;
	}

	protected function loadMap()
	{
		if (!file_exists($this->_MapFilePath)) {
			$this->_Map = array();
			return $this->_Map;
		}

		$this->_Map = json_decode(file_get_contents($this->_MapFilePath), true);

		return $this->_Map;
	}

	protected function loadMapAlias()
	{
		if (!file_exists($this->_MapAliasPath)) {
			$this->_MapAlias = array();
			return $this->_MapAlias;
		}

		$this->_MapAlias = json_decode(file_get_contents($this->_MapAliasPath), true);

		return $this->_MapAlias;
	}

	protected function mergeMap()
	{
		foreach ($this->_MapAlias as $key => $val) {
			if (!array_key_exists($val, $this->_Map)) {
				continue;
			}

			$this->_Map[$key] = $this->_Map[$val];
		}

		return $this;
	}

	protected $_Map = array();
	protected $_MapAlias = array();

	protected $_MapFilePath = The_UnicodeBlockName_Map_File_Path;
	public function setMapFilePath($val)
	{
		$this->_MapFilePath = $val;

		return $this;
	}

	protected $_MapAliasPath = The_UnicodeBlockName_MapAlias_File_Path;
	public function setMapAliasPath($val)
	{
		$this->_MapAliasPath = $val;

		return $this;
	}

} // End Class
