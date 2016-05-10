<?php

namespace Ubn\Act;

class TextToJson extends \Ubn\Base\Object {

	public function run()
	{
		//var_dump(__METHOD__);

		$map = array();

		$msgid_list = file($this->_MsgidFilePath);

		$msgstr_list = file($this->_MsgstrFilePath);

		foreach ($msgid_list as $i => $msgid) {
			$key = trim($msgid);
			$val = trim($msgstr_list[$i]);
			$map[$key] = $val;
		}

		file_put_contents($this->_JsonFilePath, json_encode($map));


	}

	protected $_MsgidFilePath = The_UnicodeBlockName_Msgid_File_Path;
	public function setMsgidFilePath($val)
	{
		$this->_MsgidFilePath = $val;

		return $this;
	}

	protected $_MsgstrFilePath = The_UnicodeBlockName_Msgstr_File_Path;
	public function setMsgstrFilePath($val)
	{
		$this->_MsgstrFilePath = $val;

		return $this;
	}

	protected $_JsonFilePath = The_UnicodeBlockName_Json_File_Path;
	public function setJsonFilePath($val)
	{
		$this->_JsonFilePath = $val;

		return $this;
	}

} // End Class
