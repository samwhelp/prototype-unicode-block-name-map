<?php

namespace Ubn\Util;

class PoFile extends \Ubn\Base\Object {

	public function read()
	{
		$this->_Data = file($this->_SrcFilePath, FILE_IGNORE_NEW_LINES);

		$this->index();
	}

	public function write()
	{
		$rtn = '';
		foreach($this->_Data as $num => $line) {
			$rtn .= $line . PHP_EOL;
		}

		file_put_contents($this->_DesFilePath, $rtn);
	}

	public function replace($msgid, $msgstr)
	{
		if (!array_key_exists($msgid, $this->_IndexMap)) {
			return;
		}

		$indexMsgId = $this->_IndexMap[$msgid];
		$indexMsgStr = $indexMsgId + 1;

		if (!array_key_exists($indexMsgStr, $this->_Data)) {
			return;
		}

		$this->_Data[$indexMsgStr] = 'msgstr "' . $msgstr . '"';

	}

	protected function index()
	{
		foreach ($this->_Data as $num => $line) {
			if ($this->isMsgIdLine($line)) {
				$key = $this->grepMsgIdVal($line);
				$this->_IndexMap[$key] = $num;
			}
		}
	}

	protected function isMsgIdLine($line)
	{
		if (substr($line, 0, 5) === 'msgid') {
			return true;
		}

		return false;
	}

	protected function grepMsgIdVal($line)
	{
		return substr($line, 7, -1);
	}

	protected $_IndexMap = array();
	protected $_Data = array();

	protected $_SrcFilePath = The_UnicodeBlockName_Json_File_Path;
	public function setSrcFilePath($val)
	{
		$this->_SrcFilePath = $val;

		return $this;
	}

	protected $_DesFilePath = The_UnicodeBlockName_Json_File_Path;
	public function setDesFilePath($val)
	{
		$this->_DesFilePath = $val;

		return $this;
	}

} // End Class
