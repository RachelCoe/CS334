<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 7</title>
</head>

<body>
    <?php 
			if (isset($_POST['billsubmit'])) {
				bill();				
			}
			elseif (isset($_POST['primesubmit'])){
				prime();	
			}
			elseif (isset($_POST['factorialsubmit'])) {
				factorial();			
			}
			else { 
				home();
			} 

			echo "<br><br><p><i>Check out my source code below:</i></p><br>";
			show_source("lab7.php");

function home() {
				
				$initialHTML = <<< initial
                <style>
					body {
						background-color: white;
						color: navy;
						font-family: helvetica;
					}
                    div{
    border: 2px solid navy;
  border-radius: 8px;
    padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  width: 35%;
                    }
				</style>
                
				<script>
					function validateFactorial(form){
				        fail = validateField(form.factorial.value)
				        if (fail == "")     return true
				        else { alert(fail); return false }
				      }
				    function validatePrime(form){
				        fail  = validateField(form.prime.value)
				        if (fail == "")     return true
				        else { alert(fail); return false }
				      }
				    function validatePretax(form){
				        fail  = validateField(form.pretax.value)
				        if (fail == "")     return true
				        else { alert(fail); return false }
				      }
			
				    function validateField(field){
				        if (field == "" || isNaN(field) || field < 0) return "Please enter a valid, non-negative number\\n"
				        return ""
				      }
				</script>
    <h1> Calculator Programs</h1>
<br>
    <div id="factorial">
        <h3>Factorial Calculator</h3>
        <p><i>Enter a number below to see if it's a factorial.</i></p>
        <form method="post" onSubmit="return validateFactorial(this)">
            Enter a number: <input type="text" name="factorial"><br><br>
            <input type="submit" value="Calculate" name="factorialsubmit">
        </form>
    </div>
    <br><br>
    <div id="prime">
        <h3>Prime Calculator</h3>
        <p><i>Enter a number below to see if it's a prime.</i></p>
        <form method="post" onSubmit="return validatePrime(this)">
            Enter a number: <input type="text" name="prime"><br><br>
            <input type="submit" value="Calculate" name="primesubmit">
        </form>
    </div>
    <br><br>
    <div id="bill">
        <h3>Restaurant Bill Calculator</h3>
        <p><i>Enter your total and desired tip to get a total amount.</i></p>
        <form method="post" onSubmit="return validatePretax(this">
            Total Before Tax: $<input type="text" name="pretax"><br><br>
            Desired Tip:<br>
            <input type="radio" name="tip" value=0.10>10%<br>
            <input type="radio" name="tip" value=0.15>15%<br>
            <input type="radio" name="tip" value=0.20>20%<br><br>
            <input type="submit" value="Calculate" name="billsubmit">
        </form>
    </div>
initial;
				print "$initialHTML";
			}

			function prime(){
				$input  = fix_string($_POST['prime']);
				$result = primecalc($input);
				
				$primeHTML = <<< primeresults
				<style>
					body {
						background-color: white;
						color: navy;
						font-family: helvetica;
					}
                div{
    border: 2px solid navy;
  border-radius: 8px;
    padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  width: 30%;
                    }
				</style>
				<div>	
					<h2>Results</h2>
					<h3>$input $result</h3>
				</div>
primeresults;
				print "$primeHTML";
			}

			function primecalc($input) {
				if (($input%2 == 0 && $input != 2) || $input == 1){
					return("is not a prime number.");
				}
        
			    else {
			        $i = floor(sqrt($input));
			        if ($i%2 == 0) {
			            $i--;
			        }

			        while ($i > 1) {
			            if ($input % $i == 0) {
			                return("is not a prime number.");
			            }
			            $i = $i - 2; 
			        }
			        return("is a prime number.");
			    }
			}

			function bill(){
				$pretax  = fix_string($_POST['pretax']);
				$tiprate = $_POST['tip'];
				$tax = round(0.07*$pretax,2);
				$tip = round($tiprate*($pretax + $tax),2);
				$total = round($pretax + $tax + $tip,2); 

				

				$billHTML = <<< billresults
				<style>
					body {
						background-color: white;
						color: navy;
						font-family: helvetica;
					}
                                                            div{
    border: 2px solid navy;
  border-radius: 8px;
    padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  width: 30%;
                    }
				</style>

				<div>	
					<h2>Results</h2>
					<h3>Pre-tax total: $ $pretax</h3>
					<h3>Tax: $ $tax</h3>
					<h3>Tip: $ $tip</h3>
					<h3>Your total bill is: $ $total</h3>
				</div>
billresults;
				print "$billHTML";
			}

			function factorial(){
				$input  = fix_string($_POST['factorial']);
				$factorial = 1;
				for ($i = $input; $i > 0; $i--){
					$factorial *= $i;
				}
				

				$factorialHTML = <<< factorialresults
				<style>
					body {
						background-color: white;
						color: navy;
						font-family: helvetica;
					}
                                                            div{
    border: 2px solid navy;
  border-radius: 8px;
    padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  width: 30%;
                    }
				</style>

				<div>	
					<h2>Results</h2>
					<h3>$input ! = $factorial</h3>
				</div>
factorialresults;
				print "$factorialHTML";
			}

			function fix_string($string){
			    if (get_magic_quotes_gpc()) $string = stripslashes($string);
			    return htmlentities ($string);
			  }
		 ?>
</body>

</html>
