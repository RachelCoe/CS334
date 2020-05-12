<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 10 - Add Data</title>
</head>

<body>
    <?php 
     include 'menu.html';
     require_once 'login.php'; 
      
     $query = "SELECT * from CUSTOMER"; 
     $result = $conn->query($query); 
     if(!$result) die ("Could not access the database, please try again!"); 

     $rows = $result->num_rows; 

     $customerID = $lastName = $firstName = $streetAddress1 = $streetAddress2 = $city = $state = $postalCode = $country = $email = $homePhone = $facebookUrl = $cellPhone = $password = $salespersonID =  "";

     if (isset($_POST['submit'])){
          $customerID = fix_string($_POST['customerID']);
          $lastName = fix_string($_POST['lastName']);
          $firstName = fix_string($_POST['firstName']);
          $streetAddress1 = fix_string($_POST['streetAddress1']);
          $streetAddress2 = fix_string($_POST['streetAddress2']);
          $city = fix_string($_POST['city']);
          $state = fix_string($_POST['state']);
          $postalCode = fix_string($_POST['postalCode']);
          $country = fix_string($_POST['country']);
          $email = fix_string($_POST['email']);
          $homePhone = fix_string($_POST['homePhone']);
          $facebookUrl = fix_string($_POST['facebookUrl']);
          $cellPhone = fix_string($_POST['cellPhone']);
          $password = fix_string($_POST['password']);
          $salespersonID = fix_string($_POST['salespersonID']);

          $query = "INSERT INTO CUSTOMER VALUES ($customerID, '$lastName','$firstName','$streetAddress1', '$streetAddress2','$city','$state', $postalCode, '$country','$email', '$homePhone','$facebookUrl','$cellPhone','$password',$salespersonID);";

          $result=mysqli_query($conn, $query); 

          //if successfully insert data into database, displays message "successful". 
          if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
          echo "There was an error, please resumbit the form!"; 
          } 

          mysqli_close($conn);                 
     }
         

     echo <<<_END
     <br>
     <div>
     <form method="post" action="">
     <label for="customerID">Customer ID:</label>
    <input type="text"  name="customerID" value="$customerID"><br>

    <label for="lastName">Last name:</label>
  <input type="text"  name="lastName"  value="$lastName"><br>

  <label for="firstName">First name:</label>
  <input type="text"  name="firstName"  value="$firstName"><br>

  <label for="streetAddress1">Street Address 1:</label>
  <input type="text"  name="streetAddress1"  value="$streetAddress1"><br>

  <label for="streetAddress2">Street Address 2:</label>
  <input type="text"  name="streetAddress2"  value="$streetAddress2"><br>

  <label for="city">City:</label>
  <input type="text"  name="city"  value="$city"><br>

  <label for="state">State:</label>
  <input type="text"  name="state"  value="$state"><br>

  <label for="postalCode">Postal Code:</label>
  <input type="text"  name="postalCode"  value="$postalCode"><br>

  <label for="country">Country:</label>
  <input type="text"  name="country"  value="$country"><br>

  <label for="email">Email:</label>
  <input type="text"  name="email"  value="$email"><br>

  <label for="homePhone">Home Phone:</label>
  <input type="text"  name="homePhone"  value="$homePhone"><br>

  <label for="facebookURL">Facebook URL:</label>
  <input type="text"  name="facebookURL"  value="$facebookURL"><br>

  <label for="cellPhone">Cell Phone:</label>
  <input type="text"  name="cellPhone"  value="$cellPhone"><br>

  <label for="password">Password:</label>
  <input type="text"  name="password"  value="$password"><br>

  <label for="salespersonID">Salesperson ID:</label>
  <input type="text"  name="salespersonID" value="$salespersonID"><br>

  <input type="submit" name = "submit" value="Add to Database">
</form> 
</div>
_END;

  function fix_string($string)
  {
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return htmlentities ($string);
  }

?>
</body>

</html>
