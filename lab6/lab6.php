<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 6</title>
</head>

<body>
    <?php 

				
			if (isset($_POST['submit'])) {
				showBMI();
			} else {
				getBMI();
			}

			echo "<br>";


			function getBMI() {
				
				$initalHTML = <<< intial
				<style>
					body {
						background-color: white;
						color: navy;
						font-family: helvetica;
					}
					#wrapper {
						background-color: white;
					}
				</style>
                
				<script>
					function validate(form){
				        fail  = validateFirstName(form.firstName.value)
				        fail += validateWeight(form.weight.value)
				        fail += validateHeight(form.height.value)
				        if (fail == "")     return true
				        else { alert(fail); return false }
				      }
				    function validateFirstName(field){
				        return (field == "") ? "No first name was entered.\\n" : ""
				      }
				    function validateWeight(field){
				        if (field == "" || isNaN(field)) return "No weight was entered.\\n"
				        else if (field < 50 || field > 800)
				          return "Weight must be between 50 and 800 pounds.\\n"
				        return ""
				      }
				    function validateHeight(field){
				        if (field == "" || isNaN(field)) return "No height was entered.\\n"
				        else if (field < 45 || field > 120)
				          return "Height must be between 45 and 120 inches.\\n"
				        return ""
				      }
				</script>
                
				<div id = "wrapper">	
                <form method="post" onSubmit="return validate(this)">
							First Name: <input type="text" maxlength="30" name="firstName">
                            <br>
                            Weight in pounds: <input type="text" maxlength="4" name="weight">
                            <br>
                            Height in inches: <input type="text" maxlength="3" name="height">
                            <br>
                            <input type="submit" value="Calculate" name="submit">
				</div>
intial;
                
                

				print "$initalHTML";
			}

			function showBMI(){
				$weight  = fix_string($_POST['weight'])/2.2046;
				$height  = fix_string($_POST['height'])*.0254;
				$BMI = round(($weight/pow($height,2)),2);
				if ($BMI < 18.5){
					$category = "underweight";
				}
				else if ($BMI < 24.9) {
					$category = "normal";
				}
				else if ($BMI < 29.9) {
					$category = "overweight";
				}
				else{
					$category = "obese";
				}

				$resultsHTML = <<< results
                
				<style>
					body {
						background-color: white;
						color: navy;
						font-family: helvetica;
					}
					#wrapper {
						background-color: white;
					}
				}
				</style>
                

				<div id = "wrapper">	
					<h2 class = "left">Results:</h1>
					<h2 class = "left">Your BMI is $BMI</h2>
					<h2 class = "left">You are $category</h2>
                    <br>
						<form action="thanks.php" method="post">
							First Name: <input type="text" name="firstName">
                            <br>
                            Last Name: <input type="text" name="lastName">
                            <br>
                            Feedback: <input type="text" name="feedback">
                            <br>
                            <input type="submit">
				</div>
results;
				print "$resultsHTML";
			}

			function validate(){
				$firstName = $weight = $height = "";

				if (isset($_POST['firstName']))
				    $firstName = fix_string($_POST['firstName']);
				if (isset($_POST['weight']))
				    $weight  = fix_string($_POST['weight']);
				if (isset($_POST['height']))
				    $height = fix_string($_POST['height']);

				$valid  = !(validate_notEmpty($firstName) || validate_weight($weight) || validate_height($height));

				return $valid;

			}


			function validate_height($field){
			    if ($field == ""){
			    	return true;
			    }
			    else if ($field < 60 || $field > 84){
			    	return true;
			    }
			  	else{
			    	return false;
			  	}
			  }

			function validate_weight($field){
			    if ($field == "") return true;
			    else if ($field < 100 || $field > 200)
			      return true;
			    return false;
			  }

			function fix_string($string){
			    if (get_magic_quotes_gpc()) $string = stripslashes($string);
			    return htmlentities ($string);
			  }

		 ?>
    <br><br><br><br><br><br>
    <p>(Check out my source code below!)</p>
    <?php
show_source("lab6.php");
?>
</body>

</html>
