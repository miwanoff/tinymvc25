<?php
/*
A router class for determining the requested page.
> hooks controller and model classes;
> creates instances of page controllers and calls actions of these controllers.
*/

class Route
{

    public static function start()
    {
        // controller and default action
        $controller_name = 'Main';
        $action_name     = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // get the controller name
        if (! empty($routes[1])) {
            $controller_name = $routes[1];
        }

        // get the action name
        if (! empty($routes[2])) {
            $action_name = $routes[2];
        }

        // add prefixes
        $model_name      = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name     = 'action_' . $action_name;

/*
echo "Model: $model_name <br>";
echo "Controller: $controller_name <br>";
echo "Action: $action_name <br>";
*/

// hook the file with the model class (there may not be a model file)

        $model_file = strtolower($model_name) . '.php';
        $model_path = "application/models/" . $model_file;
        if (file_exists($model_path)) {
            include "application/models/" . $model_file;
        }

        // hook the file with the controller class
        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "application/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include "application/controllers/" . $controller_file;

            // create a controller
            $controller = new $controller_name;
            $action     = $action_name;
        } else {
            /*
it would be correct to throw an exception here,
but to simplify things we will immediately make a redirect to the 404 page
*/
            Route::ErrorPage404();
        }
        if (method_exists($controller, $action)) {
            // call the controller action
            $controller->$action();
        } else {
            // here it would also be more reasonable to throw an exception
            Route::ErrorPage404();
        }

    }

    public static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
        ob_end_flush();
    }

}