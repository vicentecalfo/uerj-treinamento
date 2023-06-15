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
            "pix/pagar" => "Pagar"
        )
    ),
    array(
        "title" => "Administração",
        "items" => array(
            "sair" => "Sair",

        )
    )
];


?>

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