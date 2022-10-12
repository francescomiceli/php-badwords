
<!-- Creazione variabili -->
<?php

  $replace = $_GET['replace'];
  $a = 'Marco è uno' . $replace;
  

?>
<!-- Stampa var $a -->
<?php
  echo $a;
?>
<!-- Stampa lunghezza -->
<?php
  $lunghezza = strlen($a);
  echo $lunghezza;
?>
<!-- Sostituzione replace con asterischi -->
<?php
  $change = str_replace($replace, '***', $a);
  echo $change;
?>


<?php
  
  var_dump($_GET);

?>



  



