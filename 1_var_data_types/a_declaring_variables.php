<?php 
 /**
  * Declaring Variables:
In PHP, variables are used to store data values. To declare a variable, you simply use the dollar sign ($) followed by the variable name. Variable names must start with a letter or underscore (_) character, followed by any combination of letters, numbers, or underscores.
  */
  $name = "Sohan"; //String variable
  $age = 20; //Integer variable
  $height = 5.7233; //Float variable
  $isStudent = true; //Boolean variable
  //array
  $colors = array("Red", "Green", "Blue"); // indexed array
  $person = array("name" => "Sohan", "age"=> 30);// associative array
  /**
   * Data Types:
PHP supports several data types including:

String: A sequence of characters, enclosed within single quotes ' or double quotes ".
Integer: A whole number, positive or negative, without decimal point.
Float (or Double): A number with a decimal point or in exponential notation.
Boolean: Represents two possible states: true or false.
Array: A collection of key-value pairs or indexed elements.
   */
//printing variables
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Height: " . $height . "<br>";
echo "Is Student: " . ($isStudent ? 'true' : 'false') . "<br>";
echo "Colors: ";
print_r($colors);
echo "<br>";
echo "Person: " .''."<br>";
print_r($person);

//print $colors array
echo "Colors Array:<br>";
foreach($colors as $color){
    echo "$color<br>";
}
echo "<br>";
//print $person array
echo "Person Array:<br>";
foreach($person as $key => $value){
    echo "$key: $value<br>";
}

?>