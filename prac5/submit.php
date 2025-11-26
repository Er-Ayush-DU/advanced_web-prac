<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body>

<h2>Student Details Submitted Using POST</h2>

<?php
    echo "First Name: " . $_POST['fname'] . "<br>";
    echo "Last Name: " . $_POST['lname'] . "<br>";
    echo "Gender: " . $_POST['gender'] . "<br>";
    echo "Roll Number: " . $_POST['roll'] . "<br>";
    echo "Phone Number: " . $_POST['phone'] . "<br>";
    echo "Course: " . $_POST['course'] . "<br>";
?>

<br><br>

<a href="getdata.php?fname=<?php echo $_POST['fname']; ?>&lname=<?php echo $_POST['lname']; ?>">Show GET Example</a>

</body>
</html>
