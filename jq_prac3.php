<!-- Q 3:- Run code on click events in jQuery. -->

<!DOCTYPE html>
<html>
<head>
    <title>jQuery Click Event Example</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<h2 id="message">Click the button to run jQuery code</h2>

<button id="runBtn">Run Code</button>

<script>
$(document).ready(function () {

    $("#runBtn").click(function () {

        // Change the text
        $("#message").text("jQuery click event executed!");

        // Change the color
        $("#message").css("color", "green");

        // Display alert
        alert("Button clicked! jQuery code executed.");

    });

});
</script>

</body>
</html>
