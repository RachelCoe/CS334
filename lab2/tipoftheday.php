<!DOCTYPE html>

<head>
    <title>Tip of the Day</title>
</head>

<body>
    <?php

    print "<h3>Here's Your Tip:</h3>";
    ?>
    <div style="border-color:green; border-style: groove; border-width:2px">
        <?php
    readfile("tips.txt");
    ?>
    </div>
    <br><br><br>
    <a href="phpcode.txt">Link to php code</a>
</body>

</html>
