<?php

function router($httpMethods, $route, $callback, $guard = false)

{

    static $path = null;

    if ($path === null) {
        $path = parse_url($_SERVER['REQUEST_URI'])['path'];
        $scriptName = dirname(dirname($_SERVER['SCRIPT_NAME']));
        $scriptName = str_replace('\\', '/', $scriptName);
        $len = strlen($scriptName);
        if ($len > 0 && $scriptName !== '/') {
            $path = substr($path, $len);
        }
    }

    if (!in_array($_SERVER['REQUEST_METHOD'], (array) $httpMethods)) {
        return;
    }

    $matches = null;

    $regex = '#^' . str_replace('/', '\/', $route) . '$#';

    if (!preg_match_all($regex, $path, $matches)) {
        return;
    }

    try {
        if (empty($matches)) {
            authGuard($guard);
            $callback();
        } else {
            $params = array();

            foreach ($matches as $k => $v) {
                $params[$k] = $v[0];
            }
            authGuard($guard);
            $callback($params);
        }
    } catch (Exception $errorStack) {
        echo $errorStack;
    }

    exit;
}

function redirect($path){
    header("Location:" . APP_CONFIG['url'] . $path);
    exit;
}
