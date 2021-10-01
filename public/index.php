<?php

try {
	$route = $_REQUEST['q'] ?? 'joke/home'; //if no route variable is set, use 'joke/home'
	include __DIR__ .'/../classes/EntryPoint.php';
	$entryPoint = new EntryPoint($route);
	// (new EntryPoint($route))->run();
	$entryPoint->run();
	
}
catch (PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}
