<!-- 5. Design a student registration form, using appropriate input fields consisting of following: 
a. First Name
 b. Last Name 
c. Gender 
d. Roll Number 
e. Phone Number 
f. Course -->


<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<body>

<h2>Student Registration Form</h2>

<form method="post" action="submit.php">

    First Name: <input type="text" name="fname" required><br><br>

    Last Name: <input type="text" name="lname" required><br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

    Roll Number: <input type="text" name="roll" required><br><br>

    Phone Number: <input type="text" name="phone" required><br><br>

    Course:
    <select name="course" required>
        <option value="">Select Course</option>
        <option>BCA</option>
        <option>B.Voc SD</option>
        <option>BSc CS</option>
        <option>B.Tech CSE</option>
    </select>
    <br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>
