<?php
    namespace Ijdb;
    class IjdbRoutes {
        public function callAction($route)
            {
		        include __DIR__ . '/../../includes/DatabaseConnection.php';

                $jokesTable = new \youtech\DatabaseTable($pdo, 'joke', 'id');
	            $authorsTable = new \Youtech\DatabaseTable($pdo, 'author', 'id');
                if ($route === 'joke/list') {
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
                }
            }
    }