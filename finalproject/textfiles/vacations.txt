<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>View Vacations</title>
</head>

<body>
    <?php 
    include 'index.html';// display menu 

    require_once 'login.php'; 

    $query = "SELECT image, location, duration, price from VACATIONS"; 
    $result = $conn->query($query); 
    if(!$result) die ("Could not access the database, please try again!"); 

    $rows = $result->num_rows; 
    if ($rows) {     
        echo '<table>';
        while ($row = mysqli_fetch_array($result)) {         
            echo '<tr>';
            echo '<td><img src="'.$row['image'].'"><br></td>';       
            echo '<th>Location:</th><td>' . $row['location'] . '<br></td>';      
            echo '<th>Duration:</th><td>' . $row['duration'] . '<br></td>';  
            echo '<th>Price:</th><td>Price:' . $row['price'] . '<br></td>';
            echo '</tr>';        
        } 
        echo '</table>';
    };

?>
</body>

</html>