<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<head>
    <title>Lab 8</title>
</head>

<body>
    <?php 

			initialHTML();
			temps();
			names();
			colorquote();
			colorsort();
			countries();

			echo "<br><br><p><i>Check out my source code below:</i></p><br>";
			show_source("lab8.php");


			function initialHTML() {

			$initialHTML = <<< initial
initial;
                
			print "$initialHTML";
            
			}

			function temps() {

				$temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
				$tempAvg = round(array_sum($temps)/count($temps),1);
				sort($temps);

				$temp1  = $temps[0];
				$temp2  = $temps[1];
				$temp3  = $temps[2];
				$temp4  = $temps[3];
				$temp5  = $temps[4];
				$temp6  = $temps[5];
				$temp7  = $temps[6];
				$temperature1 = $temps[count($temps) - 7];
				$temperature2 = $temps[count($temps) - 6];
				$temperature3 = $temps[count($temps) - 5];
				$temperature4 = $temps[count($temps) - 4];
				$temperature5 = $temps[count($temps) - 3];
				$temperature6 = $temps[count($temps) - 2];
				$temperature7 = $temps[count($temps) - 1];
				

				$tempsHTML = <<< tempsHTML
                <br><br>
				<div>	
					<h3>Temperature:</h3>
					<p><b>Average temperature is :</b> $tempAvg</p>
					<p><b>List of seven lowest temperatures:</b> $temp1, $temp2, $temp3, $temp4, $temp5, $temp6, $temp7</p>
					<p><b>List of seven highest temperatures:</b> $temperature1, $temperature2, $temperature3, $temperature4, $temperature5, $temperature6, $temperature7</p>
				</div>
                <br><br>
                
                <style>
					body {
						background-color: white;
						font-family: helvetica;
					}
                div{
    border: 2px solid;
  border-radius: 8px;
    padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
  padding-left: 20px;
  width: 60%;
                    }
				</style>
tempsHTML;
				print($tempsHTML);

			}

			function names() {

				$namesValueAscending = array("Sophia"=>"17000","Jacob"=>"12000","William"=>"300","Ramesh"=>"10000");
				$namesKeyAscending = $namesValueAscending;
				$namesValueDescending = $namesValueAscending;
				$namesKeyDescending = $namesValueAscending;
				asort($namesValueAscending);
				ksort($namesKeyAscending);
				arsort($namesValueDescending);
				krsort($namesKeyDescending);

				print("<div>");
					print("<h3>Names:</h3>");

					print("<p><b>Ascending order sorted by value: </b></p>");
					print_r($namesValueAscending);
					print("<br>");

					print("<p><b>Ascending order sorted by Key: </b></p>");
					   print_r($namesKeyAscending);
					print("<br>");

					print("<p><b>Descending order sorted by Value: </b></p>");
					   print_r($namesValueDescending);
					print("<br>");

					print("<p><b>Descending order sorted by Key: </b></p>");
					   print_r($namesKeyDescending);
					print("<br>");
				print("</div><br><br>");

				
			}

			function colorquote() {

				$color = array('white', 'green', 'red', 'blue', 'black');

				$quoteHTML = <<< quoteHTML
				<div>	
					<h3>Color Quote:</h3>
					<p>The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon</p>
				</div>
                <br><br>
				
quoteHTML;
				print($quoteHTML);

			}	

			function colorsort() {
				$color = array('White', 'Green', 'Red');
				$colorsorted = array('White', 'Green', 'Red');
				sort($colorsorted);

				$sortHTML = <<< sortHTML
				<div>	
					<h3>Color Sort:</h3>
					<p><b>Original Array Content Order:</b></p>
					<p>$color[0], $color[1], $color[2]</p>
                    
					<p><b>Modified Array Content Order:</b></h3>
					<p>$colorsorted[0]</p>
					<p>$colorsorted[1]</p>
					<p>$colorsorted[2]</p>
				</div>
                <br><br>
				
sortHTML;
				print($sortHTML);

			}

			function countries() {

				$ceu = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

				asort($ceu);				

				print("<div>");	
					print("<h3>Countries:</h3>");
					foreach($ceu as $country => $capital){
						print("<p>The capital of $country is $capital!</p>");
					}
				print("</div>");
			}
		 ?>
</body>

</html>
