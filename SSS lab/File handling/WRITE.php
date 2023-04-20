<?php
$fp=fopen('new.txt','w');
fwrite($fp,'welcome ');

fclose($fp);
echo"FILE WRITTEN SUCCESSFULLY";
?>