<?php
$fp=fopen('new.txt','a');
fwrite($fp,'this is additional text');
fwrite($fp,'boom');
fclose($fp);
echo"File appended successfully";
?>