<html>

<body>
    <style>
        body {
            background-color: white;
            color: navy;
            font-family: helvetica;
        }

        #wrapper {
            background-color: white;
        }

    </style>

    <h2>Thanks for submitting feeedback!</h2>
    <p>Below is the info you sumbitted!</p>
    <br>

    Your First Name
    <?php echo $_POST["firstName"]; ?><br>
    Your Last Name:
    <?php echo $_POST["lastName"]; ?><br>
    Your Feedback:
    <?php echo $_POST["feedback"]; ?><br>
    <br><br><br><br><br>
    <p>(Check out my source code below!)</p>
    <?php
show_source("thanks.php");
?>

</body>

</html>
