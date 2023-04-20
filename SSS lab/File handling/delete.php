<?php
$status=unlink('new.txt');
if($status){
echo"File deleted successsfully";
}
else{
echo"sorry";
}
?>