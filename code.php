<?php
    /*if($_SERVER['REQUEST_METHOD'] == 'POST') {
      $gebe = $_POST('gebe');
      $nehme = $_POST('nehme');
      echo $gebe;
      echo $nehme;
      $massiv = array($gebe => $nehme);
}*/
echo "<html>
<head>
<meta charset=\"utf-8\">
</head>
<body>
<h1>GaWo - Tausch</h1>
Hier ist möglich miteinander GaWo - veranstaltungen zu tauschen.
<br>
<form action=\"/code.php\" method=\"post\">
  <input type=\"text\" name=\"gebe\" value=\"Möchte abgeben\">
  <input type=\"text\" name=\"nehme\" value=\"Möchte haben\">
  <!--<button type=\"button\" name=\"button\">Laden</button>-->
  <input type=\"submit\" value=\"Laden\">
</form>
</body>
</html>
";
//if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $gebe = $_POST('gebe');
  $nehme = $_POST('nehme');
  echo $gebe;
  echo $nehme;
  $massiv = array($gebe => $nehme);//}
?>
