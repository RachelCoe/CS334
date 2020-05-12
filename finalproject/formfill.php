<!DOCTYPE html>
<!-- Rachel Coe CS334 -->
<html>

<head>
    <title>Register</title>
</head>

<body>
    <?php 
    include 'index.html';
?>
<br>
    <p>Create an account with us below!</p><br>
    <div>
        <form action="register.php" method="post">
            <label for="firstName">First name:</label>
            <input name="firstName" required="required" placeholder="First Name" type="text"><br>
            <label for="lastName">Last name:</label>
            <input name="lastName" required="required" placeholder="Last Name" type="text"><br>
            <label for="streetAddress1">Street Address 1:</label>
            <input name="streetAddress1" required="required" placeholder="Street Address 1" type="text"><br>
            <label for="streetAddress2">Street Address 2:</label>
            <input name="streetAddress2" required="required" placeholder="Street Address 2" type="text"><br>
            <label for="city">City:</label>
            <input name="city" required="required" placeholder="City" type="text"><br>
            <label for="state">State:</label>
            <input name="state"  required="required" placeholder="State" type="text"><br>
            <label for="postalCode">Postal Code:</label>
            <input name="postalCode" required="required" placeholder="Postal Code" type="text"><br>
            <label for="country">Country:</label>
            <input name="country"  required="required" placeholder="Country" type="text"><br>
            <label for="email">Email:</label>
            <input name="email"  required="required" placeholder="Email" type="text"><br>
            <label for="phone">Phone:</label>
            <input name="phone"  required="required" placeholder="Phone" type="text"><br>
            <label for="password">Password:</label>
            <input name="password"  required="required" placeholder="Password" type="text"><br>
            <input value="Submit" type="submit">
        </form> 
    </div>
</body>
</html>