<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 10 - Edit</title>
</head>

<body>
    <?php 
     include 'menu.html';

     require_once 'login.php'; 
      
     $query = "SELECT * from CUSTOMER"; 
     $result = $conn->query($query); 
     if(!$result) die ("Could not access the database, please try again!"); 

     $firstName = $newEmail = $newCellNumber = $newHomeNumber = $newPassword = $newFacebook = "";

     if (isset($_POST['submit'])){
          //Get values from form
          $firstName = $_POST['first_name'];
          $newEmail = $_POST['email'];

          $query = "UPDATE CUSTOMER SET email = '$newEmail' WHERE firstName = '$firstName'";


          $result=mysqli_query($conn, $query); 
          
 
          if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
            echo "ERROR"; 
          } 


          mysqli_close($conn);                 
     }
    if (isset($_POST['submit'])){

          $firstName = $_POST['first_name'];
          $newCellNumber = $_POST['cellphone'];

          $query = "UPDATE CUSTOMER SET cellPhone = '$newCellNumber' WHERE firstName = '$firstName'";


          $result=mysqli_query($conn, $query); 
          

          if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
            echo "ERROR"; 
          } 

          mysqli_close($conn);                 
     }
        if (isset($_POST['submit'])){
          //Get values from form
          $firstName = $_POST['first_name'];
          $newHomeNumber = $_POST['homephone'];

          $query = "UPDATE CUSTOMER SET homePhone = '$newHomeNumber' WHERE firstName = '$firstName'";


          $result=mysqli_query($conn, $query); 
          

          if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
            echo "ERROR"; 
          } 


          mysqli_close($conn);                 
     }
            if (isset($_POST['submit'])){
          //Get values from form
          $firstName = $_POST['first_name'];
          $newPassword = $_POST['password'];

          $query = "UPDATE CUSTOMER SET password = '$newPassword' WHERE firstName = '$firstName'";

          $result=mysqli_query($conn, $query); 
          
          if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
            echo "ERROR"; 
          } 


          mysqli_close($conn);                 
     }
                if (isset($_POST['submit'])){

          $firstName = $_POST['first_name'];
          $newFacebook = $_POST['facebook'];

          $query = "UPDATE CUSTOMER SET facebookURL = '$newFacebook' WHERE firstName = '$firstName'";

          $result=mysqli_query($conn, $query); 
          
          if($result) { 
          header('Location: thankyou.php'); 
          } 
          else { 
            echo "ERROR"; 
          } 
          mysqli_close($conn);                 
     }
    
?>

    <br><br>
    <div>
        <p><b>Enter your first name to edit your email address</b></p>
        <form action="" method="post">
            <p>
                <label>First Name:</label>
                <input name="first_name" required="required" placeholder="First Name" type="text"><br><br>
                <label>New E-Mail:</label>
                <input name="email" required="required" placeholder="New Email" type="email"><br><br>
                <input value="Update" name="submit" type="submit">
            </p>
        </form>
    </div>
    <br>
    <div>
        <p><b>Enter your first name to edit your cellphone number</b></p>
        <form action="" method="post">
            <p>
                <label>First Name:</label>
                <input name="first_name" required="required" placeholder="First Name" type="text"><br><br>
                <label>New Cellphone Number:</label>
                <input name="cellPhone" required="required" placeholder="Cell phone" type="text"><br><br>
                <input value="Update" name="submit" type="submit">
            </p>
        </form>
    </div>
    <br>
    <div>
        <p><b>Enter your first name to edit your home phone number</b></p>
        <form action="" method="post">
            <p>
                <label>First Name:</label>
                <input name="first_name" required="required" placeholder="First Name" type="text"><br><br>
                <label>New Cellphone Number:</label>
                <input name="homePhone" required="required" placeholder="Home Phone" type="text"><br><br>
                <input value="Update" name="submit" type="submit">
            </p>
        </form>
    </div>
    <br>
    <div>
        <p><b>Enter your first name to edit your password</b></p>
        <form action="" method="post">
            <p>
                <label>First Name:</label>
                <input name="first_name" required="required" placeholder="First Name" type="text"><br><br>
                <label>New Password:</label>
                <input name="password" required="required" placeholder=" New Password" type="text"><br><br>
                <input value="Update" name="submit" type="submit">
            </p>
        </form>
    </div>
    <br>
    <div>
        <p><b>Enter your first name to edit your facebook URL</b></p>
        <form action="" method="post">
            <p>
                <label>First Name:</label>
                <input name="first_name" required="required" placeholder="First Name" type="text"><br><br>
                <label>New Facebook URL:</label>
                <input name="facebook" required="required" placeholder="Facebook.com" type="text"><br><br>
                <input value="Update" name="submit" type="submit">
            </p>
        </form>
    </div>
    <br><br>

</body>

</html>
