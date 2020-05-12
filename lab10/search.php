<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 10</title>
</head>

<body>
    <?php 
     include 'menu.html';

     require_once 'login.php'; 
      
     $query = "SELECT * from CUSTOMER"; 
     $result = $conn->query($query); 
     if(!$result) die ("Could not access the database, please try again!"); 

     $firstName = "";

     if (isset($_POST['submit'])){
          $firstName = $_POST['first_name'];
          $query = "SELECT * from CUSTOMER WHERE firstName = '$firstName';"; 
          $result=mysqli_query($conn, $query);
           
          if($result) { 
            $rows = $result->num_rows;
                if ($rows != 0){
                    echo "<br><h1 class = 'centered'>Search Results:</h1><tr><th>Customer ID</th><th>Last Name</th><th>First Name</th><th>Street Address 1</th><th>Street Address 2</th><th>City</th><th>State</th><th>Postal Code</th><th>Country</th><th>Email</th><th>Home Phone</th><th>Facebook URL</th><th>Cell</th><th>Password</th><th>Salesperson ID</th></tr>"; 
                
                 for ($j = 0; $j < $rows; ++$j){ 
                      $row = $result->fetch_array(MYSQLI_NUM); 

                      echo "<tr>"; 
                      for ($k = 0; $k < 16; ++$k) 
                           echo "<td>".htmlspecialchars($row[$k])."</td>"; 
                      echo "</tr>";
                  } 

                 echo "</table>"; 
              }
              else{
                echo "<br><h1>Sorry, no user found. </h1>";
                }
            }
          else { 
            echo "There was an error, please resumbit the form!"; 
          } 

          mysqli_close($conn);                 
     }
?>

    <br><br>
    <div>
        <h3>Enter First Name to Search</h3>
        <form action="" method="post">
            <p>
                <label>First Name:</label>
                <input name="first_name" required="required" placeholder="Enter a First Name" type="text"><br><br>
                <input value="Search Database" name="submit" type="submit">
            </p>
        </form>
    </div>

</body>

</html>
