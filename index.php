
<!-- Creazione variabili -->
<?php

  $replace = $_GET['replace'];
  $a = 'Marco è uno stupido';
  

?>
<!-- Stampa var $a -->
<?php
  echo $a . '<br>';
?>

<!-- Stampa lunghezza -->
<?php
  $lunghezza = strlen($a);
  echo $lunghezza . '<br/>';
?>
<!-- Sostituzione replace con asterischi -->
<?php
  $change = str_replace($replace, '***', $a);
  echo $change;
?>




  



