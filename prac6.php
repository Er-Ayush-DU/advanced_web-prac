<!-- Q:6 - Write PHP Code to make connection to MySql database, create database and tables and perform insertion, deletion, and retrieval of the data (Using SQL operations like JOIN, ORDER BY, GROUP BY) Display the messages such as “The record is added in the database!” when data is inserted into the database, “A record is deleted from the database” when data is deleted from the database. Use appropriate button names such as Add Data, Delete Data, and Display Data. -->


<!DOCTYPE html>
<html>
<head>
    <title>PHP & MySQL Operations</title>
</head>
<body>

<h2>Database Operations</h2>

<form method="post">
    <button name="create_db">Create Database</button>
    <button name="create_table">Create Tables</button>
    <button name="add">Add Data</button>
    <button name="delete">Delete Data</button>
    <button name="display">Display Data</button>
</form>

<hr>

<?php

// 1. Connection
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// 2. Create Database
if (isset($_POST['create_db'])) {
    $q = "CREATE DATABASE college";
    if (mysqli_query($conn, $q)) {
        echo "<h3>Database 'college' created successfully!</h3>";
    } else {
        echo "<h3>Error creating database!</h3>";
    }
}

// Use database
mysqli_query($conn, "USE college");

// 3. Create Tables (students & courses)
if (isset($_POST['create_table'])) {

    $q1 = "CREATE TABLE students(
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(50),
            course_id INT
        )";

    $q2 = "CREATE TABLE courses(
            course_id INT AUTO_INCREMENT PRIMARY KEY,
            course_name VARCHAR(50)
        )";

    if (mysqli_query($conn, $q1) && mysqli_query($conn, $q2)) {
        echo "<h3>Tables created successfully!</h3>";
    } else {
        echo "<h3>Error creating tables!</h3>";
    }
}

// 4. Insert Data
if (isset($_POST['add'])) {

    // Insert course
    mysqli_query($conn, "INSERT INTO courses(course_name) VALUES ('BCA')");

    // Insert student
    mysqli_query($conn, "INSERT INTO students(name, course_id) VALUES ('Ayush', 1)");

    echo "<h3>The record is added in the database!</h3>";
}

// 5. Delete Data
if (isset($_POST['delete'])) {

    mysqli_query($conn, "DELETE FROM students WHERE id = 1");

    echo "<h3>A record is deleted from the database!</h3>";
}

// 6. Display Data using JOIN, ORDER BY, GROUP BY
if (isset($_POST['display'])) {

    echo "<h3>Student Records (Using JOIN + ORDER BY)</h3>";

    $query = "
        SELECT students.id, students.name, courses.course_name
        FROM students
        JOIN courses ON students.course_id = courses.course_id
        ORDER BY students.name ASC
    ";

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['id'] . " | Name: " . $row['name'] . 
             " | Course: " . $row['course_name'] . "<br>";
    }

    echo "<hr><h3>Group By Example (Count Students Per Course)</h3>";

    $query2 = "
        SELECT course_id, COUNT(*) AS total_students 
        FROM students 
        GROUP BY course_id
    ";

    $result2 = mysqli_query($conn, $query2);

    while ($row = mysqli_fetch_assoc($result2)) {
        echo "Course ID: " . $row['course_id'] . 
             " | Total Students: " . $row['total_students'] . "<br>";
    }
}

?>

</body>
</html>
