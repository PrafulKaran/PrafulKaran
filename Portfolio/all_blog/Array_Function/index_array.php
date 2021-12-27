
<!-- The array() function is used to create an array -->

<?php
$city=array("Tokyo","Delhi","Dhaka");
echo "I like " . $city[0] . ", " . $city[1] . " and " . $city[2] . ".";
?>

<!-- The array_pop() function deletes the last element of an array. -->
<?php
echo"<br><br>";
$a=array("Bricks","Cement","Sand");
array_pop($a);
print_r($a);
?>


<!-- The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key. -->

<!-- For one key  -->
<?php
echo"<br><br>";
$a=array("Stone","paper","Scissor","Thread","Out");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";

?>

<!-- For Multiple Key -->
<?php
echo"<br><br>";
$a=array("Stone","paper","Scissor","Thread","Out");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>



<!-- The count() function returns the number of elements in an array. -->
<?php
echo"<br><br>";
$boys=array("Mohan","Sohan","Rohan");
echo count($boys);
?>


<!-- The list() function is used to assign values to a list of variables in one operation. -->
<?php
echo"<br><br>";
$my_array = array("Dog","Cat","Horse");
list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";
?>



<!-- The asort() function sorts an associative array in ascending order, according to the value. -->
<?php
echo"<br><br>";
$age=array("Mohan"=>"35","Rohan"=>"37","Sohan"=>"43");
asort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>


<!-- The sizeof() function returns the number of elements in an array.
The sizeof() function is an alias of the count() function. -->
<?php
echo"<br><br>";
$cars=array("Volvo","BMW","Toyota","Tata","Tesla","Audi");
echo sizeof($cars);
?>




<!-- The rsort() function sorts an indexed array in descending order. -->
<?php
echo"<br><br>";
$cars=array("Volvo","BMW","Toyota");
rsort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
    echo"<br>";
  echo $cars[$x];
  echo "<br>";
  }
?>

<!-- The asort() function sorts an associative array in ascending order, according to the value. -->
<?php
echo"<br><br>";
$cars=array("Volvo","BMW","Toyota");
asort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
    echo"<br>";
  echo $cars[$x];
  echo "<br>";
  }
?>


<!-- The array_sum() function returns the sum of all the values in the array. -->
<?php
echo"<br><br>";
$a=array(5,15,25);
echo array_sum($a);
?>


<!-- The in_array() function searches an array for a specific value. -->
<?php
echo"<br><br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>

