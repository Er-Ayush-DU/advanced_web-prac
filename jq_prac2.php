<!-- Q2:- Select elements using ID, class, elements name, attribute name. -->

<!DOCTYPE html>
<html>
<head>
    <title>jQuery Selectors Example</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<h2 id="heading">This is a Heading</h2>

<p class="para">This is paragraph one.</p>
<p class="para">This is paragraph two.</p>

<button name="myButton">Click Me</button>

<input type="text" placeholder="Enter something" data-info="inputBox">

<script>
$(document).ready(function () {

    // Select using ID
    $("#heading").css("color", "blue");

    // Select using class
    $(".para").css("font-weight", "bold");

    // Select using element name
    $("button").css("background-color", "yellow");

    // Select using attribute name
    $("input[data-info]").css("border", "2px solid red");

});
</script>

</body>
</html>
