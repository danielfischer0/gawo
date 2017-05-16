<?php
$text = file('text.txt');
for ($i=0; $i<count($text); $i++) {
  echo $text[$i];
  echo '<br/>';
}
?>
