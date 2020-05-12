<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html lang="en">

<head>
    <title>Lab 4</title>
    <!-- Custom styles for this template -->
    <link href="stylesheet.css" rel="stylesheet">

    <style>
        .signup {
        border:1px solid #999999;
        font:  normal 14px helvetica;
        color: #444444;
      }
    </style>


    <script>
        function validate(form)
      {
        fail  = validateFirstName(form.firstname.value)
        fail += validateSurname(form.surname.value)
        fail += validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        fail += validateAge(form.age.value)
        fail += validateEmail(form.email.value)

        if   (fail == "")   return true
        else { alert(fail); return false }
      }
     </script>
    <script src="validatefunctions.js"></script>

</head>

<body>
    <div class="table">
        <table class="signup" border="0" cellpadding="2" cellspacing="5" bgcolor="#eeeeee">
            <th colspan="2" align="center">Signup Form</th>
            <form method="post" action="adduser.php" onsubmit="return validate(this)">
                <tr>
                    <td>First Name</td>
                    <td><input type="text" maxlength="32" name="firstname"></td>
                </tr>
                <tr>
                    <td>Surname</td>
                    <td><input type="text" maxlength="32" name="surname"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" maxlength="16" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" maxlength="12" name="password"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" maxlength="3" name="age"></td>
                </tr>
                <tr>
                    <td>PhoneNumber</td>
                    <td><input type="number" maxlength="10" name="PhoneNumber"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" maxlength="64" name="email"></td>
                </tr>
                <tr>
                    <td>Zipcode</td>
                    <td><input type="number" maxlength="5" name="zipcode"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Signup"></td>
                </tr>
            </form>
        </table>
    </div>

    <div class="image">
        <img src="pitt.png" onmouseover="this.src='pittpanther.png'" onmouseout="this.src='pitt.png'">
    </div>

    <div class="article">
        <div class="hailtopitt">
            <?php
        echo "Hail to Pitt!";
        ?>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet sapien urna. Nulla blandit finibus vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed lacinia erat est, semper efficitur tellus fermentum sit amet. In hendrerit id lacus pretium placerat. Proin justo nisl, maximus ac finibus vitae, mollis sit amet dolor. Curabitur eget diam sed libero finibus pharetra sed sit amet lacus. Suspendisse elit diam, tempor eu tempor eu, hendrerit quis est. Ut porttitor est in ullamcorper dapibus. Quisque at purus id magna semper blandit. Donec efficitur erat quis mauris fringilla, nec auctor eros feugiat. Suspendisse at lacus ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vel quam et erat imperdiet eleifend.
            <br><br>Vivamus feugiat lectus eget ante viverra dapibus. Sed lacinia ipsum et ligula viverra, ut consequat leo posuere. Nullam ligula lectus, euismod at accumsan ac, porta sit amet diam. Nullam a odio efficitur, laoreet urna non, venenatis ante. Sed sed tortor at felis placerat rutrum. Duis vulputate felis quis luctus congue. In quis tortor et metus congue tempus et a nulla. Praesent auctor auctor ipsum sed efficitur. Aliquam erat volutpat. Integer scelerisque varius ullamcorper. Maecenas iaculis dictum lorem in rutrum. Vestibulum rhoncus, est ac molestie fringilla, neque mauris aliquet ex, vel tristique diam dolor vitae ante. Etiam pretium condimentum tortor in pretium.
            <br><br>Morbi sed condimentum ipsum. Proin in mauris enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus laoreet felis et hendrerit venenatis. Nullam rhoncus in urna sed egestas. Pellentesque eget turpis mollis, faucibus odio a, dignissim purus. Quisque egestas mi nec dui placerat pellentesque. Morbi id quam eget massa venenatis gravida ac sed lectus. Integer lacinia tempus justo. In ac libero augue. Pellentesque ac massa orci. Nullam eget sem arcu. Suspendisse potenti.
            <br><br>Curabitur eros est, facilisis commodo tortor vel, consectetur accumsan elit. Nullam vel nisi mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum sagittis, nisl a viverra viverra, magna arcu accumsan quam, ac consequat neque eros in tortor. Mauris viverra leo ut lorem tincidunt, sed porttitor mi convallis. Morbi ligula arcu, commodo vitae nisi nec, pretium molestie orci. Sed sagittis tortor sit amet nulla faucibus aliquet. Vestibulum lorem tellus, cursus et nunc non, mattis mattis nibh. Integer volutpat ut lacus imperdiet cursus. Pellentesque efficitur lobortis erat sed pretium. Pellentesque vulputate a nisl sit amet mattis. Nulla sit amet venenatis nunc, id lacinia mauris. Aliquam imperdiet est leo, sit amet interdum nunc sagittis at.
            <br><br>Sed non orci consectetur eros aliquam gravida. Aenean dapibus leo est, sed viverra metus vulputate eget. Aenean ultricies ipsum in ipsum suscipit, ut tincidunt arcu consequat. In sed dui finibus, ornare purus non, cursus lorem. Vestibulum sed euismod turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam non elementum ligula. Vestibulum eget ornare massa. Fusce hendrerit varius enim sit amet luctus. Morbi sed molestie mauris, sed laoreet urna. Nam ipsum velit, blandit vitae nibh non, porta maximus tellus. Suspendisse at maximus felis, in laoreet nunc.
            <br><br>Nullam efficitur tristique varius. Nunc sed eros lorem. Pellentesque finibus arcu velit, sit amet lobortis mi auctor et. Vivamus in quam at arcu tempus cursus. Donec ullamcorper augue eu nunc tempor, eget scelerisque leo tempus. Quisque eleifend sed augue vitae aliquet. Cras neque purus, efficitur et ullamcorper sed, dignissim eu odio. Fusce nisl nunc, vehicula ac lacus eget, egestas porttitor felis. Pellentesque eleifend in elit vel tincidunt. Nulla egestas volutpat gravida. Vivamus euismod congue sodales. Morbi varius est eu eros suscipit gravida sit amet vitae erat. Maecenas ullamcorper ex at posuere luctus. Suspendisse potenti. Fusce tristique porttitor quam in rutrum. Maecenas placerat pulvinar est, at consequat augue tincidunt eu.
            <br><br>Pellentesque et ante quis augue scelerisque tristique. Duis et iaculis nulla. Proin eget rhoncus lacus, sit amet convallis risus. In in libero non ante ultrices bibendum. Proin cursus purus non neque mattis mattis. Sed vehicula ex quis libero lobortis accumsan. Sed pretium est quam, a mattis velit ultricies sit amet. Donec tortor diam, convallis at faucibus in, vulputate non dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam molestie vel eros vitae ornare.
            <br><br>Integer tempus posuere magna, et ultricies magna rhoncus ut. Ut ut justo auctor, blandit mauris sed, ultrices nulla. Donec sed tempus ex. Suspendisse ut metus elit. Nulla id consectetur justo. Aliquam tincidunt nibh et sapien ultrices accumsan. Sed vel justo ac mi dignissim malesuada a vel metus. Quisque ultrices et tellus a sagittis. Aenean metus tortor, rhoncus eget suscipit non, rhoncus eu nisi. In hac habitasse platea dictumst. Curabitur pellentesque lobortis lacus, a pretium orci dictum a. Donec eleifend iaculis augue, ac fermentum quam euismod id. Pellentesque lobortis semper est, ut feugiat odio ultricies vel. Morbi dolor leo, aliquam vel pulvinar.
        </p>
        <a href="lab4.php">Link to source code</a>
    </div>

</body>

</html>
