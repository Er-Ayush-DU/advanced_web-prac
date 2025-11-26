<!-- Q2:- Create a web page containing two text boxes and a button named “Evaluate”. When the user enters numbers in the text boxes and clicks on the “Evaluate” button, a function should evaluate the sum of the numbers and display the result -->


<!DOCTYPE html>
<html>
<head>
    <title>Sum Evaluation</title>
</head>
<body>

<h2>Sum of Two Numbers</h2>

<form method="post">
    Enter First Number: <input type="text" name="num1"><br><br>
    Enter Second Number: <input type="text" name="num2"><br><br>
    <button type="submit" name="evaluate">Evaluate</button>
</form>

<?php
if (isset($_POST['evaluate'])) {

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

    if (is_numeric($n1) && is_numeric($n2)) {
        $sum = $n1 + $n2;
        echo "<h3>Result: The sum of the numbers is $sum</h3>";
    } else {
        echo "<h3 style='color:red;'>Please enter valid numbers!</h3>";
    }
}
?>

</body>
</html>
