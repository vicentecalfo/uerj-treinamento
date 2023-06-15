<?php
include(__DIR__ . "/partials/components/title.php");
?>

<div class="columns">
  <div class="column">
    <?php title("Bem vindo,", $user["fullName"]); ?>
  </div>
</div>
<div class="columns">
  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="extrato">
          <span>
            <h3 class="title is-3"><?php echo $account['balance']; ?></h3>
            <small>Seu limite atual é de <?php echo $account['accountLimit']; ?>.</small>
          </span>
          <span>
            <a href="extrato" class="button is-link">Ver extrato</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>