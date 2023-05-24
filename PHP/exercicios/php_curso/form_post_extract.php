<?php

echo var_dump($_POST);
extract($_POST);

?>

<hr />

<?php echo $nome; ?><br />
<?php echo $email; ?><br /> 
<?php echo $periodo; ?><br /> 
<?php echo isset($extras) ? join(', ', $extras) : 'Não escolheu.' ?><br /> 
<?php echo $sistema; ?><br /> 
<?php echo $newsletter; ?><br /> 
