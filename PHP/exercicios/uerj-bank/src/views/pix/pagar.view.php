<?php
include(__DIR__ . "../../partials/components/title.php");
function errorMessage($error)
{
    $message = [
        'dontHaveEnoughBalance' => 'Você não tem saldo suficiente para esta operação.',
    ];
    echo '<div class="notification is-danger has-text-centered">' . $message[$error] . '</div>';
}

function allUsersList($users, $me){
  $users = array_filter($users, fn($user) => $user['id'] !== $me['id']);
  $htmlList = array_map( function($user){
    return '<li><label class="radio mb-3">
      <input type="radio" name="recipientId" value="'. $user['id'] .'">&nbsp;'. $user['fullName'].'</label></li>';
  }, $users);
  echo '<ul>'. join('',$htmlList) .'</ul>';
}

?>
<script type="text/javascript">
  $(document).ready(function() {
    // $('#amount').mask('#.##0,00', {
    //   reverse: true
    // });
  });
</script>
<div class="columns">
  <div class="column">
    <?php title("Área do PIX", "Pagar"); ?>
  </div>
</div>
<div class="columns">
  <div class="column">
    <form action="pix/pagar" method="post" class="pix-holder">
      <div class="form">
        <div class="inputs">
          <div class="columns">
            <div class="column">
            <?php isset($error) && !is_null($error) ? errorMessage($error) : '' ?>
              <div class="field is-horizontal">
                <div class="field-label is-normal">
                  <label class="label has-text-link">R$</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <p class="control">
                      <input class="input" type="text" name="amount" id="amount">
                    </p>
                    <div class="favs m-4">
                      <h6 class="title is-6 has-text-grey">Escolha um de seus amigos para enviar seu PIX!</h6>
                      <div class="menu">
                        <?php isset($error) && !is_null($error) ? '' : allUsersList($users, $me); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="columns">
            <div class="column">
              <div class="control">
                <button class="button is-link is-fullwidth" type="submit">Enviar PIX</button>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
</div>