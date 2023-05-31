<?php
include (__DIR__ . "/partials/components/title.php");

$formatBalance = "R$" . number_format($balance, 2, ",", ".");
?>

<div class="columns">
  <div class="column">
    <?php title("Bem vindo,", "Vicente Calfo"); ?>
  </div>
</div>
<div class="columns">
  <div class="column">
    <div class="card">
      <div class="card-content">
        <div class="extrato">
          <span>
            <h3 class="title is-3"><?php echo $formatBalance; ?></h3>
          </span>
          <span>
            <a href="extrato" class="button is-link">Ver extrato</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>