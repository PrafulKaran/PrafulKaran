<!-- The array_change_key_case() function changes all keys in an array to lowercase or uppercase. -->
<?php
echo"<br><br>";
$age=array("Amit"=>"35","Rahul"=>"37","Sohan"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
?>



<!-- The array_column() function returns the values from a single column in the input array. -->
<?php
// An array that represents a possible record set returned from a database
$a = array( 
  array(
    'id' => 5698,
    'first_name' => 'Amit',
    'last_name' => 'Kumar',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Mohit',
    'last_name' => 'Roy',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Ranjit',
    'last_name' => 'Singh',
  )
);
echo"<br><br>";   
$last_names = array_column($a, 'last_name');
print_r($last_names);
echo"<br><br>";   

?>

<!-- The array_diff() function compares the values of two (or more) arrays, and returns the differences.
This function compares the values of two (or more) arrays, and return an array that contains the entries from array1 that are not present in array2 or array3, etc. -->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
?>



<!-- The array_intersect() function compares the values of two (or more) arrays, and returns the matches.
This function compares the values of two or more arrays, and return an array that contains the entries from array1 that are present in array2, array3, etc. -->

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_intersect($a1,$a2);
print_r($result);
?>



<!-- The array_merge() function merges one or more arrays into one array. -->
<?php
echo"<br><br>";
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>



<!-- The array_slice() function returns selected parts of an array. -->
<?php
echo"<br><br>";
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
?>


<!-- The array_reverse() function returns an array in the reverse order. -->
<?php
echo"<br><br>";
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
?>


<!-- The array_search() function search an array for a value and returns the key. -->
<?php
echo"<br><br>";
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>


<!-- he array_unique() function removes duplicate values from an array. If two or more array values are the same, the first appearance will be kept and the other will be removed. -->
<?php
echo"<br><br>";
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?>

<!-- The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array. -->
<?php
echo"<br><br>";
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
?>

<!-- The range() function creates an array containing a range of elements. -->
<?php
echo"<br><br>";
$number = range(0,5);
print_r ($number);
?>

