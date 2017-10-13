<?php
echo "<html>
<head>
<meta charset=\"utf-8\">
</head>
<body>
<h1>GaWo - Tah</h1>
Hier ist möglich m df - veranstaltungen zu tauschen.
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
if($_SERVER['REQUEST_METHOD'] == 'POST') {
 $gebe = ($_POST['gebe']);
 $nehme = ($_POST['nehme']);
 /*$htmlfront = '<html><head><meta charset="utf-8"></head><body>';
 $htmlend = '</body></html>';
 echo $htmlfront.=$gebe.=$htmlend;
 echo $htmlfront.=$nehme.=$htmlend;*/
 echo $gebe;
 echo $nehme;
 /*$massiv = array($gebe => $nehme);
 for ($i=0; $i>count($massiv); $i++) {
   echo $massiv[$i];
 }*/
}
?>
