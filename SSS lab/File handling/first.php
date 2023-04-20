<?php
$filename="C:\\wamp64\\www\\20761A05F2\\File handling\\file.txt";
$first = fopen($filename,"r");
$c=fread($first,filesize($filename));
echo $c;
fclose($first);
?>
