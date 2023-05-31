<?php

$menu = [
    array(
        "title" => "Acesso Rápido",
        "items" => array(
            "dashboard" => "Dashboard",
            "extrato" => "Extrato"
        )
    ),
    array(
        "title" => "Área do PIX",
        "items" => array(
            "pix/pagar" => "Pagar",
            "pix/favoritos" => "Lista de favoritos"
        )
    )
];


?>

<!DOCTYPE html>
<html>

<head>
    <base href="http://localhost/uerj-bank/" target="_self">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UERJ Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./styles.css">
    <?php echo !empty($css) ? "<style>$css</style>" : "" ?>
</head>

<body>
    <div class="app">
        <aside>
            <img src="images/UERJ-Bank-logo.png" class="logo" />
            <nav class="menu mt-6">

                <?php
                foreach ($menu as $parentItem) {
                    echo "<p class=\"menu-label\">" . $parentItem["title"] . "</p>";
                    echo "<ul class=\"menu-list is-primary\">";
                    foreach ($parentItem["items"] as $path => $label) {
                        $isLinkActive = $activePath === $path ? "is-active" : "";
                        echo "<li><a href=\"$path\" class=\"$isLinkActive\">$label</a></li>";
                    }
                    echo "</ul>";
                }
                ?>
            </nav>
        </aside>
        <main>