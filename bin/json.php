#!/usr/bin/env php
<?php
	require_once(__DIR__ . '/boot.php');

	$act = new Ubn\App\TextToJson;

	$act->run();

	return;
