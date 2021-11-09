<?php

require './vendor/autoload.php';

use App\Controller\Controller;
use App\Controller\UserController;
use App\Controller\Request;

error_reporting(E_ALL);
ini_set('display_errors', true);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Homepage</title>
    </head>
    <body>
    <?php
        if ($_GET) {
            error_log(class_exists(UserController::class));
            error_log(class_exists($_GET['controller'], false));
            $controller = isset($_GET['controller']) ? ((class_exists($_GET['controller'])) ? new $_GET['controller'] : NULL ) : null;
            $method = isset($_GET['method']) ? $_GET['method'] : null;
            if ($controller && $method) {
                if (method_exists($controller, $method)) {
                    $parameters = $_GET;
                    unset($parameters['controller']);
                    unset($parameters['method']);
                    call_user_func(array($controller, $method), $parameters);
                } else {
                    echo "Method doesn't found!";
                }
            } else {
                echo "Controller doesn't found!";
            }
        } else {
            echo '<h1>Users</h1><hr><div class="container">';
            echo 'Welcome to kind of MVC CRUD project<br /><br />';
            echo '<a href="?controller=/app/Controller/UserController&method=toList" class="btn btn-success">Vamos Começar!</a></div>';
        }
        ?>
    </body>
</html>