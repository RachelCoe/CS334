<!DOCTYPE html>
<!-- Rachel Coe CS334 -->
<html>

<head>
    <title>Register</title>
</head>

<body>
    <?php 
    include 'index.html';
    
     $db_hostname = 'sql311.epizy.com'; 
     $db_database = 'epiz_25052625_final'; 
     $db_username = 'epiz_25052625'; 
     $db_password = 'FOqpLuVYlhRdh';
      
    // create connection to be used in mysqli_query
    $con=mysqli_connect($db_hostname, $db_username, $db_password, $db_database) or die("Unable to connect to MySQL: " . mysql_error());
    // Get values from form

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $streetAddress1 = $_POST['streetAddress1'];
    $streetAddress2 = $_POST['streetAddress2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Insert data into mysql

    $sql= "INSERT INTO USERS (userID, firstName, lastName, streetAddress1, streetAddress2, city, state, postalCode, email, phone, password) VALUES ('$userID', '$firstName', '$lastName', '$streetAddress1', '$streetAddress2', '$city', '$state', '$postalCode', '$email' ,'$phone','$password')";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }

    //if successfully insert data into database, displays message "Successful".
    if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
          echo "There was an error, please resumbit the form!"; 
          } 

    //close mysql
    mysqli_close($con);
?>


</body>

</html>
