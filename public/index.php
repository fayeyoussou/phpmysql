<?php

try {
	include __DIR__ . '/../includes/autoload.php';
	$route = $_REQUEST['q']; //if no route variable is set, use 'joke/home'
	
	$entryPoint = new \Youtech\EntryPoint($route,$_SERVER['REQUEST_METHOD'],new \Ijdb\IjdbRoutes());
	// (new EntryPoint($route))->run();
	$entryPoint->run();
	
}
catch (\PDOException $e) {
	$title = 'An error has occurred';
	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}