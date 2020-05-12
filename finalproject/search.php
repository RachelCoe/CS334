<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <meta charset="UTF-8">
    <title>Search Inventory</title>
</head>

<body>

    <?php 
    include 'index.html';// display menu 

    $db_hostname = 'sql311.epizy.com'; 
    $db_database = 'epiz_25052625_final'; 
    $db_username = 'epiz_25052625'; 
    $db_password = 'FOqpLuVYlhRdh'; 

    //make connection
    $con=mysqli_connect($db_hostname, $db_username, $db_password, $db_database) or die("Unable to connect to MySQL: " . mysql_error());

    // Get values from form
    $location     = $_POST['location'];
    $type     = $_POST['type'];
    
    // perform query
    $sql = "SELECT * FROM INVENTORY WHERE location ='$location' and type ='$type'";
    $result = mysqli_query($con, $sql);
    
    if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();

    }
    $rows = mysqli_num_rows($result);
    /*$location = $row['location'];
    $name = $row['name'];
    $price = $row['price'];*/
    
    if ($rows) {     
    echo '<div class="search">';
    while ($row = mysqli_fetch_array($result)) {   
        echo '<div class="searchresults">';
        echo '<b>Location: </b>' . $row['location'] . '<br>';
        echo '<b>Name: </b>' . $row['name'] . '<br>';
        echo '<b>Price: </b>' . $row['price'] . '<br><br>';
        echo '</div>';
    } 
    echo '</div>';
};
        
    //close connection to database
    mysqli_close($con);
?>
    <div class="search">
        <p>Search by location and type:</p>
        <form action="" method="post" class="searchform">
            <p>
                <label>Location (London, Paris, Rome, Shanghai, Bora Bora):</label>
                <input name="location" required="required" placeholder="London" type="text"><br>
                <label>Type (Hotels, Attractions, Tours):</label>
                <input name="type" required="required" placeholder="Hotels" type="text">
                <input value="Submit" name="submit" type="submit">
            </p>
        </form>
    </div>

</body>

</html>
