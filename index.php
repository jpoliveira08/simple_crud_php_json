<?php

require './vendor/autoload.php';

include_once './public/partials/header.php';

if ($_GET) {
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
}else { ?>

<div class="container"><h1>CRUD</h1><hr>
    Welcome to a simple MVC CRUD project<br/><br />
    <a href="?controller=App\Controller\UserController&method=toList" class="btn btn-success"> Let's Start ! </a>
</div>

<?php };

include_once './public/partials/footer.php';
?>