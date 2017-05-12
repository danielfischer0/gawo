<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $gebe = $_POST('gebe');
      $nehme = $_POST('nehme');
      echo $gebe;
      echo $nehme;
      //$massiv = array($gebe => $nehme);
}
?>
