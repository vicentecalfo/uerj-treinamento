<?php
include(__DIR__ . "../../partials/components/title.php");
?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#amount').mask('#.##0,00', {
      reverse: true
    });
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
                        <ul class="menu-list">
                          <li><label class="radio mb-3">
                              <input type="radio" name="recipientId" value="1">
                              Vicente Calfo
                            </label></li>
                          <li><label class="radio">
                              <input type="radio" name="recipientId" value="3">
                              Enzo Marinelli
                            </label></li>
                        </ul>
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