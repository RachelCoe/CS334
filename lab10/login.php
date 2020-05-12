<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 10</title>
</head>

<body>
    <?php //login.php 
     $db_hostname = 'hostnamee';  
     $db_database = 'epiz_25052625_labnine'; 
     $db_username = 'epiz_25052625'; 
     $db_password = 'password'; 

//connect to server using mysqli 
     $conn = new mysqli($db_hostname, $db_username, $db_password, $db_database); 
     if ($conn->connect_error) die("Fatal Error"); 

?>

</body>

</html>
