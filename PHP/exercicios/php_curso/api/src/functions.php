<?php

function router($httpMethods, $route, $callback, $exit = true)
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

    if (empty($matches)) {

        $callback();
    } else {
        $params = array();

        foreach ($matches as $k => $v) {
            $params[$k] = $v[0];
        }
        $callback($params);
    }
    if ($exit) {
        exit;
    }
}
