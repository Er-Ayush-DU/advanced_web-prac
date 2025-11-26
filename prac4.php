<!-- Q4:- Design a Login form and validate that form using PHP code. Display error message box when data is not valid otherwise redirect to the next page and display “Welcome username!”. -->


<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>

<h2>User Login</h2>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($user) || empty($pass)) {
        echo "<h3 style='color:red;'>Error: All fields are required!</h3>";
    } else {
        // Redirect to next page
        header("Location: welcome.php?user=$user");
        exit();
    }
}
?>

</body>
</html>
