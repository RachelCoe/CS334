<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 10 - Menu </title>
</head>

<body>
    <?php 
     include 'menu.html';// display menu 

     require_once 'login.php'; 
      
     $query = "SELECT * from CUSTOMER"; 
     $result = $conn->query($query); 
     if(!$result) die ("Could not access the database, please try again!"); 

     $rows = $result->num_rows; 
     echo "<table style = \"font-size:50%\"><tr><th>Customer ID</th><th>Last Name</th><th>First Name</th><th>Street Address 1</th><th>Street Address 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Home Phone</th><th>Facebook</th><th>Cell</th><th>UserID</th><th>Password</th><th>Salespperson ID</th></tr>"; 
    
     for ($j = 0; $j < $rows; ++$j) 
     { 
          $row = $result->fetch_array(MYSQLI_NUM); 

          echo "<tr>"; 
          for ($k = 0; $k < 16; ++$k) 
               echo "<td>".htmlspecialchars($row[$k])."</td>"; 
          echo "</tr>"; 
     } 

     echo "</table>"; 

?>
</body>

</html>
