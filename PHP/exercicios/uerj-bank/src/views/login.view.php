<?php

function errorMessage($error)
{
    $message = [
        'errorEmptyField' => 'Por favor, preencha todos os campos.',
        'errorEmailDoesntExist' => 'Este e-mail não está cadastrado.',
        'errorPasswordIncorrect' => 'A senha não está correta.'
    ];
    echo '<div class="notification is-danger has-text-centered">' . $message[$error] . '</div>';
}

?>

<div class="login">
    <div class="card p-4">
        <div class="card-content">
            <div class="content">
                <img src="images/UERJ-Bank-logo.png" class="logo" />
                <h1 class="title is-4 has-text-centered">Acesse sua conta!</h1>
                <?php echo isset($error) ? errorMessage($error) : ''; ?>
                <form action="entrar" method="post">
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <input class="input" type="text" name="email" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <input class="input" type="password" name="password" placeholder="Senha">
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <button class="button is-link is-fullwidth" type="submit">Entrar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>