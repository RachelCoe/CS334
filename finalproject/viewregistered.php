<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>View User</title>
</head>

<body>
    <?php 
     include 'index.html';// display menu 

     require_once 'login.php'; 
      
$query = "SELECT firstName, lastName, streetAddress1, streetAddress2, city, state, postalCode, country, email, phone from USERS";     $result = $conn->query($query); 
     if(!$result) die ("Could not access the database, please try again!"); 

     $rows = $result->num_rows; 
     echo "<table style = \"font-size:100%\"><tr><th>First Name</th><th>Last Name</th><th>Street Address 1</th><th>Street Address 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Phone</th></tr>"; 
    
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