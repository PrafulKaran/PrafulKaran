<!-- The array_combine() function creates an array by using the elements from one "keys" array and one "values" array. -->
<?php
$fname=array("Rohit","Amit","Moni");
$age=array("45","37","33");

$c=array_combine($fname,$age);
print_r($c);
?>



