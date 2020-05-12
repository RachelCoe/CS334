<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Midterm CS334</title>
</head>

<body>
    <style>
        body {
            background-color: white;
            color: black;
            font-family: helvetica;
            padding-left: 5px;
        }

    </style>

    <?php
        $months = array("January"=> 31,"February"=> 28,"March"=> 31,"April"=> 30,"May"=> 31,"June"=> 30,"July"=> 31,"August"=> 31,"September"=> 30,"October"=> 31,"November"=> 30,"December"=> 31);
    
        ksort($months);
    
        echo"<p><b>Below are the months of the year sorted alphabetically:</b></p>";
        foreach($months as $month => $numdays){
            $tablerow = <<< tablerow
            <tr>
            <td>$month</td>
            <td>$numdays</td><br>
            </tr>
            tablerow;
            
            print"$tablerow";
        }
    print "</table>";
    echo "<br><br><br><br><br><br><br>";
    echo "<p><i>Check out my source code below:</i></p>";
    show_source("midterm.php");
    ?>

</body>

</html>
