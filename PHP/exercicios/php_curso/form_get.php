<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">Curso PHP InovUERJ</h1>
            <p class="subtitle">Formulários!</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h2 class="title is-6">Confirmação de Matrícula</h2>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <div class="block">
                        <strong>Nome:</strong> <?php echo $_GET["nome"]; ?>
                    </div>
                    <div class="block">
                        <strong>E-mail:</strong> <?php echo $_GET["email"]; ?>
                    </div>
                    <div class="block">
                        <strong>Período:</strong> <?php echo $_GET["periodo"]; ?>
                    </div>
                    <div class="block">
                        <strong>Assuntos de interesse:</strong>
                        <?php
                        if (!isset($_GET["extras"])) {
                            echo '<div class="notification is-danger mt-5">O aluno não escolheu nenhuma opção.</div>';
                        } else {
                            echo "<ul>";
                            foreach ($_GET["extras"] as $extra) {

                                echo "<li>{$extra}</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </div>
                    <div class="block">
                        <strong>Sistema operacional de preferência:</strong> <?php echo !isset($_GET["sistema"]) ? "Não escolheu" : $_GET["sistema"]; ?>
                    </div>
                    <div class="block">
                        <strong>Deseja asisniar a nwesletter:</strong> <?php echo !isset($_GET["newsletter"]) ? "Não" : $_GET["newsletter"]; ?>
                    </div>
                </div>
                <div>
    </section>
</body>

</html>