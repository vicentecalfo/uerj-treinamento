<?php
include (__DIR__ . "/partials/components/title.php");
include (__DIR__ . "/partials/components/bankStatement.php");


?>
<div class="columns">
  <div class="column">
    <?php title("Minha conta", "Extrato"); ?>
  </div>
</div>
<div class="columns">
  <div class="column">
    <?php bankStatementTable($bankStatement); ?>
  </div>
</div>