<?php

namespace Ubn\Act;

class Refactoring extends \Ubn\Base\Object {

	public function run()
	{
		//var_dump(__METHOD__);

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

		$json = json_decode(file_get_contents($this->_JsonFilePath), true);
		$json["N'Ko"] = $json['NKo']; //for gucharmap.po

		$po = new \Ubn\Util\PoFile;
		$po
			->setSrcFilePath($src)
			->setDesFilePath($des);
		;

		$po->read();

		foreach($json as $key => $val) {
			$po->replace($key, $val);
		}

		$po->write();
	}


	protected $_JsonFilePath = The_UnicodeBlockName_Json_File_Path;
	public function setJsonFilePath($val)
	{
		$this->_JsonFilePath = $val;

		return $this;
	}

} // End Class
