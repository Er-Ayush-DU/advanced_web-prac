<!-- Q3:- Write a PHP script to perform following string operations using in-built functions and built an interactive web page having buttons for each of the following operation: 
  a. Find the length of a string 
  b. Find a substring from a string 
  c. Replace text within a string 
  d. Remove whitespace and other predefined characters from both sides of a string. 
  e. Check if a value is a string 
  f. Convert the first character of each word in a string into uppercase. -->


  <!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>

<h2>String Operations in PHP</h2>

<form method="post">
    Enter a String: <input type="text" name="main_string" required>
    <br><br>

    <button name="length">Find Length</button>
    <button name="substring">Find Substring</button>
    <button name="replace">Replace Text</button>
    <button name="trim">Trim String</button>
    <button name="isstring">Check if Value is String</button>
    <button name="uppercase">Convert Words to Uppercase</button>
</form>

<hr>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $str = $_POST['main_string'];   // main user input

    // a. Find length of string
    if (isset($_POST['length'])) {
        echo "<h3>Length of String: " . strlen($str) . "</h3>";
    }

    // b. Find substring from string
    if (isset($_POST['substring'])) {
        echo "<h3>Substring (first 5 characters): " . substr($str, 0, 5) . "</h3>";
    }

    // c. Replace text
    if (isset($_POST['replace'])) {
        $newString = str_replace("a", "@", $str);
        echo "<h3>After Replace (a → @): $newString</h3>";
    }

    // d. Trim whitespaces
    if (isset($_POST['trim'])) {
        echo "<h3>Trimmed String: '" . trim($str) . "'</h3>";
    }

    // e. Check if value is string
    if (isset($_POST['isstring'])) {
        if (is_string($str)) {
            echo "<h3>Yes, the given value is a string.</h3>";
        } else {
            echo "<h3>No, not a string.</h3>";
        }
    }

    // f. Convert first character of each word to uppercase
    if (isset($_POST['uppercase'])) {
        echo "<h3>Uppercase Words: " . ucwords($str) . "</h3>";
    }
}
?>

</body>
</html>
