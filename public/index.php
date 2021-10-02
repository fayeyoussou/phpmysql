<?php

try {
	include __DIR__ . '/../includes/autoload.php';
	$route = $_REQUEST['q'] ?? 'joke/home'; //if no route variable is set, use 'joke/home'
	$entryPoint = new \Youtech\EntryPoint($route,new \Ijdb\IjdbRoutes());
	// (new EntryPoint($route))->run();
	$entryPoint->run();
	
}
catch (\PDOException $e) {
	$title = 'An error has occurred';

	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}
