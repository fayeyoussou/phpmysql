<?php
    class IjdbRoutes {
        public function callAction($route)
            {
                include __DIR__ . '/../includes/DatabaseConnection.php';
                $jokesTable = new DatabaseTable($pdo, 'joke', 'id');
	            $authorsTable = new DatabaseTable($pdo, 'author', 'id');
                if ($route === 'joke/list') {
                    include __DIR__ . '/../classes/controllers/JokeController.php';
                    return (new JokeController($jokesTable, $authorsTable))->list();
                    // return $controller->list();
                }
                else if ($route === 'joke/edit') {
                    include __DIR__ . '/../classes/controllers/JokeController.php';
                    return (new JokeController($jokesTable, $authorsTable))->edit();
                    // return $controller->edit();
                }
                else if ($route === 'joke/delete') {
                    include __DIR__ . '/../classes/controllers/JokeController.php';
                    return (new JokeController($jokesTable, $authorsTable))->delete();
                    // return $controller->delete();
                }
                else if ($route === 'register') {
                    include __DIR__ . '/../classes/controllers/RegisterController.php';
                    return (new RegisterController($authorsTable))->showForm();
                    // return $controller->showForm();
                }else
                {
                    include __DIR__ . '/../classes/controllers/JokeController.php';
                    return (new JokeController($jokesTable, $authorsTable))->home();
                    // return $controller->home();
                }
                // return $page;
            }
    }