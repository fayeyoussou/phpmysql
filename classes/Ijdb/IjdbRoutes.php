<?php

namespace Ijdb;

class IjdbRoutes
{
    public function getRoutes()
    {
        include __DIR__ . '/../../includes/DatabaseConnection.php';

        $jokesTable = new \youtech\DatabaseTable($pdo, 'joke', 'id');
        $authorsTable = new \Youtech\DatabaseTable($pdo, 'author', 'id');
        $jokeController = new \Ijdb\Controllers\Joke($jokesTable, $authorsTable);
        $routes = [
			'joke/edit' => [
				'POST' => [
					'controller' => $jokeController,
					'action' => 'saveEdit'
				],
				'GET' => [
					'controller' => $jokeController,
					'action' => 'edit'
				]
				
			],
			'joke/delete' => [
				'POST' => [
					'controller' => $jokeController,
					'action' => 'delete'
				]
			],
			'joke/list' => [
				'GET' => [
					'controller' => $jokeController,
					'action' => 'list'
				]
			],
			'' => [
				'GET' => [
					'controller' => $jokeController,
					'action' => 'home'
				]
			]
		];
        return $routes;
        $method = $_SERVER['REQUEST_METHOD'];
        $controller = $routes[$route][$method]['controller'];
        $action = $routes[$route][$method]['controller'];
        return $controller->$action();

        /* if ($route === 'joke/list') {
                    return (new \Ijdb\Controllers\Joke($jokesTable, $authorsTable))->list();
                }
                else if ($route === 'joke/edit') {
                    return (new \Ijdb\Controllers\Joke($jokesTable, $authorsTable))->edit();
                }
                else if ($route === 'joke/delete') {
                    return (new \Ijdb\Controllers\Joke($jokesTable, $authorsTable))->delete();
                }
                else if ($route === 'register') {
                    return (new \Ijdb\Controllers\Register($authorsTable))->showForm();
                }else
                {
                    return (new \Ijdb\Controllers\Joke($jokesTable, $authorsTable))->home();
                } */
    }
}
