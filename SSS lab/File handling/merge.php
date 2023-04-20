<?php
$fp1=fopen("A.txt",'a+');
$file2=file_get_contents("new.txt");
fwrite($fp1,$file2);
echo"Files get merged"
?>