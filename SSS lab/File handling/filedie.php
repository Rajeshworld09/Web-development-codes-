<?php
$filename="C:\\wamp64\\www\\20761A05F2\\File handling\\B.txt";
$first = fopen($filename,"r") or die("unable to open a file");
$c=fread($first,filesize($filename));
echo $c;
fclose($first);
?>
