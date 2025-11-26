<!-- Change text color and contents using button click events using jQuery -->



<!DOCTYPE html>
<html>
<head>
    <title>jQuery Text Change Example</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

<h2 id="text">This is a sample text.</h2>

<button id="colorBtn">Change Text Color</button>
<button id="contentBtn">Change Text Content</button>

<script>
    $(document).ready(function() {

        // Change text color
        $("#colorBtn").click(function() {
            $("#text").css("color", "blue");
        });

        // Change text content
        $("#contentBtn").click(function() {
            $("#text").text("The text has been changed using jQuery!");
        });

    });
</script>

</body>
</html>
