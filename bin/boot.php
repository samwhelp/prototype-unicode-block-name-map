<?php
	require_once(dirname(__DIR__) . '/vendor/autoload.php');

	ini_set('memory_limit', '2048M');

	define('The_Root_Dir_Path', dirname(__DIR__));
	define('The_Asset_Dir_Path', The_Root_Dir_Path . '/asset');
	define('The_Var_Dir_Path', The_Root_Dir_Path . '/var');

	define('The_UnicodeBlockName_Dir_Path', The_Asset_Dir_Path . '/UnicodeBlockName');
	define('The_UnicodeBlockName_Msgid_File_Path', The_UnicodeBlockName_Dir_Path . '/msgid.txt');
	define('The_UnicodeBlockName_Msgstr_File_Path', The_UnicodeBlockName_Dir_Path . '/msgstr.txt');
	define('The_UnicodeBlockName_Json_File_Path', The_UnicodeBlockName_Dir_Path . '/map.json');
