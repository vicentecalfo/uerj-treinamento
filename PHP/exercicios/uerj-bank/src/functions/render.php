<?php

function render($template, $data, $noWrapper = false, $customPath = null)
{
    extract($data);
    $customCssPath = APP_CONFIG['path']('view', "$template.css");
    $css = @file_get_contents($customCssPath);

    $activePath = is_null($customPath) ? $template : $customPath;

    $view = APP_CONFIG['path']('view', $template . ".view.php");

    $wrapper = [
        "head" => APP_CONFIG['path']('view', "partials/head.php"),
        "view" => $view,
        "footer" => APP_CONFIG['path']('view', "partials/footer.php"),
    ];

    foreach ($wrapper as $partial) {
        include $partial;
    }
}
