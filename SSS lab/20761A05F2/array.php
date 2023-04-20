<!DOCTYPE html>
<html>
<body>

<?php
$num = array (
  array(10,20,30),
  array(12,15,13),
  array(7,5,2),
  array(19,17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  
  for ($col = 0; $col < 3; $col++) {
    echo $num[$row][$col];
	echo "<br>";
  }
  
}
?>

</body>
</html>
