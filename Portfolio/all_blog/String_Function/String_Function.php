<!-- The echo() function outputs one or more strings. -->
<?php
echo "Web Technology";
?>

<!-- The addcslashes() function returns a string with backslashes in front of the specified characters. -->
<?php
echo"<br>";
$str = addcslashes("Web Technology","T");
echo($str);
?>


<!-- The bin2hex() function converts a string of ASCII characters to hexadecimal values. -->
<?php
echo"<br>";
$str = bin2hex("P");
echo($str);
?>



<!-- The count_chars() function returns information about characters used in a string (for example, how many times an ASCII character occurs in a string, or which characters that have been used or not been used in a string). -->
<?php
echo"<br>";
$str = "Web Technology";
echo count_chars($str,3);
?> 



<!-- The chunk_split() function splits a string into a series of smaller parts. -->
<?php
echo"<br>";
$str = "Web Technology";
echo chunk_split($str,1,"<br>");
?> 



<!-- The explode() function breaks a string into an array. -->
<?php
$str = "Web Technology is all about HTML CSS JS and PHP.";
print_r (explode(" ",$str));
?>


<!-- The htmlspecialchars() function converts some predefined characters to HTML entities. -->
<?php
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>

<!-- Removes whitespace or other predefined characters from the right side of a string -->
<?php
echo"<br>";
$str = "Web Technology";
echo $str . "<br>";
echo rtrim($str,"Technology");
?>


<!-- The str_ireplace() function replaces some characters with some other characters in a string. -->
<?php
echo"<br>";
echo str_ireplace("name","Praful Karan","Hello I am Name");
?>


<!-- The str_pad() function pads a string to a new length. -->
<?php
echo "<br>";
$str = "Web Technology";
echo str_pad($str,20,"$");
?>


<!-- Repeat Multiple Times  -->
<?php
echo"<br>";
echo str_repeat("Web Technology<br>",5);
?>




<!-- The str_shuffle() function randomly shuffles all the characters of a string. -->
<?php
echo str_shuffle("Web Technology");
?>

<!-- The strcasecmp() function compares two strings. -->
<?php
echo "<br>";
echo strcasecmp("web technology","WEB TECHNOLOGY");
?>



<!-- The wordwrap() function wraps a string into new lines when it reaches a specific length. -->
<?php
$str = "I have failed over and over again in my life that is why i succeed";
echo "<br>";
echo wordwrap($str,15,"<br>\n");
?>



<!-- The is_integer() function checks whether a variable is of type integer or not. -->
<?php
echo"<br><br>";
$a = 32;
echo "a is " . is_integer($a) . "<br>";

$b = 0;
echo "b is " . is_integer($b) . "<br>";

$c = 32.5;
echo "c is " . is_integer($c) . "<br>";

$d = "32";
echo "d is " . is_integer($d) . "<br>";

$e = true;
echo "e is " . is_integer($e) . "<br>";

$f = "null";
echo "f is " . is_integer($f) . "<br>";
?>



<!-- The is_null() function checks whether a variable is NULL or not. -->
<?php
echo"<br><br>";
$a = 0;
echo "a is " . is_null($a) . "<br>";

$b = null;
echo "b is " . is_null($b) . "<br>";

$c = "null";
echo "c is " . is_null($c) . "<br>";

$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>



<!-- he is_numeric() function checks whether a variable is a number or a numeric string. -->
<?php
echo"<br><br>";
$a = 32;
echo "a is " . is_numeric($a) . "<br>";

$b = 0;
echo "b is " . is_numeric($b) . "<br>";

$c = 32.5;
echo "c is " . is_numeric($c) . "<br>";

$d = "32";
echo "d is " . is_numeric($d) . "<br>";

$e = true;
echo "e is " . is_numeric($e) . "<br>";

$f = null;
echo "f is " . is_numeric($f) . "<br>";
?>


<!-- The is_string() function checks whether a variable is of type string or not. -->
<?php
echo"<br><br>";
$a = "Hello";
echo "a is " . is_string($a) . "<br>";

$b = 0;
echo "b is " . is_string($b) . "<br>";

$c = 32;
echo "c is " . is_string($c) . "<br>";

$d = "32";
echo "d is " . is_string($d) . "<br>";

$e = true;
echo "e is " . is_string($e) . "<br>";

$f = "null";
echo "f is " . is_string($f) . "<br>";

$g = "";
echo "g is " . is_string($g) . "<br>";
?>


<!-- The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. -->
<?php
echo"<br><br>";
$a = 340;
// True because $a is set
if (isset($a)) {
    echo "<br>";
  echo "Variable 'a' is set.<br>";
}

$b = null;
// False because $b is NULL
if (isset($b)) {
  echo "Variable 'b' is set.";
}
?>



<!-- The print_r() function prints the information about a variable in a more human-readable way. -->
<?php
echo"<br><br>";
$a = array("red", "green", "blue");
print_r($a);

echo "<br>";

$b = array("Amit"=>"35", "Rahul"=>"37", "Mohan"=>"43");
print_r($b);
?>


<!-- The unset() function unsets a variable. -->
<?php
echo"<br><br>";
$a = "Web Technology";
echo "The value of variable 'a' before unset: " . $a . "<br>";
unset($a);
$a ="Praful Karan";
echo "The value of variable 'a' after unset: " . $a;
?>

<!-- The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s). -->
<?php
echo"<br><br>";
$a = array("red", "green", "blue");
echo var_dump($a);
?>


<!-- The var_export() function outputs or returns structured information about a variable. -->
<?php
$a = 32;
echo var_export($a) . "<br>";

$b = "Hello world!";
echo var_export($b) . "<br>";

$c = 32.5;
echo var_export($c) . "<br>";
?>
