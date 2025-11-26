<!-- Q1:- Write a PHP script to reverse the digits of a number. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  function reverseNumber($number)
  {
    $reversed = 0;
    while ($number > 0) {
      $digit = $number % 10;
      $reversed = $reversed * 10 + $digit;
      $number = (int) ($number / 10);
    }
    return $reversed;
  }

  $number = 12345;
  $reversedNumber = reverseNumber($number);
  echo "Original Number: " . $number . "\n";
  echo "Reversed Number: " . $reversedNumber . "\n";
  ?>



</body>

</html>