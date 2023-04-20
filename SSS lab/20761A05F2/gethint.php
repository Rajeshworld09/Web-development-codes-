<?php
// Array with names
$a=array("Rajesh","Govardhan","Sai Krishna","Manidhar","Rangaswamy","Venkatesh","Sai Nithin","Ashok","Jagadeesh","Eswari","Lasya","Sai","Thirupathi Rao","Srikanth","Tarun","Rohit","Snigdha","Sri Charan","Kalyan","Sri","Hari priya","Karthik","Uday","Anitha","Dhanush","Stella","Venky","Surya Tejaswini","Kusuma Priya","Meghana","Gopi Tarak","Karthik Sai","Haritha","Renuka","Neeraj","Vinay","Supriya","Lohith","Chaithanya","Vivek","Himasri","Indu","Durga prasad","Swetha","Taraka","Bhavana","Jahnavee","Tejswini","Swathi","Reshma","Durga Bhavani","Khaleel","Nageena","Riyaz","Sadiya Tabassum","Zeenath Aman","Siddharth","Joshnavalli","Akshay","Dharani","Jahnavi","Harshitha","Surendra","Naveen","Harsha","Sai Lalitha","Gopichand","Arjun");

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>